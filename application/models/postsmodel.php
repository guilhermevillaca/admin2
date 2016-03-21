<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Postsmodel extends CI_Model {

	public function insert_post(){
		$f = $this->upload->data();
		$data = array(
			'title' => $this->input->post('title'),
			'image' => $f['file_name'],
			'text' => $this->input->post('text')
			);

		$this->db->insert('posts', $data);

		if($this->db->affected_rows() > 0)
		{		    
		    return $this->db->insert_id();
		}else{
			return false;
		}

	}

	public function count_posts(){
		$r = $this->db->get('posts');
		return count($r->result());
	}

	public function listar($maximo, $inicio){
		$this->db->order_by('id', 'desc');
		$this->db->from('posts');
		$this->db->limit($maximo, $inicio);
		$r = $this->db->get();
		return $r->result();
	}

	public function list_single($id){

		$this->db->where('id', $id);
		$r = $this->db->get('posts');
		return $r->result();
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('posts');		
	}

	public function update($id)
	{

		$data = array(
               'title' => $this->input->post('title'),
               'text' => $this->input->post('text'),
            );

		$this->db->where('id', $id);
		$this->db->update('posts', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

}

/* End of file posts.php */
/* Location: ./application/models/posts.php */