<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstTemplet extends CI_Controller {
	public function index()
	{

		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('body2');
		$this->load->view('sidebar');
		$this->load->view('foot');
	}
}
?>