<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\BlockBurnEvent;
use pocketmine\event\Listener;

class BlockBurnEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockBurn(BlockBurnEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$causingBlock = $event->getCausingBlock();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | CausingBlock: $causingBlock");
	}
}
