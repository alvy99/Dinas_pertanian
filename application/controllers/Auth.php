<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_login"); //untuk memanggil model login
		$this->load->library('form_validation'); ///untuk memvalidasi 

		// if($this->form_validation->)
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required'); //username yang ditampilkan
		$this->form_validation->set_rules('password', 'Password', 'required'); //password yang ditampilkan
		if ($this->form_validation->run() == false) { 
			$this->load->view('login'); //menampilkan dalam halaman view login
		} else {
			$this->_login(); 
		}
	}

	private function _login() //fungsi dari model login
	{
		$username = $this->input->POST('username');//mengambil data username untuk login
		$password = md5($this->input->POST('password', TRUE)); //mengambil data username untuk login yang bernilai benar
	
		$id = $this->session->userdata('id'); //tabel admin sebagai session untuk login
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'sektor' => $this->input->post('sektor'),
            'level' => $this->input->post('level'),
        );
		
		$user = $this->db->get_where('admin',  ['username' => $username])->row_array();
		// echo"<pre>";print_r($user);die;
		if (empty($user)) {
			$this->session->set_flashdata('auth', 'Gagal');
			redirect('auth');
		}else{
			// print_r($password);die;
			if ($password == $user["password"]) {
				// print_r("password cocok");die;
				$session = array(
					'authenticated' => true, // Buat session authenticated dengan value true
					'username' => $user["username"],  // Buat session username
					'email'		=> $user["email"],
					'password' => $user["password"],
					'sektor'	=> $user["sektor"],
					'level'		=> $user["level"],
					'image'		=> $user['image']
				);
				
				$this->session->set_userdata($session); // Buat session sesuai $session
				if ($user['level'] == 'admin'){ //Jika masuk sebagai admin
				redirect('admin/Overview');
				} else ($user['level'] == 'super admin');
				redirect('admin/Page');		//jika masuk sebagai superadmin
				
			}else{
				// print_r("password tidak cocok");die;
				$this->session->set_flashdata('message', 'password');
				redirect('auth');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Auth'));
	}
}
