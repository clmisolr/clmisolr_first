<?php

Class Frontend extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->homepage();
	}
	public function homepage(){
		$this->load->view('template/frontend');
	}
  public function search(){
    echo "<h1>Search for something!</h1>";
  }
}

?>