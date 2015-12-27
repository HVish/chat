<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {
	 public function __constructor(){
		parent::__construct();
		$this->load->database();
	 }
	 public function check($u,$p){
		$query = $this->db->get_where('users', array('username' => $u,'password' => $p));
		$row = $query->row();

		if (isset($row))
		{
			return true;
		}
		else{
			return false;
		}
	 }
}