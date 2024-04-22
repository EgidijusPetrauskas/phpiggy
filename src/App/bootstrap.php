<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use App\Config\Paths;
use Dotenv\Dotenv;
use Framework\App;

use function App\Config\{registerRoutes, registerMiddleware};

error_reporting(E_ALL);
ini_set('display_errors', 1);


$dotenv = Dotenv::createImmutable(Paths::ROOT);
$dotenv->load();

$app = new App(Paths::SOURCE . 'App/container-definitions.php');

registerRoutes($app);
registerMiddleware($app);

return $app;
