<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\Main;
use pocketmine\event\block\ChestPairEvent;
use pocketmine\event\Listener;

class ChestPairEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onChestPair(ChestPairEvent $event) : void {
		$eventName = Main::getInstance()->getEventName($event);
		$left = $event->getLeft();
		$leftPosition = $left->getPosition();
		$right = $event->getRight();
		$rightPosition = $right->getPosition();
		Main::getInstance()->debug($eventName, "EventName: $eventName | Left: $left [$leftPosition] | Right: $right [$rightPosition]");
	}
}
