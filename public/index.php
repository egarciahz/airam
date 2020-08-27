<?php
include '../vendor/autoload.php';

use App\Http\RouterModule;
use function Core\applicationFactory;

date_default_timezone_set('UTC');

$app = applicationFactory(__DIR__ . "/../");

$app->addDefinitions(getenv('ROOT_DIR') . "/app/config/app.php");

$app->addRouterModule(RouterModule::class);

if (getenv("ENVIROMENT") === 'production') {
    $app->enableProdMode();
}

$app->run();
