<?php
namespace app\model;

use core\Model;

class StaffModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getInfo()
    {
        $data = $this->select('user', "*", ["id[>]" => 10 , "LIMIT" => 5]);
        
        return $data;
        // print_r($data);
    }
}