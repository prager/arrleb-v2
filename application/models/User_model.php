<?php
class User_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	/**
	 * Gets the user data and returns them in an array
	 */
	public function get_user($username){
		//get username from users table
		$this->db->select('*');
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		$row = $query->row();
		//$user['type'] = $row->type_code;
		$user['level'] = $row->type_code;
		$user['id'] = $row->id_user;
		$user['fname'] = $row->fname;
		$user['lname'] = $row->lname;
		$user['zip'] = $row->zip_cd;
		$user['email'] = $row->email;
		$user['callsign'] = $row->callsign;
		$user['phone'] = $row->phone;
		$user['street'] = $row->street;
		$user['city'] = $row->city;
		$user['state'] = $row->state_cd;
		$user['callsign'] = $row->callsign;
		$user['facebook'] = $row->facebook;
		$user['twitter'] = $row->twitter;
		$user['googleplus'] = $row->googleplus;
		$user['linkedin'] = $row->linkedin;
		$user['authorized'] = $row->authorized;
		$user['username'] = $username;
		$user['profile'] = $row->profile;
		
//get user attributes from logins table
		$this->db->select('description');
		$this->db->where('type_code', $user['level']);
		$user['description'] = $this->db->get('user_types')->row()->description;
		
		return $user;
	}
	
	public function get_user_by_id($id) {
		$this->db->select('*');
		$this->db->where('id_user', $id);
		return $this->db->get('users')->row();
	}
	
	public function check_authorized() {
		$retval = TRUE;
		$id = $this->Login_model->get_cur_user_id();
		$this->db->select('authorized');
		$this->db->where('id_user', $id);
		if($this->db->get('users')->row()->authorized == 0) {
			$retval = FALSE;
		}
		return $retval;
	}
	
	public function send_msg($param) {
		/*$this->email->from($param['email'], $param['name']);
		 $this->email->to('fairball@jlkconsulting.info');
		 
		 $this->email->subject($param['subj']);
		 $this->email->message($param['msg']);
		 send_email('fairball@jlkconsulting.info', $param['subj'], $param['msg']);
		 $this->email->send();*/
		
		$recipient = 'jank@jlkconsulting.info';
		$message = "Message from ARRL-EB:\n\n Name: " . $param['fname'] . ' ' . $param['lname'] . "\n\n" . "Message:\n\n" . $param['msg'];
		mail($recipient, 'From ARRL-EB: ' . $param['subject'], $message);
		
		/*$msg_arr = array(
				'date' => time(),
				'name' => $param['name'],
				'email' => $param['email'],
				'subject' => $param['subject'],
				'message' => $param['msg']);
		
		$this->db->insert('messages', $msg_arr);*/
	}
	
	public function register($param) {
	    $retval = TRUE;
	    
	    $this->db->select('email');
	    $q = $this->db->get_where('users', array('email' => $param['email']));
	    
	    if($q->num_rows() == 0) {
	        
	        $this->db->insert('new_user', $param);
	        
	        $this->db->select('id_new_user');
	        $this->db->order_by('id_new_user', 'DESC');
	        $id_new_user = $this->db->get('new_user', 1, 0)->row()->id_new_user;
	        
	        $rand_str = bin2hex(openssl_random_pseudo_bytes(12));
	        
	        $param['verifystr'] = base_url() . 'index.php/public_ctl/confirm_reg/' . $rand_str;
	        $param['email_key'] = $rand_str;	        
	       
	        $param['active'] = 1;
	        
	        $this->db->insert('users', $param);
	        
	        $recipient = 'jank@jlkconsulting.info';
	        $subject = 'ARRL EB registration';
	        $message = $param['fname'] . ' ' . $param['lname'] . "\n\n".
	   	        $param['street'] . "\n\n" .$param['city'] . ' ' . $param['state_cd'] . $param['zip_cd'] . "\n\n".
	   	        ' Phone: ' . $param['phone'] . ' | Email: ' . $param['email'] . "\n\n";
	   	        
	   	        mail($recipient, $subject, $message);
	   	        
	   	        $recipient = $param['email'];
	   	        $subject = 'ARRL EB Registration';
	   	        
	   	        
	   	        $message = 'To finish your registration for ARRL EB click on the following link or copy paste in the browser: ' . $param['verifystr'] . "\n\n";
	   	        $message .= 'You must do so within 72 hours otherwise you login information may be deactivated. 
Thank you for your interest in ARRL EB Section!';
	   	        
	   	        mail($recipient, $subject, $message);	   	        
	   	        
	   	        
	   	        $this->db->select('id_user');
	   	        $this->db->where('email', $param['email']);
	   	        
	   	        $param['id_user'] = $this->db->get('users')->row()->id_user;
	   	        
	   	        $this->db->where('id_new_user', $id_new_user);
	   	        $this->db->update('new_user', array('id_user' => $param['id_user']));
	   	        
	    }
	    else {
	        $retval = FALSE;
	    }
	    
	    return $retval;
	}
	
	public function get_user_to_reg($verifystr) {
	    
	    $this->db->select('*');
	    $this->db->where('email_key', $verifystr);
	    $row = $this->db->get('users')->row();
	    
	    $retarr['fname'] = $row->fname;
	    $retarr['lname'] = $row->lname;
	    $retarr['id_user'] = $row->id_user;
	    $retarr['username'] = '';
	    
	    return $retarr;
	}
	
	public function set_user_login($param) {
	    $retval = FALSE;
	    
	    $pass1 = trim($param['pass1']);
	    $pass2 = trim($param['pass2']);
	    
	    if($pass1 == $pass2) {
	        $uppercase = preg_match('@[A-Z]@', $pass1);
	        $lowercase = preg_match('@[a-z]@', $pass1);
	        $number    = preg_match('@[0-9]@', $pass1);
	        
	        //if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
	        if(strlen($pass1) > 5) {
    	        $setarr['pass'] = password_hash($pass1, PASSWORD_BCRYPT, array('cost' => 12));
    	        $setarr['username'] = $param['username'];
    	        $setarr['active'] = 0;
    	        $this->db->select('active');
    	        $this->db->where('id_user', $param['id_user']);
    	        if($this->db->get('users')->row()->active == 1) {
    	            $this->db->where('id_user', $param['id_user']);
    	            $this->db->update('users', $setarr);
    	            $retval = TRUE;
    	        }    	        
	        }
	    }
	    
	    return $retval;
	}
	
	public function forgot_password($param) {
	    
	    $retarr = array();
	    
	    $retarr['error'] = NULL;
	    $retarr['username'] = NULL;
	    
	    $param['pass1'] = trim( $param['pass1']);
	    $param['pass2'] = trim( $param['pass2']);
	    
	    //$this->db->select('*');
	    $this->db->where('email', $param['email']);
	    $this->db->from('users');
	    $q = $this->db->count_all_results();
	    
	    if(($param['pass1'] == '') || ($param['pass2'] == '')) {
	        $retarr['error'] = 'Entered invalid passwords!';
	        $retarr['flag'] = FALSE;
	        return;
	    }
	    
	    if(!(filter_var($param['email'], FILTER_VALIDATE_EMAIL))) {
	        $retarr['error'] = 'Entered invalid email address';
	        $retarr['flag'] = FALSE;
	    }
	    elseif($q == 0) {
	        $retarr['error'] = 'Email address doesn\'t exist in the system';
	        $retarr['flag'] = FALSE;
	    }
	    else {
	        if($param['pass1'] == $param['pass2']) {
	            
	            $uppercase = preg_match('@[A-Z]@', $param['pass1']);
	            $lowercase = preg_match('@[a-z]@', $param['pass1']);
	            $number    = preg_match('@[0-9]@', $param['pass1']);
	            
	            if($uppercase && $lowercase && $number && (strlen($param['pass1']) > 5)) {
	            //if(strlen($param['pass1']) > 5) {
	                $param['pass'] = password_hash($param['pass1'], PASSWORD_BCRYPT, array('cost' => 12));
	                unset($param['pass1']);
	                unset($param['pass2']);
	                $this->db->select('username');
	                $this->db->where('email', $param['email']);
	                
	                $retarr['username'] = $this->db->get('users')->row()->username;
	                
	                $retarr['flag'] = TRUE;
	                
	                $this->db->where('email', $param['email']);
	                unset($param['email']);
	                
	                $this->db->update('users', $param);
	            } 
	            else {
	                $retarr['error'] = 'Password must be with upper/lower case letter(s), number(s) and number(s)';
	                $retarr['flag'] = FALSE;
	            }
	        }
	        else {
	            $retarr['error'] = 'Passwords did not match';
	            $retarr['flag'] = FALSE;
	        }
	        
	    }
	    return $retarr;
	}
	
	public function set_user($param) {
	    if($param['id'] > 0) {
    	    $id = $param['id'];
    	    unset($param['id']);
    	    $narrative = $param['narrative'];
    	    $narrative2 = $param['narrative2'];
    	    unset($param['narrative']);
    	    unset($param['narrative2']);
    	    
    	    $this->db->where('id_user', $id);
    	    $this->db->update('users', $param);            
    	    
	    }
	    else {
	        $narrative = $param['narrative'];
	        $narrative2 = $param['narrative2'];
	        unset($param['narrative']);
	        unset($param['narrative2']);
	        unset($param['id']);
	        
	        $this->db->insert('users', $param);
	        
	        $this->db->select('id_user');
	        $this->db->order_by('id_user', 'DESC');
	        $id = $this->db->get('users')->row()->id_user;
	        
	        $this->Login_model->check_table($id);
	    }
	    $tbl_name = 'user_' . $id . '_tbl';
	    $tbl_col = 'id_' . $tbl_name;
	    
	    $this->db->select($tbl_col);
	    $this->db->where('id_user', $id);
	    
	    $id_key = $this->db->get($tbl_name)->row()->$tbl_col;
	    
	    //$param['id_user'] = $id;
	    unset($param['callsign']);
	    $param['narrative'] = $narrative;
	    $param['narrative2'] = $narrative2;
	    $this->db->where('id_user', $id);
	    $this->db->update($tbl_name, $param);
	    
	}
	
	public function get_cur_user($id) {
	    
	    $this->db->select('*');
	    $this->db->where('id_user', $id);	    
	    $user = $this->db->get('users')->row();
	    
	    $tbl_name = 'user_' . $id . '_tbl';
	    
	    $this->db->select('narrative, narrative2');
	    $this->db->where('id_user', $id);
	    
	    $row = $this->db->get('user_' . $id . '_tbl')->row();
	    $narrative = $row->narrative;
	    $narrative2 = $row->narrative2;
	    
	    $user_arr = array(
	        'id' => $user->id_user,
	        'level' => $user->type_code,
	        'role' => $user->role,
	        'username' => $user->username,
	        'fname' => $user->fname,
	        'lname' => $user->lname,
	        'email' => $user->email,
	        'callsign' => $user->callsign,
	        'phone' => $user->phone,
	        'street' => $user->street,
	        'city' => $user->city,
	        'state' => $user->state_cd,
	        'zip' => $user->zip_cd,
	        'facebook' => $user->facebook,
	        'twitter' => $user->twitter,
	        'linkedin' => $user->linkedin,
	        'googleplus' => $user->googleplus,
	        'narrative' => $narrative,
	        'narrative2' => $narrative2,
	        'profile' => $user->profile
	    );
	    
	    return $user_arr;
	}
	
	public function get_staff() {
	    $this->db->select('*');
	    $this->db->order_by('id_staff', 'ASC');
	    $staff = $this->db->get('staff')->result();
	    	    
	    $retarr = array();
	    $retarr['staff'] = array();
	    
	    foreach ($staff as $row) {
    	    $this->db->select('*');
    	    $this->db->where('id_user', $row->id_user);
    	    $member = $this->db->get('users')->row();
    	    
    	    $tbl_name = 'user_' . $member->id_user . '_tbl';
    	    
    	    if ($this->db->table_exists($tbl_name)) {
    	        $this->db->select('narrative');
    	        $narrative = $this->db->get($tbl_name)->row()->narrative;
    	    }
    	    else {
    	        $narrative = '';
    	    }
    	    
    	    $arr = array(
    	        'id_user' => $member->id_user,
    	        'fname' => $member->fname,
    	        'lname' => $member->lname,
    	        'callsign' => $member->callsign,
    	        'position' => $row->position_name,
    	        'pos_code' => $member->pos_code,
    	        'narrative' => $narrative,
    	        'image_loc' => $member->image_loc,
    	        'facebook' => $member->facebook,
    	        'twitter' => $member->twitter,
    	        'googleplus' => $member->googleplus,
    	        'linkedin' => $member->linkedin
    	    );
    	    //echo $arr['lname'] . ' - ' . $row->image_loc;
    	    array_push($retarr['staff'], $arr);
	    }
	    
	    //echo '<br><br>staff arr:<br>';
	    	    
	    return $retarr;
	}
	
	public function get_member($id) {
	    
	    $tbl_name = 'user_' . $id . '_tbl';
	    if ($this->db->table_exists($tbl_name)) {
	        
	        $this->db->select('narrative, narrative2');
	        $row = $this->db->get($tbl_name)->row();
	        $narrative = $row->narrative;
	        $narrative2 = $row->narrative2;
	    }
	    else {
	        $narrative = '';
	        $narrative2 = '';
	    }
	    
	    $this->db->select('*');
	    $this->db->where('id_user', $id);
	    $row = $this->db->get('users')->row();
	    
	    $retarr = array();
	    
//maybe not needed; identical to get_speaker
	    
	    
	}
	
	public function get_staff_positions() {
	    $this->db->select('*');
	    $this->db->order_by('id_staff', 'ASC');
	    $positions = $this->db->get('staff')->result();
	    
	    $retarr = array();
	    $retarr['positions'] = array();
	    foreach($positions as $row) {
	        
	        $this->db->select('fname, lname, callsign');
	        $this->db->where('id_user', $row->id_user);
	        $member = $this->db->get('users')->row();
	        
	        $arr = array(
	            'id_staff' => $row->id_staff,
	            'id_user' => $row->id_user,
	            'pos_name' => $row->position_name,
	            'fname' => $member->fname,
	            'lname' => $member->lname,
	            'callsign' => $member->callsign
	        );
	        
	        array_push($retarr['positions'], $arr);
	    }
	    	    
	    $this->db->select('*');
	    $users = $this->db->get('users')->result();
	    
	    $temp_arr = array();
	    foreach ($users as $row) {
	        
	        $usr_arr = array(
	            'id_user' => $row->id_user,
	            'lname' => $row->lname,
	            'fname' => $row->fname
	        );
	        
	        array_push($temp_arr, $usr_arr);
	    }
	    
	    $retarr['users'] = $this->fill_users_arr($temp_arr);
	    
	    return $retarr;
	}
	
	public function edit_staff($param) {
	    $id = $param['id_staff'];
	    unset($param['id_staff']);
	    
	    $this->db->where('id_staff', $id);
	    $this->db->update('staff', $param);
	}
	
	public function get_all_users() {
	    $this->db->select('*');
	    $retval = array();
	    $retval['users'] = array();
	    
	    $users = $this->db->get('users')->result();
	    
	    /*
	     * profile str: edu-events-notset-speaker-club-elmer
	     * num values: 1-2-3-5-6
	     */
	    
	    foreach($users as $row) {
	        $user = array(
	            'id_user' => $row->id_user,
	            'id' => $row->id_user,
	            'fname' => $row->fname,
	            'lname' => $row->lname,
	            'callsign' => $row->callsign,
	            'profile_str' => $row->profile,
	            'email' => $row->email
	        );
	        
	        array_push($retval['users'], $user);
	    }	    
	    $retval['cnt'] = count($retval['users']);
	    
	    return $retval;
	}
	
	public function set_user_profile($param) {
	    $profile_str = NULL;
	    
	    if($param['mst'] == 'accept') {
	        $profile_str .= '99-';
	    }
	    
	    if($param['edu'] == 'accept') {
	        $profile_str .= '1-';
	    }
	    
	    if($param['events'] == 'accept') {
	        $profile_str .= '2-';
	    }
	    
	    if($param['clb'] == 'accept') {
	        $profile_str .= '5-';
	    }
	    
	    if($param['spk'] == 'accept') {
	        $profile_str .= '3-';
	    }
	    
	    if($param['elm'] == 'accept') {
	        $profile_str .= '6-';
	    }
	    
	    $this->db->where('id_user', $param['id']);
	    $this->db->update('users', array('profile' => $profile_str));
	    
	}
	
	private function fill_users_arr($arr) {
	    
	    $retarr = array();
	    for ($i=0; $i<count($arr); $i++) {	        	        
	        $retarr[$arr[$i]['id_user']] = $arr[$i]['fname'] . ' ' .  $arr[$i]['lname'];
	    }
	    
	    return $retarr;
	}
	
	public function get_elmers() {
	    $users = $this->get_all_users()['users'];
	    
	    /*
	     * profile str: edu-events-notset-speaker-club-elmer
	     * num values: 1-2-3-5-6
	     */
	    
	    $retarr = array();
	    $retarr['elmers'] = array();
	    
	    foreach ($users as $row) {
	        if(is_numeric(strpos($row['profile_str'], "6"))) {
	            array_push($retarr['elmers'], $row);
	        }
	    }
	    
	    $retarr['cnt'] = count($retarr['elmers']);
	    
	    return $retarr;
	    
	}
	
	public function delete_user($id) {
	    $this->db->where('id_user', $id);
	    $this->db->delete('users');
	}
	
	public function lost_username($email) {
	    $retval = TRUE;
	    
	    $this->db->where('email', $email);
	    $this->db->from('users');
	    
	    if($this->db->count_all_results() == 0) {
	        $retval = FALSE;
	    }
	    else {	        
	        $this->db->select('username');
	        $this->db->where('email', $email);
	        $username = $this->db->get('users')->row()->username;
	        
	        $message = "Your username for ARRL EB Section web portal is: " . $username . "\n\n";
	        mail($email, 'Your Username for ARRL EB Section', $message);
	    }
	    
	    return $retval;	    
	}
}