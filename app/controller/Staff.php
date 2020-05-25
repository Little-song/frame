<?php
namespace app\controller;

class Staff
{
    public $model;
    public $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function index()
    {
        $data = $this->model->getInfo();

        // print_r($data);die;

        return $this->view->render('staff/index', ['staffs' => $data]);
    }
}