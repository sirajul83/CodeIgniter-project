<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function index()
	{
		$this->load->view('registration');
	}
	public function validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Full Name','required');
		$this->form_validation->set_rules('user_name','User Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pass','Password','required');

		if($this->form_validation->run()){
			$data = array(
				'name' => $this->input->post('name'),
				'user_name' => $this->input->post('user_name'),
				'email' => $this->input->post('email'),
				'pass' => md5($this->input->post('pass'))
			);
		$this->load->model('Regmodel');  
		$this->Regmodel->data_insert($data);
		redirect(base_url().'Registration/inserted');
		} 
		else{
			$this->index();
		}
	}
	public function inserted(){
		$this->index();
	}

}
?>