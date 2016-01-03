<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {
	 public function __constructor(){
		parent::__construct();
		$this->load->database();
	 }
	 public function check($u,$p){
		$query = $this->db->get_where('users', array('username' => $u,'password' => $p));
		$row = $query->row_array();

		if (isset($row))
		{
			$this->db->query("update users set status='Online' where username='".$u."'");
			return $row;
		}
		else{
			return false;
		}
	 }
	 public function offline(){
		 $this->db->query("update users set status='Offline' where username='".$this->session->user."'");
		 $this->session->unset_userdata('user');
	 }
}