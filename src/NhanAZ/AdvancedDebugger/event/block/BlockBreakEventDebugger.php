<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use function implode;

class BlockBreakEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onBlockBreak(BlockBreakEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$block = $event->getBlock();
		$blockPosition = $block->getPosition();
		$drops = $event->getDrops();
		$drops = implode("", $drops);
		$instaBreak = $event->getInstaBreak();
		$item = $event->getItem();
		$player = $event->getPlayer();
		$playerName = $player->getName();
		$xpDropAmount = $event->getXpDropAmount();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Block: $block [$blockPosition] | Drops: [$drops] | InstaBreak: $instaBreak | Item: $item | Player: $player [$playerName] | XpDropAmount: $xpDropAmount");
	}
}
