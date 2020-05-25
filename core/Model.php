<?php
namespace core;

use Medoo\Medoo;

class Model extends Medoo
{
    public function __construct()
    {
        $options = [
            'database_type' => 'mysql',
            'database_name' => 'learn',
            'server' => 'localhost',
            'username' => 'root',
            'password' => 'root',        
        ];
        parent::__construct($options);
    }
}