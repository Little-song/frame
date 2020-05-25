<?php

require 'vendor/autoload.php';

use app\controller\Staff;
use app\model\StaffModel;
use core\View;

$model = new StaffModel;
$view = new View('app/view');

$staff = new Staff($model, $view);

echo $staff->index();
