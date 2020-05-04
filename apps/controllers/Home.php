<?php

class Home extends Controller
{
    private $data;
    private $listBarang;

    public function __construct()
    {
        $this->data = $this->loadModel("barang");
        $this->listBarang = $this->loadModel("listBarang");
    }

    public function index()
    {
    }

    public function lihatData()
    {
        $data = $this->data->getData();

        $this->loadView('template/header', ["tittle" => "Listing Barang"]);
        $this->loadView('home/listbarang', $data);
        $this->loadView('template/footer');
    }

    public function listBarang()
    {
        $data = $this->listBarang->getAllList();
        $this->loadView('template/header', ["tittle" => "Tabel Barang"]);
        $this->loadView('home/tabelbarang', $data);
        $this->loadView('template/footer');
    }
}
