<?php

namespace App\Client;

use Core\Application;
use Core\Template\Template;

class Test
{
    use Template;

    private $app;
    public $title;

    public function  __construct(Application $app)
    {
        $this->app = $app;
        $this->title = getenv("PAGE_TITLE");
    }

    public $property = "Property Value";

    public $name = "Jhon Doe";

    public function method(...$args)
    {
        return var_export((array) $args, true);
    }

    public function hi($hi)
    {
        return  "Hello {$hi}!!";
    }

    public function injection_test()
    {
        $c = $this->app->get("template.config");
        return var_export($c, true);
    }
}
