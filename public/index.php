<?php
include '../vendor/autoload.php';

use App\Http\RouterModule;
use function Airam\applicationFactory;

date_default_timezone_set('UTC');
$root = __DIR__ . "/../";

$app = applicationFactory($root);

$app->addDefinitions($root . "app/config/app.php");

$app->addRouterModule(RouterModule::class);

if (getenv("ENVIRONMENT") === 'production') {
    $app->enableProdMode();
}

$app->run();
