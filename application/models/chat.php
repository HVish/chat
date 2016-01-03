<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Model {
	 public function __constructor(){
		parent::__construct();
		$this->load->database();
	 }
	 public function online(){
		 
	 }
	 public function get_UserID($un){
		 return $this->db->query("select user_id from users where username='".$un."'")->result_array();
	 }
	 public function get_UserName($id){
		 $res = $this->db->query("select username from users where user_id=$id")->result_array();
		 return $res[0]['username'];
	 }
	 public function messages($u){
		 $user_id = $this->get_UserID($u)[0]['user_id'];
		 $query = $this->db->query("select touser_id,fruser_id,body from messages where touser_id=".$user_id." or fruser_id=".$user_id);
		 $msg = $query->result_array();
		 $counter = 0;
		 foreach($msg as $row){
			 if($row['touser_id'] != $user_id){
				 $msg[$counter]['name'] = $this->get_UserName($row['touser_id']);
			 }
			 else{
				 $msg[$counter]['name'] = $this->get_UserName($row['fruser_id']);
			 }
			 $counter++;
		 }
		 return $msg;
	 }
	 public function message_names($u){
		 $user_id = $this->get_UserID($u)[0]['user_id'];
		 $names = $this->db->query("select distinct username from users where user_id in (select touser_id from messages where fruser_id=$user_id) or user_id in (select fruser_id from messages where touser_id=$user_id)")->result_array();
		 return $names;
	 }
}