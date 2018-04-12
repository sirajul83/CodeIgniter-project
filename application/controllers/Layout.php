<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {
	public function index()
	{
	 $value = array("title" =>"Page title","massage" => "Germany","dev" => "Your name");

		$this->load->view('header',$value);
		$this->load->view('body',$value);
		$this->load->view('footer',$value);
	}
}
?>