<?php
use Restserver\Libraries\REST_Controller;

class Member extends REST_Controller{
  function __construct(){
    parent::__construct();

    $this->load->model('member_model');
  }

  public function daftarmember_get(){
    $data=$this->member_model->daftarmember();
    $this->response(['members'=>$data], 200);
  }

  public function strukturorganisasi_get(){
    $data=$this->member_model->strukturorganisasi();
    $this->response(['members'=>$data], 200);
  }
}
?>
