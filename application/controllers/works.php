<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class works extends CI_Controller {
	public function index()
	{
		$this->load->view('form');
	}
	public function show(){
		$data = array(
			'gory' =>$this->input->post("gory"),
		
		);
		$get['a'] = $data;
		$this->load->view('show',$get);
	}
	}
