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

namespace julien\economy\utils;

use julien\economy\Main;

final class Utils {

    /**
     * @return string
     */
    public static function getPrefix(): string {
        return Main::getInstance()->getConfig()->get('prefix');
    }

}