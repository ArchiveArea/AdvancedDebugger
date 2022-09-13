<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\BlockSpreadEvent;
use pocketmine\event\Listener;

class BlockSpreadEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockSpread(BlockSpreadEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$newState = $event->getNewState();
		$source = $event->getSource();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | NewState: $newState | Source: $source");
	}
}
