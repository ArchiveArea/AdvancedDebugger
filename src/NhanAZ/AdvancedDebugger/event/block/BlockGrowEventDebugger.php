<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\BlockGrowEvent;
use pocketmine\event\Listener;

class BlockGrowEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockGrow(BlockGrowEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$newState = $event->getNewState();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | NewState: $newState");
	}
}
