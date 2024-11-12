<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    var $username;
    
    public function __construct() {
        parent::__construct();
        
    }
    
	public function index() {
	    $this->form_validation->set_rules('user', 'Username', 'required|trim|callback_validate_credentials');
	    $this->form_validation->set_rules('pass', 'Password', 'required|trim');
	    if($this->form_validation->run()) {
	        //$data = $this->Login_model->get_viewdata($this->username);
	        //$this->load_view($data);
	        $this->load_user();
	    }
	    else {
	        $this->load->view('template/header_public_gen', array('logged' => FALSE));
	        $data['title'] = 'Login Error';
	        $data['msg'] = 'There was an error while checking your credentials. Click ' . anchor('Public_ctl/reset_password', 'here') .
	        ' to reset your password or go to home page ' . anchor('public_ctl', 'here'). '<br><br>';
	        $this->load->view('status/status_view', $data);
	        $this->load->view('template/footer_ver1');
	    }
	}
	
	public function load_user() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    
	    $this->Login_model->check_table($this->Login_model->get_cur_user_id());
	    
	    $data['user'] = $this->User_model->get_cur_user($this->Login_model->get_cur_user_id());
	    
	    $this->load->view('user/load_view', $data);
	    
	    $this->load->view('template/footer_ver1');
	}
	
	public function validate_credentials() {
	    $this->username = strtolower($this->input->post('user'));
	    $password = $this->input->post('pass');
	    $data['user'] = $this->username;
	    $data['pass'] = $password;
	    if ($this->Login_model->check_credentials($data)) {
	        return TRUE;
	    } else {
	        $this->form_validation->set_message('validate_credentials', 'Incorrect username or password');
	        return FALSE;
	    }
	}
	
	private function load_view($data) {
	    $this->load->view($data['header'], $data['data']);
	    $this->load->view($data['view'], $data['data']);
	    $this->load->view('template/footer_ver1');
	}
	
	public function logout() {
	    $this->Login_model->logout();
	    $this->load->view('template/header_public_main', array('logged' => FALSE));
	    $this->load->view('public/main_view');
	    $this->load->view('template/footer_ver1');
	}
}
