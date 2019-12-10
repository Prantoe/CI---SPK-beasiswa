<?php

class Produk_m extends CI_Model{
    public function insertKain($dataKain){
        return $this->db->insert("kain", $dataKain);
    }
    public function insertModel($dataModel){
        return $this->db->insert("model", $dataModel);
    }
    public function insertUkuran($dataUkuran){
        return $this->db->insert("ukuran", $dataUkuran);
    }

    public function getDataKain(){
        return $this->db->get("kain")->result_array();
    }
    public function getDataModel(){
        return $this->db->get("model")->result_array();
    }
    public function getDataUkuran(){
        return $this->db->get("ukuran")->result_array();
    }
}