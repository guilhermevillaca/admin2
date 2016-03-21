<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public $data;

	public function __construct(){
		parent::__construct();
		$this->data['config'] = $this->configuracoesmodel->list_single(1);
	}

	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			$this->template->load('template', 'home', $this->data);
		}else{
			redirect('user');
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */