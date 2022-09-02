<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\Listener;

class BlockPlaceEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockPlace(BlockPlaceEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$blockAgainst = $event->getBlockAgainst();
		$blockReplaced = $event->getBlockReplaced();
		$item = $event->getItem();
		$player = $event->getPlayer();
		$playerName = $player->getName();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | BlockAgainst: [$blockAgainst] | BlockReplaced: $blockReplaced | Item: $item | Player: $player [$playerName]");
	}
}
