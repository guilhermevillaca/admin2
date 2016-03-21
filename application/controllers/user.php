<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
		$this->data['config'] = $this->configuracoesmodel->list_single(1);
	}

	public function index()
	{

		$this->data['form'] = array(
			'class' => 'form-signin'
			);

		$this->data['usrLogin'] = array(
			"class" => "input-block-level",
			"name" => "usrLogin",
			"placeholder" => "Usuário"
			);

		$this->data['usrSenha'] = array(
			"class" => "input-block-level",
			"name" => "usrSenha",
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
		$this->form_validation->set_rules('usrLogin', 'Usuário', 'required|xss_clean|callback_is_login_valid');
		$this->form_validation->set_rules('usrSenha', 'Senha', 'required');

		if ($this->form_validation->run())
		{				
			$dados = array(
				'usrLogin' => $this->input->post('usrLogin'),
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

	public function listar(){

		$this->load->library('pagination');

		$maximo = 10;

		if ($this->uri->segment(3) == "")
        {
            $inicio = 0;
        }
        else
        {
            $inicio = $this->uri->segment(3);
        }

        $this->data['news'] = $this->loginmodel->listar($maximo, $inicio);

		$config['base_url'] = base_url('user/listar');
		$config['total_rows'] = $this->loginmodel->count_posts();
		$config['uri_segment'] = 3;
		$config['per_page'] = $maximo;
		$config['first_link'] = 'Primeiro';
        $config['cur_tag_open'] = '<li class="current"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['last_link'] = 'Último';
        $config['next_link'] = '>>';
        $config['prev_link'] = '<<';
        $config['full_tag_open'] = '<div class="pagination"><ul>';
        $config['full_tag_close'] = '</div></ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '<li>';
		$config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config); 

		$this->data['pages'] = $this->pagination->create_links();

		if($this->session->userdata('is_logged_in')){
			$this->template->load('template', 'usuario/list', $this->data);
		}else{
			redirect('user');
		}
	}

	public function new_user(){

		$this->data['usrLogin'] = array(
			'id' => 'usrLogin',
			'name' => 'usrLogin',
			'placeholder' => 'Insira o usuário',
			'class' => 'input-block-level'
		);

		$this->data['usrSenha'] = array(
			'id' => 'usrSenha',
			'name' => 'usrSenha',
			'placeholder' => 'Insira a senha',
			'class' => 'input-block-level'
		);

		$this->data['usrSenha2'] = array(
			'id' => 'usrSenha2',
			'name' => 'usrSenha2',
			'placeholder' => 'Insira a senha novamente',
			'class' => 'input-block-level'
		);

		$this->data['send_user'] = array(
			'name' => 'enviar',
			'class' => 'btn btn-primary',
			'value' => 'Enviar'
		);

		if($this->session->userdata('is_logged_in')){
			$this->template->load('template', 'usuario/new', $this->data);
		}else{
			redirect('user');
		}
	}

	public function inserir(){

		if($this->session->userdata('is_logged_in')){
			$r = $this->loginmodel->insert();
			echo $r;
			if($r != false){				
				redirect('user/listar');
			}else{
				echo 'houve um erro';
			}			
		}else{
			redirect('user');
		}		

	}

	public function edit($usrCodigo){

		$edit =  $this->loginmodel->list_single($usrCodigo);

		$this->data['usrLogin'] = array(
			'id' => 'usrLogin',
			'name' => 'usrLogin',
			'placeholder' => 'Insira o usuário',
			'class' => 'input-block-level',
			'value' => $edit[0]->UsrLogin
			);

		$this->data['usrCodigo'] = array(
			'usrCodigo' => $usrCodigo,
			);

		$this->data['usrSenha'] = array(
			'id' => 'usrSenha',
			'name' => 'usrSenha',
			'placeholder' => 'Insira a senha',
			'class' => 'input-block-level'
			);
		

		$this->data['send_user'] = array(
			'name' => 'enviar',
			'class' => 'btn btn-primary',
			'value' => 'Salvar'
			);

		if($this->session->userdata('is_logged_in')){
			$this->template->load('template', 'usuario/edit', $this->data);
		}else{
			redirect('user');
		}

	}

	public function update(){

		if($this->session->userdata('is_logged_in')){

			$id = $this->input->post('usrCodigo');

			if($this->loginmodel->update($id)){
				redirect('user/listar');
			}else{
				redirect('user/listar');
			}
		}else{
			redirect('user');
		}

	}

	public function delete($id){
		$this->loginmodel->delete($id);
		if($this->session->userdata('is_logged_in')){
			redirect('user/listar');
		}else{
			redirect('user');
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */