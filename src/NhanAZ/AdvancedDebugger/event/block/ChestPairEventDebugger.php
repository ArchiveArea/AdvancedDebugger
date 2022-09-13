<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\event\block;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;
use pocketmine\event\block\ChestPairEvent;
use pocketmine\event\Listener;

class ChestPairEventDebugger implements Listener {

	/**
	 * @handleCancelled true
	 */
	public function onChestPair(ChestPairEvent $event) : void {
		$eventName = AdvancedDebugger::getInstance()->getEventName($event);
		$left = $event->getLeft();
		$leftPosition = $left->getPosition();
		$right = $event->getRight();
		$rightPosition = $right->getPosition();
		AdvancedDebugger::getInstance()->debug($eventName, "EventName: $eventName | Left: $left [$leftPosition] | Right: $right [$rightPosition]");
	}
}
