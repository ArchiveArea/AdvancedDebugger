<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger\utils;

use NhanAZ\AdvancedDebugger\Main;

trait SingletonTrait {

	public static Main $instance;

	public static function setInstance(Main $instance) : void {
		self::$instance = $instance;
	}

	public static function getInstance() : Main {
		return self::$instance;
	}
}
