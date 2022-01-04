<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('admin/home');
		$this->load->view('templates/footer_admin');
	}
	//CRUD for INPUT QUESTION
	public function inputItem()
	{
	}
	public function editItem()
	{
	}
	public function getItem()
	{
	}
	public function delItem()
	{
	}
	
	//CRUD for Group Question
	public function inputGroup()
	{
	}
	public function editGroup()
	{
	}
	public function getGroup()
	{
	}
	public function delGroup()
	{
	}
	
	//CRUD for Section Question
	public function inputSection()
	{
	}
	public function editSection()
	{
	}
	public function getSection()
	{
	}
	public function delGroup()
	{
	}
}
