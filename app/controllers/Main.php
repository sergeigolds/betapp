<?php

class Main extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->dataModel = $this->model('Data');
    }

    public function index()
    {
        $data = [
            'users' => $this->userModel->getUsers(),
            'betting_data' => $this->dataModel->getData(),
        ];

        $this->view('index', $data);
    }
}
