<?php

class ListBarang extends Model
{


    public function getAllList()
    {
        $stmt = "select * from barang";
        $result = $this->db->fetchAll($stmt);

        return $result;
    }
}
