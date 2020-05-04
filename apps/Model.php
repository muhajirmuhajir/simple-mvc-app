<?php

class Model
{
    protected $db = null;
    public function __construct()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "pemweb_mvc";
        $this->db = new db($host, $username, $password, $database);
    }
}
