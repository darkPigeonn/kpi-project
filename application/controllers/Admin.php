<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('admin/home');
		$this->load->view('templates/footer_admin');
	}
}
