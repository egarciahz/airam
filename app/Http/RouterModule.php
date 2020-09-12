<?php

namespace App\Http;

use Airam\Http\Lib\RouterSplInterface;
use Airam\Commons\ApplicationService;
use Airam\Template\Render\Renderable;

class RouterModule implements RouterSplInterface
{
    use Renderable;

    /** @var ApplicationService $provider */
    private $provider;

    public function __construct(ApplicationService $provider)
    {
        $this->provider = $provider;
        $this->configure([
            "layout" => \App\Client\Base\Layout::class
        ]);
    }

    public function register(): void
    {
        $this->provider->register(__DIR__ . '/router.php');
    }
}
