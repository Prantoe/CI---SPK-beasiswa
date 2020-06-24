<?php 

class Dashboard extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model("Beasiswa","beasiswa");
    }
    public function index(){
        $data["beasiswa"] = $this->beasiswa->getBeasiswa();
        $data["penerima"] = $this->beasiswa->getPenerima();
        $this->load->view("Home_v", $data);
    }
    public function tambahBeasiswa(){
        $data = [
            "nm_beasiswa" => $this->input->post("nm_beasiswa"),
            "syarat" => $this->input->post("syarat"),
            "periode" => $this->input->post("periode")
        ];
        $this->beasiswa->addBeasiswa($data);
        redirect("dashboard");
    }
    public function updateBeasiswa(){
        $data = [
            "kd_beasiswa" => $this->input->post("kd_beasiswa"),
            "nm_beasiswa" => $this->input->post("nm_beasiswa"),
            "syarat" => $this->input->post("syarat"),
            "periode" => $this->input->post("periode")
        ];
        $this->beasiswa->updateBeasiswa($data);
        redirect("dashboard");
    }
    public function deleteBeasiswa($beasiswaId){
        $this->beasiswa->deleteBeasiswa($beasiswaId);
        redirect("dashboard");
    }

    // method penerima
    public function tambahPenerima(){
        $data = [
            "NIM" => $this->input->post("NIM"),
            "nm_mhs" => $this->input->post("nm_mhs"),
            "semester" => $this->input->post("semester")  
        ];
        $this->beasiswa->addPenerima($data);
        redirect("dashboard");
    }
    public function updatePenerima(){
        $data = [
            "NIM" => $this->input->post("NIM"),
            "nm_mhs" => $this->input->post("nm_mhs"),
            "semester" => $this->input->post("semester")  
        ];
        $this->beasiswa->updatePenerima($data);
        redirect("dashboard");
    }
    public function deletePenerima($penerimaId){
        $this->beasiswa->deletePenerima($penerimaId);
        redirect("dashboard");
    }
    public function kriteria(){
        
    }
}