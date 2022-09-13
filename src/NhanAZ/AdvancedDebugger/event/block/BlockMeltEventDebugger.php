<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\BlockMeltEvent;
use pocketmine\event\Listener;

class BlockMeltEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockMelt(BlockMeltEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$newState = $event->getNewState();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | NewState: $newState");
	}
}
