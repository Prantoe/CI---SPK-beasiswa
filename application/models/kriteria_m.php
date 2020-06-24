<?php 

class Kriteria extends CI_Model{

    // method beasiswa
    public function getKriteria(){
        return $this->db->get("beasiswa")->result_array();
    }
    public function addBeasiswa($data){
        return $this->db->insert("beasiswa", $data);
    }
    public function updateBeasiswa($data){
        $this->db->set("nm_beasiswa", $data["nm_beasiswa"]);
        $this->db->set("syarat", $data["syarat"]);
        $this->db->set("periode", $data["periode"]);
        $this->db->where("kd_beasiswa", $data["kd_beasiswa"]);
        return $this->db->update("beasiswa");
    }
    public function deleteBeasiswa($beasiswaId){
        return $this->db->delete("beasiswa", array("kd_beasiswa" => $beasiswaId));
    }


    // method penerima
    public function getPenerima(){
        return $this->db->get("penerima")->result_array();
    }
    public function addPenerima($data){
        return $this->db->insert("penerima", $data);
    }
    public function updatePenerima($data){
        $this->db->set("nm_mhs", $data["nm_mhs"]);
        $this->db->set("semester", $data["semester"]);
        $this->db->where("NIM", $data["NIM"]);
        return $this->db->update("penerima");
    }
    public function deletePenerima($penerimaId){
        return $this->db->delete("penerima", array("NIM" => $penerimaId));
    }
}