<?php
namespace core;

use League\Plates\Engine;

class View extends Engine
{
    private $template;

    public function __construct($path)
    {
        $this->template = parent::__construct($path);
    }
}