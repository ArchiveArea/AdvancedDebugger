<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\BlockFormEvent;
use pocketmine\event\Listener;

class BlockFormEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockForm(BlockFormEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$newState = $event->getNewState();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | NewState: $newState");
	}
}
