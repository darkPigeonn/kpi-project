<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('admin_model');
		$this->load->helper('url');
 
	}
	//load view
	public function index()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('admin/home');
		$this->load->view('templates/footer_admin');
	}
	public function formItemInput()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('admin/form/itemInput');
		$this->load->view('templates/footer_admin');
	}
	
	public function formGroupInput()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('admin/form/groupInput');
		$this->load->view('templates/footer_admin');
	}
	
	public function formSectionInput()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('admin/form/sectionInput');
		$this->load->view('templates/footer_admin');
	}
	//CRUD for INPUT QUESTION
	public function inputItem()
	{
		//pertanyaan
		$question = $this->input->post('question');
		//jawaban
		$answer1 = $this->input->post('answer1');
		$answer2 = $this->input->post('answer2');
		$answer3 = $this->input->post('answer3');
		$answer4 = $this->input->post('answer4');
		
		$dataAnswers = array(
			'answer1' => $answer1,
			'answer2' => $answer2,
			'answer3' => $answer3,
			'answer4' => $answer4
		);
		
		$dataItem = array (
			'question' => $qeustion,
			'answers' => $dataAnswers
			);
		$this->admin_model->inputItem($dataItem);
		
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
