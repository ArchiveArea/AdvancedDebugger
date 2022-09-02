<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\BrewingFuelUseEvent;
use pocketmine\event\Listener;

class BrewingFuelUseEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBrewingFuelUse(BrewingFuelUseEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		// TODO: $brewingStand = $event->getBrewingStand();
		$fuelTime = $event->getFuelTime();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | FuelTime: $fuelTime");
	}
}
