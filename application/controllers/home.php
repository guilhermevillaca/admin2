<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			$this->template->load('template', 'home');
		}else{
			redirect('user');
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */