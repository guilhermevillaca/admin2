<?php 

class Loginmodel extends CI_Model {

	public function login_valid(){

		$this->db->where('UsrLogin', $this->input->post('usrLogin'));
		$this->db->where('UsrSenha', hash('sha256', $this->input->post('usrSenha')));
		$r = $this->db->get('usuario');

		if($r->num_rows == 1){
			return true;
		}else{
			return false;
		}

	}

	public function count_posts(){
		$r = $this->db->get('usuario');
		return count($r->result());
	}

	public function listar($maximo, $inicio){
		$this->db->order_by('UsrCodigo', 'desc');
		$this->db->where('UsrLogin !=', 'admin');
		$this->db->from('usuario');
		$this->db->limit($maximo, $inicio);
		$r = $this->db->get();
		return $r->result();
	}

	public function insert(){		
		$data = array(
			'UsrLogin' => $this->input->post('usrLogin'),
			'UsrSenha' => hash('sha256', $this->input->post('usrSenha'))
			);

		$this->db->insert('usuario', $data);

		if($this->db->affected_rows() > 0)
		{		    
		    return $this->db->insert_id();
		}else{
			return false;
		}

	}

	public function list_single($id){

		$this->db->where('UsrCodigo', $id);
		$r = $this->db->get('usuario');
		return $r->result();
	}

	public function update($id)
	{

		$data = array(
			'UsrLogin' => $this->input->post('usrLogin'),
			'UsrSenha' => hash('sha256', $this->input->post('usrSenha'))
			);

		$this->db->where('UsrCodigo', $id);
		$this->db->update('usuario', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

	public function delete($id){
		$this->db->where('UsrCodigo', $id);
		$this->db->delete('usuario');		
	}

}

/* End of file loginmodel.php */
/* Location: ./application/models/loginmodel.php */

?>