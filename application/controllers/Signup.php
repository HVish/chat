<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function index()
	{
		$data = array('err' => false);
		$this->load->view('header',$data);
		$this->load->view('signup_view');
		$this->load->view('footer');
	}
	public function check(){
		$this->load->model('chat');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$res = $this->chat->checkuser($user);
		if($res){
			if($this->chat->createuser($user,$pass)){
				redirect(base_url());
			}
			else{
				$data = array('err' => true);
				$this->load->view('header',$data);
				$this->load->view('signup_view');
				$this->load->view('footer');
			}
		}
		else{
			$data = array('err' => true);
			$this->load->view('header',$data);
			$this->load->view('signup_view');
			$this->load->view('footer');
		}
	}
}