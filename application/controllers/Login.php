<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model'); 
		
	}
	function index(){
		if ($this->session->userdata('dashboard')) {
			redirect(base_url().'login');
		}
		else{
			$sub_data['info']=$this->session->userdata('info');

			$this->load->view('login/login', $sub_data);
			
			$this->session->unset_userdata('info');       
		}
	}

	
	public function proseslog() {
		$data = array(
			'nama_user' => $this->input->post('nama_user', TRUE),
			'pass_user' => md5($this->input->post('pass_user', TRUE)),
			);
		
		$hasil = $this->model->GetUser($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				// $sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['nama_user'] = $sess->nama_user;
				$sess_data['nama'] = $sess->nama;
				$sess_data['level'] = $sess->level;
				$sess_data['pass_user'] = $sess->pass_user;
				$sess_data['tgl_expired'] = $sess->tgl_expired;
				$sess_data['status'] = $sess->status;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='1' /*&& strtotime(date("Y-m-d")) <= strtotime($this->session->userdata('tgl_expired')) */ ) {
				$this->session->set_userdata('useradmin', $sess_data);
				redirect(base_url()."dashboard");
			}
			else if ($this->session->userdata('level')=='3') {
				$this->session->set_userdata('useradmin', $sess_data);
				redirect(base_url()."dashboard");
			}
			else if ($this->session->userdata('level')=='2') {
			$info='<div style="color:red">User Anda belum Aktif/Expired!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url().'login');
			}
			else{
				//$info='<div style="color:red">User Anda Expired!</div>';
				//$this->session->set_userdata('info',$info);
				$info='<div style="color:red">User Expired! <br> Daftarkan Premium Untuk Menggunakan Akses Kembali!</div>';
				$this->session->set_userdata('info',$info);

				$this->session->set_userdata('gilis', $sess_data);
				redirect(base_url().'login');
			}	
		}
		else {
			$info='<div style="color:red">PERIKSA KEMBALI NAMA PENGGUNA DAN PASSWORD ANDA!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url().'login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
    // function register(){
    // 	$this->load->view('v_register');
    // }
}
