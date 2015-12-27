<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		 $this->load->model('login');
	}
	public function index()
	{	
		if($this->session->has_userdata('user')){
			redirect(base_url()."index.php/home/chathome/".$this->session->user);
		}
		else{	
			$this->load->view('header');
			$this->load->view('home_view',array('loginfailed' => false));
			$this->load->view('footer');
		}
	}
	public function login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		
		if($this->login->check($user,$pass) === false){
			$this->load->view('header');
			$this->load->view('home_view',array('loginfailed' => true));
			$this->load->view('footer');
		}
		else{
			$this->session->set_userdata(array('user' => $user));
			redirect(base_url()."index.php/home/chathome/".$user);
		}
	}
	public function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url());
	}
	public function chathome($u){
		if($this->session->has_userdata('user')){
			$this->load->view('header',array('username' => $u));
			$this->load->view('chathome_view');
			$this->load->view('footer');
		}
		else{
			redirect(base_url());
		}
	}
}