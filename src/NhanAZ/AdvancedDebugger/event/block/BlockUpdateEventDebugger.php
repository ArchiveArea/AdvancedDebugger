<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\event\Listener;

class BlockUpdateEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockUpdate(BlockUpdateEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition]");
	}
}
