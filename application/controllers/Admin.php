<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
	}

	public function index()
	{
		$dat['logo'] = $this->m_data->ambil_logo()->result();
		$dat['sub_judul'] = $this->m_data->ambil_sub_judul()->result();
		$dat['foto_heading'] = $this->m_data->ambil_foto_heading()->result();
		$dat['isi_heading'] = $this->m_data->ambil_isi_heading()->result();
		$dat['sub_judul_project'] = $this->m_data->ambil_sub_judul_project()->result();
		$dat['media_project'] = $this->m_data->ambil_media_project()->result();
		// var_dump($dat);
		// die;
		
		$this->load->view('Admin', $dat);
	}

	public function ubah_logo(){
		$this->load->helper('form');

		$config['upload_path'] = './assets/foto/';
        $config['allowed_types'] = 'gif|jpg|png';
		$image = $_FILES['foto']['tmp_name'];

		$this->load->library('upload', $config);
		$nama = './assets/foto/' . $_FILES['foto']['name'];

        if (move_uploaded_file($image,$nama)) {
            $namaFoto = $_FILES['foto']['name'];
			$this->m_data->ubah_logo($namaFoto);
			redirect('Admin');
        } else {
			$error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
	}

	public function ubah_sub_judul(){
		$isi = $this->input->post('isi');
		$this->m_data->ubah_sub_judul($isi);
		redirect('Admin');
	}
}
