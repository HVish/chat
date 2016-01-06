<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Model {
	 public function __constructor(){
		parent::__construct();
		$this->load->database();
	 }
	 public function online($u){
		 $ol = $this->db->query("select username from users where username != '".$u."' and status like 'Online'")->result_array();
		 return $ol;
	 }
	 public function get_UserID($un){
		 return $this->db->query("select user_id from users where username like '".$un."'")->result_array();
	 }
	 public function get_UserName($id){
		 $res = $this->db->query("select username from users where user_id=$id")->result_array();
		 return $res[0]['username'];
	 }
	 public function messages($u){
		 $loggedin = $this->session->user;
		 $loggedin_id = $this->get_UserID($loggedin)[0]['user_id'];
		 $user_id = $this->get_UserID($u)[0]['user_id'];
		 $query = $this->db->query("select touser_id,fruser_id,body from messages 
			 where (touser_id=".$user_id." and fruser_id=".$loggedin_id.") or (touser_id=".$loggedin_id." and fruser_id=".$user_id.")");
		 $msg = $query->result_array();
		 $counter = 0;
		 foreach($msg as $row){
			 $msg[$counter]['name'] = $this->get_UserName($row['fruser_id']);
			 $counter++;
		 }
		 return $msg;
	 }
	 public function message_names($u){
		 $user_id = $this->get_UserID($u)[0]['user_id'];
		 $names = $this->db->query("select distinct username from users where user_id in (select touser_id from messages where fruser_id=$user_id) or user_id in (select fruser_id from messages where touser_id=$user_id)")->result_array();
		 return $names;
	 }
	 public function send($data){
		 $fr_id = $this->get_UserID($data['fr'])[0]['user_id'];
		 $to_id = $this->get_UserID($data['to'])[0]['user_id'];
		 //echo $fr_id.'-'. $to_id.'-'; print_r($data); die();
		 $this->db->query("insert into messages(touser_id,fruser_id,body,status) values($to_id,$fr_id,\"$data[msg]\",\"Read\")");
		 return true;
	 }
}