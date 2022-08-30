<?php

declare(strict_types=1);

namespace NhanAZ\AdvancedDebuger;

use DateTimeZone;
use JackMD\ConfigUpdater\ConfigUpdater;
use JackMD\UpdateNotifier\UpdateNotifier;
use pocketmine\lang\Language;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\MainLogger;
use pocketmine\utils\Terminal;
use pocketmine\utils\Timezone;
use Webmozart\PathUtil\Path;
use function boolval;
use function intval;
use function strval;
use const DIRECTORY_SEPARATOR;

class Main extends PluginBase {

	private function getLanguage() : Language {
		return new Language(
			strval($this->getConfig()->get("language", Language::FALLBACK_LANGUAGE)),
			$this->getFile() . "resources" . DIRECTORY_SEPARATOR . "languages" . DIRECTORY_SEPARATOR
		);
	}

	protected function onEnable() : void {
		ConfigUpdater::checkUpdate($this, $this->getConfig(), "configVersion", intval($this->getDescription()->getVersion()), $this->getLanguage()->translateString("configUpdate.message"));
		UpdateNotifier::checkUpdate($this->getDescription()->getName(), $this->getDescription()->getVersion());
		if (!$this->getConfig()->get("debugMode")) {
			$this->getLogger()->warning($this->getLanguage()->translateString("debugMode.disabled"));
			return;
		}
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
	}

	private function getMainLogger() : MainLogger {
		return new MainLogger(Path::join($this->getDataFolder(), "logs.log"), Terminal::hasFormattingCodes(), "Server", new DateTimeZone(Timezone::get()), boolval($this->getConfig()->get("debugMode")));
	}

	public function debug(string $message) : void {
		$this->getMainLogger()->debug($message);
	}
}
