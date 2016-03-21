<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracoesmodel extends CI_Model {

	public function list_single($id){

		$this->db->where('CnfCodigo', $id);
		$r = $this->db->get('configuracoes');
		return $r->result();
	}

	public function update($id)
	{

		$data = array(
               'CnfNomeSite' => $this->input->post('cnfNomeSite'),
               'CnfLinkSite' => $this->input->post('cnfLinkSite')
            );

		$this->db->where('CnfCodigo', $id);
		$this->db->update('configuracoes', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

}

/* End of file configuracoesmodel.php */
/* Location: ./application/models/configuracoesmodel.php */