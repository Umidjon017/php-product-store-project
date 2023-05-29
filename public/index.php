<?php declare(strict_types=1);

use App\App;
use App\Config;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/functions.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

const VIEW_PATH = __DIR__ . '/../resources';

session_start();

(new App(new Config($_ENV)))->run();


