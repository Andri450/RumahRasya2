<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->helper('url');
        $this->load->library('session');

        if($this->session->userdata('is_login')){
            redirect('Admin');
        }
	}

	public function index()
	{
        // $p = password_hash('admin123', PASSWORD_DEFAULT);
        // echo $p;
		$this->load->view('Login');
	}

    public function cek(){
        $email = $this->input->post('email', TRUE);
        $pass = $this->input->post('pass', TRUE);

        $cek  = $this->db->get_where('admin',['email' => $email]);
        
        // cek username 
        if($cek->num_rows() > 0)
        {
            // kita ambil isi dari record
            $hasil = $cek->row();
            if(password_verify($pass, $hasil->password))
            {
                // membuat session
                $this->session->set_userdata('id', $hasil->id);
                $this->session->set_userdata('is_login', TRUE);

                // redirect ke admin
                redirect(base_url('Login'));
            }else{

                // jika password salah
                $this->session->set_flashdata('failed','Password salah !');
                redirect(base_url('Login'));
            }

        }else{

            // jika username salah
            $this->session->set_flashdata('failed','Username tidak Tersedia !');
            redirect(base_url('Login'));
        }

    }
}
