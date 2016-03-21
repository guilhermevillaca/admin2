<?php 

class Loginmodel extends CI_Model {

	public function login_valid(){

		$this->db->where('login', $this->input->post('login'));
		$this->db->where('password', hash('sha256', $this->input->post('password')));
		$r = $this->db->get('user');

		if($r->num_rows == 1){
			return true;
		}else{
			return false;
		}

	}

}

/* End of file loginmodel.php */
/* Location: ./application/models/loginmodel.php */

?>