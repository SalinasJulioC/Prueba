<?php
//alskdjflaksjdlfkjaslkfjalsjkd


class Buscador extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model("buscador/buscador_model");
    $this->load->helpers("form");
  }

  public function index(){
    $this->load->view("buscador/buscador_view");
  }
  
public function like(){
   $patrona = $this->input->post("patron");
   $data["resultado"] = $this->buscador_model->getData($patrona);
   $this->load->view("buscador/buscador_view",$data);
  }


}
?>	