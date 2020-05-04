<?php

class Barang
{
    private $id, $nama, $banyak;

    public function __construct()
    {
        $this->id = "1";
        $this->nama = "muhajir";
        $this->banyak = 20;
    }

    public function getData()
    {
        return "data : $this->id, $this->nama, $this->banyak";
    }
}
