<?php
namespace app\controller;

use core\Controller;
use app\model\StaffModel;
use core\View;

class Staff extends Controller
{

    public function index()
    {
        $model = new StaffModel;

        $data = $model->getInfo();

        $view = new View('app/view');

        echo $view->render('staff/index', ['staffs' => $data]);
    }

    public function demo()
    {
        echo 'Hey, this is a staff controller demo method!';
    }

}