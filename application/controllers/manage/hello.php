<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hello extends CI_Controller {

	
	function __construct(){
	 parent::__construct();
	 echo"my Construct"."</br>";

	}
	public function index()
	{
		$this->load->view('welcome_messae');
	}


public function show ($name=null,$lname=null){
	echo "Hello".$name."".$lname;
	$this->_display();
}
public function _display()
{
	echo "</br>"."SE";
	//$data ['name'] ="thanaphat";
	//$data['email'] ="thanaphat@gmail.com";
	$data['student']=array("614259017","thanaphat","pinthong","SE");
	$this->load->view('hello_view',$data);
}
}