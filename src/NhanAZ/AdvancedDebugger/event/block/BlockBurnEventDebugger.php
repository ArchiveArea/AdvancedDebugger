<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\BlockBurnEvent;
use pocketmine\event\Listener;

class BlockBurnEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockBurn(BlockBurnEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$causingBlock = $event->getCausingBlock();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | CausingBlock: $causingBlock");
	}
}
