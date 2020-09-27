<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model("student_model");
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function list()
	{
		$this->load->model("user_model");
		if($this->user_model->isNotLogin()){
			$data["students"] = $this->student_model->getAll();
			$this->load->view('list', $data);
		} else {
				redirect(site_url('admin'));
		}
	}

}
