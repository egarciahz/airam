<?php

use App\Http\RouterModule;
use function DI\autowire;

return [
    RouterModule::class => autowire(),
    App\Client\Test::class => autowire(),
    App\Client\Base\Layout::class => autowire()
];
