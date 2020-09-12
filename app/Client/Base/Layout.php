<?php

namespace App\Client\Base;

use Airam\Template\{Template,Layout as TLayout};

class Layout
{
    use Template;
    use TLayout;

    public $title;

    public function __construct()
    {
        $this->title = getenv("PAGE_TITLE");
    } 
}
