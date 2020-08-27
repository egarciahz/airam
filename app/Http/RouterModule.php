<?php

namespace App\Http;

use Core\Http\RouterSplInterface;
use Core\Http\Service\RouterProvider;
use Core\Template\Middleware\TemplateHandler;

class RouterModule implements RouterSplInterface
{
    /** @var RouterProvider $provider */
    private $provider;

    public function __construct(RouterProvider $provider)
    {
        $this->provider = $provider;
    }

    public function register(): void
    {

        $templateHandler = $this->provider->app()->get(TemplateHandler::class);
        $this->provider->pushMiddleware($templateHandler);
        $this->provider->router()->configure([
            "layout" => \App\Client\Base\Layout::class
        ]);

        $this->provider->register(__DIR__ . '/router.php');
    }
}
