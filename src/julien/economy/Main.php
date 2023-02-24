<?php

declare(strict_types=1);

/**
 *  _____    ____    ___    _   _    ___    __  __  __   __
 * | ____|  / ___|  / _ \  | \ | |  / _ \  |  \/  | \ \ / /
 * |  _|   | |     | | | | |  \| | | | | | | |\/| |  \ V /
 * | |___  | |___  | |_| | | |\  | | |_| | | |  | |   | |
 * |_____|  \____|  \___/  |_| \_|  \___/  |_|  |_|   |_|
 *
 * @author Julien
 * @link https://github.com/Dumont-Julien
 */

namespace julien\economy;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase {

    use SingletonTrait;

    protected function onLoad(): void {
        self::setInstance($this);
    }

    protected function onEnable(): void{
        if (!file_exists($this->getDataFolder() . 'config.yml'))
            $this->saveDefaultConfig();

        if ($this->getConfig()->get('config') === 'config'){
            if (!file_exists($this->getDataFolder() . 'economy/'))
                @mkdir($this->getDataFolder() . 'economy/');
        }

        $this->getLogger()->info('Economy plugin enable.');

    }
}