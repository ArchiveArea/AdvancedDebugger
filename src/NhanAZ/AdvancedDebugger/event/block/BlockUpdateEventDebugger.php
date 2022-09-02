<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\event\Listener;

class BlockUpdateEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockUpdate(BlockUpdateEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition]");
	}
}
