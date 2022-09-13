<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\BrewingFuelUseEvent;
use pocketmine\event\Listener;

class BrewingFuelUseEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBrewingFuelUse(BrewingFuelUseEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		// TODO: $brewingStand = $event->getBrewingStand();
		$fuelTime = $event->getFuelTime();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | FuelTime: $fuelTime");
	}
}
