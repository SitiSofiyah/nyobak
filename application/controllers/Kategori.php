<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata("logged_in");
			$data['username']=$session_data['username'];
			$data['level']=$session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if(! $this->acl->is_public($current_controller)){
				if(! $this->acl->is_allowed($current_controller, $data['level'])){
					redirect('login/logout','refresh');
				}
			}
		}else{
			redirect('login','refresh');
		}
	}
		
	public function index()
	{
		
		$this->load->model('kategori_model');
		$object["tampilKategori"] = $this->kategori_model->getKategori_list
		();
		$this->load->view('tampilKategori', $object);
	}
	public function create()
	{
		$this->load->model('kategori_model');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		
		$this->load->model('kategori_model');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambah_kategori_view');
		} else {
			$this->kategori_model->insertKategori($id_kategori);
			$this->load->view('tambah_kategori_sukses');
		}

	}
	public function update($id_kategori)
	{
		//load library
		$this->load->model('kategori_model');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required');
		$object['kategori'] = $this->kategori_model->getKategori($id_kategori);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('edit_kategori_view', $object);
		} else {
			$this->kategori_model->updateById($id_kategori);
			$this->load->view('edit_kategori_sukses');
		}
		
	}

	public function delete($id)
	{	
		$this->load->model('kategori_model');
		$this->kategori_model->delete($id);
		redirect('Kategori');
	}
		
}			
		/* End of file Kategori.php */
		/* Location: ./application/controllers/User.php */		
