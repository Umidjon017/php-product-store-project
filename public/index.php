<?php declare(strict_types=1);

use App\App;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/functions.php';

const VIEW_PATH = __DIR__ . '/../resources';

(new App())->run();


