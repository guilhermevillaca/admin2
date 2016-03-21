<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
	}

	public function index()
	{

		$this->data['form'] = array(
			'class' => 'form-signin'
			);

		$this->data['login'] = array(
			"class" => "input-block-level",
			"name" => "login",
			"placeholder" => "Login"
			);

		$this->data['password'] = array(
			"class" => "input-block-level",
			"name" => "password",
			"placeholder" => "Senha"
			);

		$this->data['enviar'] = array(
			"name" => "enviar",
			"value" => "Entrar",
			"class" => "btn btn-primary"
			);

		if($this->session->userdata('is_logged_in')){
			redirect('home');
		}else{
			$this->load->view('login', $this->data);				
		}

	}

	public function login()
	{
		$this->form_validation->set_rules('login', 'Login', 'required|xss_clean|callback_is_login_valid');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run())
		{				
			$dados = array(
				'login' => $this->input->post('login'),
				'is_logged_in' => 1
				);
			$this->session->set_userdata($dados);
			redirect('home');
		}
		else
		{
			$this->index();			
		}
	}


	public function is_login_valid(){		

		if($this->loginmodel->login_valid()){			
			return true;
		}else{
			$this->form_validation->set_message('is_login_valid', "Dados Incorretos. <br> Consulte o Administrador do Sistema.");
			return false;
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		$this->index();

	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */