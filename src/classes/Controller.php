<?php
class Controller
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;

        //I could start our route here with $this->route();
    }

    public function route()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->getReq();
        }
    }

    private function getReq()
    {
        //we process our get Requests here
        $this->model->processData(["operation" => "get"]);
    }
}
