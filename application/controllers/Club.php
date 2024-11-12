<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends CI_Controller {
     
    
	public function index() {
	    $this->load_clubs('');
	}
	
	public function load_clubs() {
	    if($this->check_club()) {
	        
	        $this->load->view('template/header_public_gen', array('logged' => TRUE));
	        $this->load->view('clubs/main_view', $this->Club_model->get_clubs());
	        
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
	
	public function edit_club() {
	    $param = array();
	    $param['id'] = $this->uri->segment(3, 0);
	    $param['name'] = $this->input->post('name');
	    $param['long_name'] = $this->input->post('long_name');
	    $param['link'] = $this->input->post('link');
	    $param['narrative'] = $this->input->post('narrative');
	    $param['active'] = $this->input->post('active');
	    $this->Club_model->edit_club($param);
	    $this->load_clubs();
	}
	
	public function delete_club() {
	    $this->Club_model->delete_club($this->uri->segment(3, 0));
	    $this->load_clubs();
	}
	
	private function check_club() {
	    
	    $level = $this->Login_model->get_cur_user()['level'];
	    
	    if(($level == 5) || ($level == 99)) {
	        return TRUE;
	    }
	    else {
	        return FALSE;
	    }
	}
}
