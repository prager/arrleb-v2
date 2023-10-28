<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
    
	public function index() {
	    
	    if($this->check_master()) {
	        $this->load->view('template/header_public_gen', array('logged' => TRUE));
	       $this->load->view('master/main_view');
	       
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
	
	public function users() {
	    $this->load->view('template/header_public_gen', array('logged' => TRUE));
	    
	    $this->load->view('master/display_users_view', $this->User_model->get_all_users());
	    
	    $this->load->view('template/footer_ver1');
	}
	
	public function user_management() {
	    if($this->check_master()) {
    	    try{
    	        $crud = new grocery_CRUD();
    	        
    	        $crud->set_theme('datatables');
    	        $crud->set_table('users');
    	        $crud->set_subject('Users');
    	        $crud->columns('type_code','role','authorized', 'active', 'username', 'lname', 'position', 'pos_code', 'image_loc');
    	        $crud->fields('type_code', 'role','authorized', 'active', 'username', 'lname', 'position', 'pos_code', 'image_loc');
    	        
    	        $output = $crud->render();
    	        
    	        $this->_user_output($output);
    	        
    	    }catch(Exception $e){
    	        show_error($e->getMessage().' --- '.$e->getTraceAsString());
    	    }
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
	    $this->load->view('master/edit_users_view.php', $output);
	}
	
	public function user_types() {
	    if($this->check_master()) {
    	    try{
    	        $crud = new grocery_CRUD();
    	        
    	        $crud->set_theme('datatables');
    	        $crud->set_table('user_types');
    	        $crud->set_subject('Types');
    	        $crud->required_fields('type_code');
    	        $crud->columns('type_code','description','code_str');
    	        
    	        $output = $crud->render();
    	        
    	        $this->_types_output($output);
    	        
    	    }catch(Exception $e){
    	        show_error($e->getMessage().' --- '.$e->getTraceAsString());
    	    }
	   }
	   else {
	       $this->load->view('template/header_public_gen');
	       $data['title'] = 'Error';
	       $data['msg'] = 'Checking credentials error.
					Go to home page ' . anchor('public_ctl', 'here'). '<br><br>';
	       $this->load->view('status/status_view', $data);
	       $this->load->view('template/footer_ver1');
	   }
	}
	
	public function set_user_profile() {
	    $this->load->view('template/header_public_gen', array('logged' => TRUE));
	    $this->load->view('user/set_profiles_view', $this->User_model->get_all_users());
	    $this->load->view('template/footer_ver1');
	}
	
	public function load_user_profile() {
	    $param = array();
	    $param['id'] = $this->uri->segment(3, 0);	    
	    $param['edu'] = $this->input->post('edu');
	    $param['events'] = $this->input->post('events');
	    $param['clb'] = $this->input->post('clb');
	    $param['spk'] = $this->input->post('spk');
	    $param['elm'] = $this->input->post('elm');
	    $param['mst'] = $this->input->post('mst');
	    $this->User_model->set_user_profile($param);
	    
	    $this->load->view('template/header_public_gen', array('logged' => TRUE));
	    $this->load->view('user/set_profiles_view', $this->User_model->get_all_users());
	    $this->load->view('template/footer_ver1');
	}
	
	public function delete_user() {
	    $this->load->view('template/header_public_gen', array('logged' => TRUE));
	    
	    $this->User_model->delete_user($this->uri->segment(3, 0));
	    
	    $this->load->view('master/display_users_view', $this->User_model->get_all_users());
	    
	    $this->load->view('template/footer_ver1');
	}
	
	public function edit_user() {
	   $id = $this->uri->segment(3, 0);
	   $this->Login_model->check_table($id);
	   $user = $this->User_model->get_cur_user($id);
	   $this->load->view('template/header_public_gen', array('logged' => TRUE));
	   $user['msg'] = '';
	   $this->load->view('user/edit_user_view', $user);
	   $this->load->view('template/footer_ver1');
	}
	
	public function new_user() {
	    $this->load->view('template/header_public_gen', array('logged' => TRUE));
	    
	    $param['id'] = 0;
	    $param['username'] = '';
	    $param['callsign'] = '';
	    $param['fname'] = '';
	    $param['lname'] = '';
	    $param['street'] = '';
	    $param['city'] = '';
	    $param['state'] = '';
	    $param['zip'] = '';
	    $param['phone'] = '';
	    $param['email'] = '';
	    $param['facebook'] = '';
	    $param['twitter'] = '';
	    $param['linkedin'] = '';
	    $param['googleplus'] = '';
	    $param['narrative'] = '';
	    $param['narrative2'] = '';
	    $param['msg'] = '';
	    
	    $this->load->view('master/edit_user_view', $param);
	    $this->load->view('template/footer_ver1');
	}
	
	private function _types_output($output=NULL) {
	    $this->load->view('master/types_view.php', $output);
	}
	
	private function check_master() {
	    if($this->Login_model->get_cur_user()['level'] == 99) {
	        return TRUE;
	    }
	    else {
	        return FALSE;
	    }
	}
}
