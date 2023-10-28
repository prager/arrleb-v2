<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
     
    
	public function index() {
	    $this->load_events();
	}
	
	public function load_events() {
	    if($this->check_events()) {
	        
	        $this->load->view('template/header_public_gen', array('logged' => TRUE));
	        $this->load->view('events/main_view', $this->Events_model->get_all_events());
	        
	    }
	    else {
	        $this->load->view('template/header_public_gen', array('logged' => FALSE));
	        $data = array();
	        $data['title'] = 'Error';
	        $data['msg'] = 'Checking credentials error.
					Go to home page ' . anchor('public_ctl', 'here'). '<br><br>';
	        $this->load->view('status/status_view', $data);
	    }
	    $this->load->view('template/footer_ver1');
	}
	
	public function edit_event() {
	    $param = array();
	    $param['id'] = $this->uri->segment(3, 0);
	    $param['name'] = $this->input->post('name');
	    $param['club_name'] = $this->input->post('club');
	    $param['date'] = strtotime($this->input->post('date')) + 32400;
	    $param['day'] = $this->fill_arrays->get_day($this->input->post('day'));
	    $param['coordinator'] = $this->input->post('coordinator');
	    $param['web'] = $this->input->post('web');
	    $param['location'] = $this->input->post('location');
	    $this->Events_model->edit_event($param);
	    
	    $this->load_events();
	}
	
	public function delete_event() {
	    $this->Events_model->delete_event($this->uri->segment(3, 0));
	    $this->load_events();
	}
	
	private function check_events() {
	    
	    $level = $this->Login_model->get_cur_user()['level'];
	    
	    if(($level == 2) || ($level == 99)) {
	        return TRUE;
	    }
	    else {
	        return FALSE;
	    }
	}
}
