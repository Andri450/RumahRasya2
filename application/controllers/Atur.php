<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atur extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('properti_model');
    }

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Atur');
	}

	public function ambil_properti(){
		$res = $this->properti_model->AmbilProperti()->result();
		echo json_encode($res);
	}

	public function tambah_properti(){
		$id = $this->input->post('id');
		$x = $this->input->post('xPos');
		$y = $this->input->post('yPos');
		$cek = count($this->properti_model->CekProperti($id)->result());
		if($cek == 0){
			$res = $this->properti_model->TambahProperti($id, $x, $y);
			var_dump($res);
		}else{
			echo 'ada';
		}
	}

	public function ubah_properti(){
		$id = $this->input->post('id');
		$x = $this->input->post('xPos');
		$y = $this->input->post('yPos');
		$res = $this->properti_model->UbahProperti($id, $x, $y);
		var_dump($res);
	}

}
