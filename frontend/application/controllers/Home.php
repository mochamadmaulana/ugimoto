<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('layout/header',$data);
		$this->load->view('layout/top_bar');
		$this->load->view('view_home');
		$this->load->view('layout/footer');
	}
}
