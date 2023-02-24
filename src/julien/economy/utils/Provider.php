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

use julien\economy\utils\trait\DataBase;
use pocketmine\scheduler\AsyncTask;

class Provider extends AsyncTask {
    use DataBase;

    public function __construct() {
    }

    public function onRun(): void {
    }

    public function onCompletion(): void {
    }
}