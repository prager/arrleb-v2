<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    var $msg; 
    
	public function index() {
	    $this->edit_user();
	}
	
	public function edit_user() {
	    if($this->Login_model->is_logged()['logged']) {
	        $id = $this->Login_model->get_cur_user_id();
	        $tbl = $this->Login_model->check_table($id);
	        $user = $this->User_model->get_cur_user($id);
	        $this->load->view('template/header_public_gen', array('logged' => TRUE));
	        $user['msg'] = $this->msg;
	        $this->load->view('user/edit_user_view', $user);
	        $this->load->view('template/footer_ver1');
	    }
	    else {
	        $this->load->view('template/header_public_gen', array('logged' => FALSE));
	        $data['title'] = 'Error';
	        $data['msg'] = 'Checking credentials error.
					Go to home page ' . anchor('public_ctl', 'here'). '<br><br>';
	        $this->load->view('status/status_view', $data);
	        $this->load->view('template/footer_ver1');
	    }
	}
	
	private function _user_output($output=NULL) {
	    $this->load->view('user/edit_user_view.php', $output);
	}
	
	public function set_user() {
	    $param['id'] = $this->uri->segment(3, 0);
	    $param['username'] = $this->input->post('username');
	    $param['callsign'] = $this->input->post('callsign');
	    $param['fname'] = $this->input->post('fname');
	    $param['lname'] = $this->input->post('lname');
	    $param['street'] = $this->input->post('street');
	    $param['city'] = $this->input->post('city');
	    $param['state_cd'] = $this->input->post('state');
	    $param['zip_cd'] = $this->input->post('zip');
	    $param['phone'] = $this->input->post('phone');
	    $param['email'] = $this->input->post('email');
	    $param['facebook'] = $this->input->post('facebook');
	    $param['twitter'] = $this->input->post('twitter');
	    $param['linkedin'] = $this->input->post('linkedin');
	    $param['googleplus'] = $this->input->post('googleplus');
	    $param['narrative'] = $this->input->post('narrative');
	    $param['narrative2'] = $this->input->post('narrative2');
	    
	    $this->User_model->set_user($param);
	    $this->msg = 'User data has been updated. Thank you!';
	    $this->edit_user();
	}
	
	public function show_user() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $id = $this->uri->segment(3, 0);
	    $this->Login_model->check_table($id);
	    $data = $this->Speaker_model->get_speaker($id);
	    $data['home_pg'] = anchor('public_ctl/team', 'Team');
	    $this->load->view('user/team_member_view', $data);
	    $this->load->view('template/footer_ver1');
	}
	
	public function show_elmer() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $id = $this->uri->segment(3, 0);
	    $this->Login_model->check_table($id);
	    $data = $this->Speaker_model->get_speaker($id);
	    $data['home_pg'] = anchor('elmers', 'Elmers');
	    $this->load->view('user/team_member_view', $data);
	    $this->load->view('template/footer_ver1');
	}
	
	function set_username() {
	    
	}
}
