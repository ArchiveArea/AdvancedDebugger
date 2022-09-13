<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\utils;

use NhanAZ\AdvancedDebugger\AdvancedDebugger;

trait SingletonTrait {

	public static AdvancedDebugger $instance;

	public static function setInstance(AdvancedDebugger $instance) : void {
		self::$instance = $instance;
	}

	public static function getInstance() : AdvancedDebugger {
		return self::$instance;
	}
}
