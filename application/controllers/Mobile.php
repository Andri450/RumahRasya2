<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

	function __construct(){
		parent::__construct();		
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('m_data');
		
		$dat['logo'] = $this->m_data->ambil_logo()->result();
		$dat['sub_judul'] = $this->m_data->ambil_sub_judul()->result();
		$dat['foto_heading'] = $this->m_data->ambil_foto_heading()->result();
		$dat['isi_heading'] = $this->m_data->ambil_isi_heading()->result();
		$dat['sub_judul_project'] = $this->m_data->ambil_sub_judul_project()->result();
		$dat['media_project'] = $this->m_data->ambil_media_project()->result();
		$dat['sub_legal'] = $this->m_data->ambil_sub_legal()->result();
		$dat['harga'] = $this->m_data->ambil_harga()->result();

		$this->load->view('Mobile');
	}

	public function upload_feedback(){
		$this->load->model('m_data');
		$this->load->helper('url');

		$dats = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_wa' => $this->input->post('wa'),
			'pesan' => $this->input->post('pesan'),
		);

		$this->m_data->upload_feedback($dats);
		
		redirect('Mobile');
	}
}
