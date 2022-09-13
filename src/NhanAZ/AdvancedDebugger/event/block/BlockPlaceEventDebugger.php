<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\Listener;

class BlockPlaceEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockPlace(BlockPlaceEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$blockAgainst = $event->getBlockAgainst();
		$blockReplaced = $event->getBlockReplaced();
		$item = $event->getItem();
		$player = $event->getPlayer();
		$playerName = $player->getName();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | BlockAgainst: [$blockAgainst] | BlockReplaced: $blockReplaced | Item: $item | Player: $player [$playerName]");
	}
}
