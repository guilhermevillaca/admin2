<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public $data;

	public function __construct(){
		parent::__construct();

		$this->load->model('postsmodel');
		$this->data['title'] = "Noticias";
	}
	public function index()
	{		
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

        $this->data['news'] = $this->postsmodel->listar($maximo, $inicio);

		$config['base_url'] = base_url('posts/index');
		$config['total_rows'] = $this->postsmodel->count_posts();
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
			$this->template->load('template', 'posts/list', $this->data);
		}else{
			redirect('user');
		}
	}

	public function new_post(){

		$this->data['title_news'] = array(
				'id' => 'title',
				'name' => 'title',
				'placeholder' => 'Insira o Título',
				'class' => 'input-block-level'
				);

			$this->data['text_news'] = array(
				'id' => 'text',
				'name' => 'text',
				'placeholder' => 'Insira o Texto da Notícia',
				'class' => 'input-block-level'
				);

			$this->data['img_news'] = array(
				'id' => 'image',
				'name' => 'image',				
				);

			$this->data['send_news'] = array(
				'name' => 'enviar',
				'class' => 'btn btn-primary',
				'value' => 'Enviar'
				);

		if($this->session->userdata('is_logged_in')){
			$this->template->load('template', 'posts/new', $this->data);
		}else{
			redirect('user');
		}
	}

	public function single($id){

		$this->data['single'] = $this->postsmodel->list_single($id);

		if($this->session->userdata('is_logged_in')){					
			$this->template->load('template', 'posts/single', $this->data);
		}else{
			redirect('user');
		}

	}

	public function delete($id){
		$this->postsmodel->delete($id);
		if($this->session->userdata('is_logged_in')){
			$this->index();	
		}else{
			redirect('user');
		}
	}

	public function edit($id){

		$edit =  $this->postsmodel->list_single($id);

		$this->data['title_news'] = array(
			'id' => 'title',
			'name' => 'title',
			'placeholder' => 'Insira o Título',
			'class' => 'input-block-level',
			'value' => $edit[0]->PstTitulo
			);

		$this->data['id_post'] = array(
			'id' => $id,
			);

		$this->data['text_news'] = array(
			'id' => 'text',
			'name' => 'text',
			'placeholder' => 'Insira o Texto da Notícia',
			'class' => 'input-block-level',
			'value' => $edit[0]->PstDescricao
			);

		$this->data['img_news'] = array(
			'id' => 'image',
			'name' => 'image',				
			);

		$this->data['send_news'] = array(
			'name' => 'enviar',
			'class' => 'btn btn-primary',
			'value' => 'Salvar'
			);

		if($this->session->userdata('is_logged_in')){
			$this->template->load('template', 'posts/edit', $this->data);
		}else{
			redirect('user');
		}

	}

	public function inserir(){

		if($this->session->userdata('is_logged_in')){

			$config['upload_path'] = 'img/uploads/';
			$config['file_name'] = $_FILES['image']['name'];
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['max_size']	= '100';
			$config['encrypt_name'] = true;
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			$field_name = "image";

			if ( ! $this->upload->do_upload($field_name)){
				echo $this->upload->display_errors();			
			}else{
				$r = $this->postsmodel->insert_post();
				echo $r;
				if($r != false){				
					redirect('posts/single/'.$r);
				}else{
					echo 'houve um erro';
				}			
				
			}

		}else{
			redirect('user');
		}		

	}

	public function update(){

		if($this->session->userdata('is_logged_in')){

			$id = $this->input->post('id');

			if($this->postsmodel->update($id)){
				redirect('posts/single/'.$id);
			}else{
				redirect('posts/single/'.$id);
			}
		}else{
			redirect('user');
		}

	}

	

}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */

?>