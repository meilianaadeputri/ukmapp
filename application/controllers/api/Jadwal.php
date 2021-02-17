<?php
use Restserver\Libraries\REST_Controller;

class Jadwal extends REST_Controller{
  function __construct(){
    parent::__construct();

    $this->load->model('jadwal_model');
  }

  public function daftarjadwal_get(){
    $data=$this->jadwal_model->daftarjadwal();
    $this->response(['jadwal'=>$data], 200);
  }
}
?>
