<?php

class Share extends Controller {

	function Share(){
		parent::Controller();
	}

	function index(){
		$this->load->helper('share');
		$this->load->view('share/index');
	}
}

