<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeria extends CI_Controller {

	public function index()
	{

		$this->load->library('uploadhandler');
		$this->load->view('galeria/galeria');
	}

}

/* End of file galeria.php */
/* Location: ./application/controllers/galeria.php */