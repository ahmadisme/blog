<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct(){
	parent::__construct();
	$this->load->helper('url');
}
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function post1()
	{
		$this->load->view('post1');
	}


		public function home()
		{
			$this->load->view('post1');
		}
	
	
}
