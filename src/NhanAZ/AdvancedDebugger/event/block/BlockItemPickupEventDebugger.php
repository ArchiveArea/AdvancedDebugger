<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\BlockItemPickupEvent;
use pocketmine\event\Listener;

class BlockItemPickupEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockItemPickup(BlockItemPickupEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		// TODO: $inventory = $event->getInventory();
		$item = $event->getItem();
		$origin = $event->getOrigin();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | Item: $item | Origin: $origin");
	}
}
