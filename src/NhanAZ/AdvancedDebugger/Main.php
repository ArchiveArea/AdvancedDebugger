<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebugger;

use DateTimeZone;
use JackMD\ConfigUpdater\ConfigUpdater;
use JackMD\UpdateNotifier\UpdateNotifier;
use NhanAZ\AdvancedDebugger\event\block\BlockBreakEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockBurnEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockFormEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockGrowEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockItemPickupEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockMeltEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockPlaceEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockSpreadEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockTeleportEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BlockUpdateEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BrewingFuelUseEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\BrewItemEventDebugger;
use NhanAZ\AdvancedDebugger\event\block\ChestPairEventDebugger;
use NhanAZ\AdvancedDebugger\utils\SingletonTrait;
use pocketmine\event\Event;
use pocketmine\event\Listener;
use pocketmine\lang\Language;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\MainLogger;
use pocketmine\utils\Terminal;
use pocketmine\utils\Timezone;
use Webmozart\PathUtil\Path;
use function boolval;
use function end;
use function explode;
use function file_exists;
use function intval;
use function mkdir;
use function strval;
use const DIRECTORY_SEPARATOR;

class Main extends PluginBase {
	use SingletonTrait;

	private function getLanguage() : Language {
		return new Language(
			strval($this->getConfig()->get("language", Language::FALLBACK_LANGUAGE)),
			$this->getFile() . "resources" . DIRECTORY_SEPARATOR . "languages" . DIRECTORY_SEPARATOR
		);
	}

	protected function onEnable() : void {
		self::setInstance($this);
		ConfigUpdater::checkUpdate($this, $this->getConfig(), "configVersion", intval($this->getDescription()->getVersion()), $this->getLanguage()->translateString("configUpdate.message"));
		UpdateNotifier::checkUpdate($this->getDescription()->getName(), $this->getDescription()->getVersion());
		if (!$this->getConfig()->get("debugMode")) {
			$this->getLogger()->warning($this->getLanguage()->translateString("debugMode.disabled"));
			return;
		}
		$this->registerEvents();
	}

	private function registerEvent(Listener $event) : void {
		$this->getServer()->getPluginManager()->registerEvents($event, $this);
	}

	private function registerEvents() : void {
		$this->registerEvent(new BlockBreakEventDebugger());
		$this->registerEvent(new BlockBurnEventDebugger());
		$this->registerEvent(new BlockFormEventDebugger());
		$this->registerEvent(new BlockGrowEventDebugger());
		$this->registerEvent(new BlockItemPickupEventDebugger());
		$this->registerEvent(new BlockMeltEventDebugger());
		$this->registerEvent(new BlockPlaceEventDebugger());
		$this->registerEvent(new BlockSpreadEventDebugger());
		$this->registerEvent(new BlockTeleportEventDebugger());
		$this->registerEvent(new BlockUpdateEventDebugger());
		$this->registerEvent(new BrewingFuelUseEventDebugger());
		$this->registerEvent(new BrewItemEventDebugger());
		$this->registerEvent(new ChestPairEventDebugger());
	}

	private function getMainLogger(string $eventName) : MainLogger {
		if ($this->getConfig()->get("logFile") == "single") {
			return new MainLogger(Path::join($this->getDataFolder(), "logs.log"), Terminal::hasFormattingCodes(), "Server", new DateTimeZone(Timezone::get()), boolval($this->getConfig()->get("debugMode")));
		}
		if ($this->getConfig()->get("logFile") == "separate") {
			if (!file_exists($this->getDataFolder() . "logs")) {
				@mkdir($this->getDataFolder() . "logs");
			}
			return new MainLogger(Path::join($this->getDataFolder(), "logs" . DIRECTORY_SEPARATOR . "$eventName.log"), Terminal::hasFormattingCodes(), "Server", new DateTimeZone(Timezone::get()), boolval($this->getConfig()->get("debugMode")));
		}
		return new MainLogger(Path::join($this->getDataFolder(), "logs.log"), Terminal::hasFormattingCodes(), "Server", new DateTimeZone(Timezone::get()), boolval($this->getConfig()->get("debugMode")));
	}

	public function getEventName(Event $event) : string {
		$names = explode("\\", $event->getEventName());
		return end($names);
	}

	public function debug(string $eventName, string $message) : void {
		$this->getMainLogger($eventName)->debug($message);
	}
}
