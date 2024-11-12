<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_ctl extends CI_Controller {

	var $msg_param;

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("America/Los_Angeles");
	}

	public function index() {
	    $this->load_home();
	}

	public function load_err() {
	    $this->load->view('template/header_public_gen', array('logged' => FALSE));
	    $data['title'] = 'Error';
	    $data['msg'] = 'Currently the webmaster is working on clearing an error. Please, be patient. Thank you! <br><br>';
	    $this->load->view('status/status_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function load_home() {
	    $this->load->view('template/header_public_main', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('public/main_view');
	    $this->load->view('template/footer_ver1');
	}

	public function newsletter() {
		$this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
		$this->load->view('public/newsletter');
		$this->load->view('template/footer_ver1');
	}

	public function contact() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
		$data['fname'] = '';
		$data['lname'] = '';
		$data['email'] = '';
		$data['subject'] = '';
		$data['msg'] = '';
		$this->load->view('public/contact_view', $data);
		$this->load->view('template/footer_ver1');
	}

	public function about() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
		$this->load->view('public/about_view');
		$this->load->view('template/footer_ver1');
	}

	public function team() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('public/team_view', $this->User_model->get_staff());
		$this->load->view('template/footer_ver1');
	}

	public function login() {
	  $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
		$data['title'] = 'Working on It';
		$data['msg'] = 'User login is currently being worked on. Please, come back soon and check. Thank you for your
		patience!<br><br>';
		$this->load->view('status/status_view', $data);
		$this->load->view('template/footer_ver1');
	}

	public function msg() {
		$this->form_validation->set_rules('name', 'name', 'callback_validate_msg');
		if($this->form_validation->run()) {
			$this->User_model->send_msg($this->msg_param);
			$this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
			$data['title'] = 'Thank you!';
			$data['msg'] = 'Your message has been sent. You may go to ' . anchor('public_ctl', 'home page') .
			' Thank you!<br><br>';
			$this->load->view('status/status_view', $data);
			$this->load->view('template/footer');
		}
		else {
		    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
			$this->load->view('public/contact_view', $this->msg_param);
			$this->load->view('template/footer');
		}
	}

	public function validate_msg() {
		$retval = TRUE;
		$val_email = TRUE;
		$param['fname'] = $this->input->post('fname');
		$param['lname'] = $this->input->post('lname');
		$param['email'] = $this->input->post('email');
		$param['subject'] = $this->input->post('subj');
		$param['msg'] = $this->input->post('msg');

		$this->msg_param = $param;

		if($param['fname'] == '' || $param['lname'] == '' || (!filter_var($param['email'], FILTER_VALIDATE_EMAIL)) || $param['subject'] == '' ||
				$param['msg'] == '' || $param['lname'] == $param['fname']) {
			$this->form_validation->set_message('validate_msg', 'Please, fill all information below. Thank you!');
			$retval = FALSE;
		}
		return $retval;

	}

	public function education() {
	    $this->load->view('template/header_public_edu', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('public/edu_view', $this->Edu_model->get_classes());
		$this->load->view('template/footer_ver1');
	}

	public function edu_courses() {
	    $this->load->view('template/head_only');
	    $data['edu'] = $this->Edu_model->get_classes();
	    $this->load->view('public/inc_iframe', $data);
	    $this->load->view('template/footer_refonly');
	}

	public function technician() {

	    $retval = $this->Edu_model->get_tech();

	    $data['tests'] = $retval['tests'];
	    $data['cnt'] = $retval['cnt'];

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/tech_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function general() {

	    $retval = $this->Edu_model->get_general();

	    $data['tests'] = $retval['tests'];
	    $data['cnt'] = $retval['cnt'];

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/gen_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function extra() {

	    $retval = $this->Edu_model->get_extra();

	    $data['tests'] = $retval['tests'];
	    $data['cnt'] = $retval['cnt'];

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/extra_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function emergency() {

	    $retval = $this->Edu_model->get_aux();

	    $data['cnt'] = $retval['cnt'];
	    $data['tests'] = $retval['tests'];

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/emergency_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function onair() {

	    $retval = $this->Edu_model->get_gota();

	    $data['cnt'] = $retval['cnt'];
	    $data['tests'] = $retval['tests'];

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/onair_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function speakers() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/speakers_view', $this->Speaker_model->get_speakers());
	    $this->load->view('template/footer_ver1');
	}

	public function auxiliary() {

	    $retval = $this->Edu_model->get_aux();

	    $data['cnt'] = $retval['cnt'];
	    $data['tests'] = $retval['tests'];

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/aux_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function elmer() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/elmer_view', $this->User_model->get_elmers());
	    $this->load->view('template/footer_ver1');
	}

	public function testing() {

	    $retval = $this->Edu_model->get_testing();

	    $data['cnt'] = $retval['cnt'];
	    $data['tests'] = $retval['tests'];

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/testing_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function inday() {

	    $retval = $this->Edu_model->get_inday();

	    $data['cnt'] = $retval['cnt'];
	    $data['inday'] = $retval['inday'];

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('edu/inday_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function class_details() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $data['class'] = $this->Edu_model->get_class($this->uri->segment(3, 0));
	    $data['home'] = 'public_ctl/education';
	    $data['cur'] = 'Education & Training';
		$this->load->view('public/details_edu_view', $data);
		$this->load->view('template/footer_ver1');
	}

	public function event_details() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $data['event'] = $this->Events_model->get_event($this->uri->segment(3, 0));
	    $data['home'] = 'public_ctl/public_events';
	    $data['cur'] = 'Public Service Events';
	    $this->load->view('public/details_event_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function test_details() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $data['class'] = $this->Edu_model->get_test($this->uri->segment(3, 0));
	    $data['home'] = 'public_ctl/testing';
	    $data['cur'] = 'License Testing';
	    $this->load->view('public/details_testing_edu_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function club_corner() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
		$this->load->view('public/corner_view', $this->Club_model->get_clubs());
		$this->load->view('template/footer_ver1');
	}

	public function register() {
	    $data = array();
	    $this->load->view('template/header_public_gen', array('logged' => FALSE));
	    $data['fname'] = '';
	    $data['lname'] = '';
	    $data['email'] = '';
	    $data['callsign'] = '';
	    $data['phone'] = '';
	    $data['street'] = '';
	    $data['city'] = '';
	    $data['state'] = 'CA';
	    $data['zip'] = '';
	    $data['msg'] = '<p class="text-danger">For ARRL EB Staff Members Only!';
	    $data['twitter'] = '';
	    $data['facebook'] = '';
	    $data['linkedin'] = '';
	    $data['googleplus'] = '';
	    $this->load->view('public/register_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function send_reg() {
	    $param = array();
	    $param['fname'] = $this->input->post('fname');
	    $param['lname'] = $this->input->post('lname');
	    $param['email'] = $this->input->post('email');
	    $param['street'] = $this->input->post('street');
	    $param['city'] = $this->input->post('city');
	    $param['state_cd'] = $this->input->post('state');
	    $param['zip_cd'] = $this->input->post('zip');
	    $param['phone'] = $this->input->post('phone');
	    $param['callsign'] = $this->input->post('callsign');
	    $param['facebook'] = $this->input->post('facebook');
	    $param['twitter'] = $this->input->post('twitter');
	    $param['linkedin'] = $this->input->post('linkedin');
	    $param['googleplus'] = $this->input->post('googleplus');

	    $this->load->view('template/header_public_gen', array('logged' => FALSE));

			if (filter_var($param['email'], FILTER_VALIDATE_EMAIL)) {

		    if($param['lname'] == '' || $param['fname'] == '' || valid_email($param['email']) != TRUE || $param['street'] == '' || $param['city'] == ''
		        || $param['zip_cd'] == '' || $param['phone'] == '') {

		            $data = $param;
		            $data['state'] = $param['state_cd'];
		            $data['zip'] = $param['zip_cd'];
		            $data['title'] = 'Error!';
		            $data['msg'] = '<span style="color: red">Please, fill all the required information. Thank you!</span>';

		            $this->load->view('public/register_view', $data);

		        }
		        else {
		            if($this->User_model->register($param)) {
		                $data['title'] = 'Thank you!';
		                $data['msg'] = 'Your registration has been sent. You will get an email with further instructions within 72 hours.
	                                    Thank you!<br><br>';
		            }
		            else {
		                $data['title'] = 'Error!';
		                $data['msg'] = '<span style="color: red">The email you provided is already in use. Please, use different email. Thank you!</span>';
		            }

		            $this->load->view('status/status_view', $data);
		        }
					}
	        $this->load->view('template/footer_ver1');
	}

	public function confirm_reg() {
	    $verifystr = $this->uri->segment(3, 0);
	    $data['user'] = $this->User_model->get_user_to_reg($verifystr);
	    $data['msg'] = '';
	    $this->load->view('template/header_public_gen', array('logged' => FALSE));
	    $this->load->view('public/update_user_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function set_user_login() {
	    $param['id_user'] = $this->uri->segment(3, 0);
	    $param['username'] = strtolower($this->input->post('uname'));
	    $param['pass1'] = $this->input->post('pass1');
	    $param['pass2'] = $this->input->post('pass2');

	    $this->load->view('template/header_public_gen', array('logged' => FALSE));

	    if($this->User_model->set_user_login($param)) {

	        $data['title'] = 'Username and password has been set';
	        $data['msg'] = 'However, you have not been authorized yet. You will receive authorization email within 72 hours. Thank you!';
	        $this->load->view('status/status_view', $data);
	    }
	    else {

	        $data['title'] = 'Set Authorized Error';
	        $data['msg'] = 'Error, changes not loaded. Please, use a different username. Thank you.';
	        $this->load->view('status/status_view', $data);
	    }

	    $this->load->view('template/footer_ver1');
	}

	public function reset_password() {

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $this->load->view('public/lost_pass_view');
	    $this->load->view('template/footer_ver1');

	}

	public function load_forgot_password(){

	    $param['email'] = strtolower($this->input->post('email'));
	    $param['pass1'] = $this->input->post('pass1');
	    $param['pass2'] = $this->input->post('pass2');

	    $retarr = $this->User_model->forgot_password($param);

	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));

	    if($retarr['flag']) {
	        $data['title'] = "Password Reset for user with email " . $param['email'] . "!";
	        $data['msg'] = 'Your password has been reset. Thank you!<br><br>';
	    }
	    else {
	        $data['title'] = "Password Reset Error";
	        $data['msg'] = "Your password has not been reset. There was the following error: " . $retarr['error'] . "<br><br>";
	    }

	    $this->load->view('status/status_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function public_events() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    //$data['title'] = "Coming soon...";
	    //$data['msg'] = "Public Service Events page is coming soon" . "<br><br>";
	    //$this->load->view('status/status_view', $data);
	    $this->load->view('public/events_view', $this->Events_model->get_events());
	    $this->load->view('template/footer_ver1');
	}

	public function ares() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $data['title'] = "Coming soon...";
	    $data['msg'] = "ARES page is coming soon" . "<br><br>";
	    $this->load->view('status/status_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function technical() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $data['title'] = "Coming soon...";
	    $data['msg'] = "Technical page is coming soon" . "<br><br>";
	    $this->load->view('status/status_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function membership_benefits() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $data = array();
	    $data['home'] = 'home';
	    $data['cur'] = 'Home';
	    $this->load->view('public/benefits_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function lost_username() {
	    $this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
	    $email = strtolower($this->input->post('email'));

	    $data['title'] = 'Lost Username';
	    if($this->User_model->lost_username($email)) {
	       $data['msg'] = 'Username was emailed to ' . $email . '<br><br>';
	    }
	    else {
	        $data['msg'] = 'Email ' . $email . ' is not listed in database. No action was taken.<br><br>';
	    }
	    $this->load->view('status/status_view', $data);
	    $this->load->view('template/footer_ver1');
	}

	public function admin_test() {
		$this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
		$data = NULL;
		$this->load->view('master/admin_test', $data);
		$this->load->view('template/footer_ver1');
	}

	public function exam_det() {
		$this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
		$data = NULL;
		$this->load->view('edu/exam_det_view', $data);
		$this->load->view('template/footer_ver1');
	}

	public function admin_test2() {
		$this->load->view('template/header_public_gen', array('logged' => $this->Login_model->is_logged()['logged']));
		$data = NULL;
		$this->load->view('master/admin_test2', $data);
		$this->load->view('template/footer_ver1');
	}

}