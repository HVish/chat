<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		 $this->load->model('login');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home_view');
		$this->load->view('footer');
	}
	public function submit(){
		$this->load->view('header');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		
		if($this->login->check($user,$pass)){
			echo "login succesfull";
		}
		else{
			echo "login failed";
		}
		$this->load->view('footer');
	}
}