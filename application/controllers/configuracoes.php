<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracoes extends CI_Controller {


	public $data;

	public function __construct()
	{
		parent::__construct();	
		$this->data['config'] = $this->configuracoesmodel->list_single(1);	
	}

	public function index()
	{
		$config = $this->configuracoesmodel->list_single(1);

		$this->data['CnfNomeSite'] = array(
			"id" => "cnfNomeSite",
			"name" => "cnfNomeSite",
			"placeholder" => "Nome do site",
			"class" => "input-block-level",
			"value" => $config[0]->CnfNomeSite
		);

		$this->data['CnfLinkSite'] = array(
			"id" => "cnfLinkSite",
			"name" => "cnfLinkSite",
			"placeholder" => "Link do site",
			"class" => "input-block-level",
			"value" => $config[0]->CnfLinkSite
		);

		$this->data['cnfCodigo'] = array(
			'cnfCodigo' => $config[0]->CnfCodigo,
		);

		$this->data['send_cnf'] = array(
			'name' => 'enviar',
			'class' => 'btn btn-primary',
			'value' => 'Enviar'
		);

		if($this->session->userdata('is_logged_in')){
			$this->template->load('template', 'configuracoes/edit', $this->data);			
		}else{
			redirect('user');
		}
	}

	public function update(){

		if($this->session->userdata('is_logged_in')){

			$id = $this->input->post('cnfCodigo');
			//ver flashmessage
			if($this->configuracoesmodel->update($id)){
				redirect('home');
			}else{
				redirect('home');
			}
		}else{
			redirect('user');
		}

	}

}

/* End of file configuracoes.php */
/* Location: ./application/controllers/configuracoes.php */