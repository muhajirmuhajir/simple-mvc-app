<?php

class Index extends Controller
{
    public function __construct()
    {
        // echo "oke bro \n";
    }

    public function index()
    {
        $this->loadView('template/header', ["tittle" => "Login"]);
        $this->loadView('auth/login');
        $this->loadView('template/footer');
    }

    public function home($data1, $data2)
    {
        echo "anda berada di home" . $data1 . $data2;
    }
}
