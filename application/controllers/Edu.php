<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edu extends CI_Controller {

	public function index() {
	    $this->load_edu('');
	}

/*test sync*/	
	public function load_edu($msg) {

	    if($this->check_login()) {
    	    $data = array();
    	    $data['edu'] = $this->Edu_model->get_classes();
    	    $data['msg'] = $msg;
    	    $this->load->view('template/header_public_gen',array('logged' => TRUE));
    	    $this->load->view('edu/main_view', $data);
	    }
	    else {
	        $this->load->view('template/header_public_gen', array('logged' => FALSE));
	        $data['title'] = 'Error';
	        $data['msg'] = 'Checking credentials error.
					Go to home page ' . anchor('public_ctl', 'here'). '<br><br>';
	        $this->load->view('status/status_view', $data);
	    }
	    $this->load->view('template/footer_ver1');
	}

	private function check_login() {
	    $level = $this->Login_model->get_cur_user()['level'];
	    if(($level == 99) || ($level == 1)) {
	        return TRUE;
	    }
	    else {
	        return FALSE;
	    }
	}

	public function edit_class() {
	    $param = array();
	    $param['id'] = $this->uri->segment(3, 0);
	    $param['course'] = $this->input->post('course');
	    $param['date_from'] = strtotime($this->input->post('date_from')) + 32400;
	    $param['date_to'] = strtotime($this->input->post('date_to')) + 32400;
	    $param['fee'] = substr($this->input->post('fee'), 1, (strlen($this->input->post('fee'))-1));
	    $param['status'] = $this->input->post('status');
	    $param['location'] = $this->input->post('location');
	    $param['details_url'] = $this->input->post('details_url');
	    $param['licensing'] = $this->input->post('category');
	    $param['club'] = $this->input->post('club');
	    $this->Edu_model->edit_class($param);
	    $this->load_edu('Class has been added/edited. Thank you!');
	}

	public function delete_class() {
	    $this->Edu_model->delete_class($this->uri->segment(3, 0));
	    $this->load_edu('Class has been deleted. Thank you!');
	}
}
