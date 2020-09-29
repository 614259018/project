<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_section extends CI_Controller {

	public function index()
	{
		$this->load->view('form_section');
	}
	public function reg_section(){
		$data = array(
			's_id' =>$this->input->post("s_id"),
			'name' =>$this->input->post("name"),
			'lname' =>$this->input->post("lname"),
			'date' =>$this->input->post("date"),
			'mont' =>$this->input->post("mont"),
			'years' =>$this->input->post("years"),
			'address' =>$this->input->post("address"),
			'Tel' =>$this->input->post("Tel"),
			'major' =>$this->input->post("major"),
			'syears' =>$this->input->post("syears"),
		);
		$get['a'] = $data;
		$this->load->view('view_section',$get);
	}
}
