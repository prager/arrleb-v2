<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {     
    
	public function index() {
	    $this->load_staff('');
	}
	
	public function load_staff() {
	    if($this->check_staff()) {
	        
	        $data['staff'] = $this->User_model->get_staff()['staff'];
	        $arr = $this->User_model->get_staff_positions();
	        $data['positions'] = $arr['positions'];
	        $data['users'] = $arr['users'];
	        
	        $this->load->view('template/header_public_gen', array('logged' => TRUE));
	        $this->load->view('staff/main_view', $data);
	        
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
	
	public function edit_staff() {
	    $param = array();
	    $param['id_staff'] = $this->uri->segment(3, 0);
	    $param['position_name'] = $this->input->post('pos_name');
	    $param['id_user'] = $this->input->post('user');
	    $this->User_model->edit_staff($param);
	    $this->load_staff();
	}
	
	public function delete_staff() {
	    $this->User_model->delete_staff($this->uri->segment(3, 0));
	    $this->load_staff();
	}
	
	private function check_staff() {
	    if($this->Login_model->get_cur_user()['level'] == 99) {
	        return TRUE;
	    }
	    else {
	        return FALSE;
	    }
	}
}
