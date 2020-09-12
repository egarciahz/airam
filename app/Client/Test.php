<?php

namespace App\Client;

use Airam\Service\ApplicationService;
use Airam\Template\Template;

class Test
{
    use Template;

    private $app;

    public $title = "Movie";
    public $name = "John Wick";
    public $description = "John Wick is an ex-hitman who has tried to overcome the loss of his wife and live peacefully, but someone dared to provoke him, attacking him by surprise. He hunts down the culprit and discovers that a mobster has put a high price on his head.";

    public function  __construct(ApplicationService $app)
    {
        $this->app = $app;
    }

    public function named_args($args)
    {
        return var_dump($args['hash']);
    }

    public function method($var1)
    {
        return  "Hello {$var1}!!";
    }
}
