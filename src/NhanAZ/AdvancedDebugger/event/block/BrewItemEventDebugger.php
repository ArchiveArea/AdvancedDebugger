<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\BrewItemEvent;
use pocketmine\event\Listener;

class BrewItemEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBrewItem(BrewItemEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		// TODO: $brewingStand = $event->getBrewingStand();
		$input = $event->getInput();
		// TODO: $recipe = $event->getRecipe();
		$result = $event->getResult();
		$slot = $event->getSlot();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | Input: $input | Result: $result | Slot: $slot");
	}
}
