<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\BlockTeleportEvent;
use pocketmine\event\Listener;

class BlockTeleportEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockTeleport(BlockTeleportEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$to = $event->getTo();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | To: $to");
	}
}
