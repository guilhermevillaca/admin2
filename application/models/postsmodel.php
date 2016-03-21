<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Postsmodel extends CI_Model {

	public function insert_post(){
		$f = $this->upload->data();			
		$data = array(
			'PstTitulo' => $this->input->post('title'),
			'PstArquivo' => $f['file_name'],
			'PstTpArquivo' => $f['file_ext'],
			'PstDescricao' => $this->input->post('text')
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
		$this->db->order_by('PstCodigo', 'desc');
		$this->db->from('posts');
		$this->db->limit($maximo, $inicio);
		$r = $this->db->get();
		return $r->result();
	}

	public function list_single($id){

		$this->db->where('PstCodigo', $id);
		$r = $this->db->get('posts');
		return $r->result();
	}

	public function delete($id){
		$this->db->where('PstCodigo', $id);
		$this->db->delete('posts');		
	}

	public function update($id)
	{

		$data = array(
               'PstTitulo' => $this->input->post('title'),
               'PstDescricao' => $this->input->post('text'),
            );

		$this->db->where('PstCodigo', $id);
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