<?php
class Login_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function is_logged() {
		$retval = array();
		$retval['logged'] = FALSE;
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}
		
		if(isset($_SESSION['logged'])) {
			if($_SESSION['logged']) {
				$retval['level'] = $_SESSION['level'];
				$retval['logged'] = TRUE;
			}
		}
		
		return $retval;
	}
	
	/**
	 * Checks user ID and password credentials
	 * @param $data array with user ID and password
	 */
	public function check_credentials($data) {
		//echo '<br><br><br>' . password_hash($data['pass'], PASSWORD_BCRYPT, array('cost' => 12));
		$retval = FALSE;
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
			session_regenerate_id(FALSE);
		}
		$this->db->select('username');
		$this->db->where('username', $data['user']);
		$query = $this->db->get('users');
		if(count($query->result()) == 1) {
			$this->db->select('pass');
			$this->db->where('username', $data['user']);
			$query = $this->db->get('users');
			if(count($query->result()) == 1) {
				$row = $query->row();
				if(password_verify($data['pass'], $row->pass)) {
					$retval = TRUE;
					$this->load->model('user_model');
					$user = $this->user_model->get_user($data['user']);
					$user['session_id'] = session_id();
					$this->set_logged($user);
					$_SESSION['user'] = $user;
					$_SESSION['id_user'] = $user['id'];
					$_SESSION['logged'] = TRUE;
					$_SESSION['level'] = $user['level'];
					$_SESSION['user_type'] = $user['description'];
				}
			}
		}
		return $retval;
	}

	private function set_logged($user){
//check for logged=1 in previous sessions for current user and set logged to 0
		$this->db->select('logged');
		$this->db->where('logged', 1);
		$this->db->where('id_user', $user['id']);
		//$res = $this->db->get('ci_sessions')->result();
		$cnt = $this->db->count_all_results('ci_sessions', TRUE);
		
		if($cnt > 0) {
			$this->db->where('logged', 1);
			$this->db->where('id_user', $user['id']);
			$this->db->update('ci_sessions', array('logged' => 0));
		}
		
		$session_data = array(
				'id_user' => $user['id'],
				'session_id' => $user['session_id'],
				'ip_address' => $_SERVER['REMOTE_ADDR'],
				'date_logged_in' => time(),
				'logged' => 1);
		$this->db->insert('ci_sessions', $session_data);
	}
	
	public function get_viewdata($username) {
		$retarr = array();
		$this->db->select('*');
		$this->db->where('username', $username);
		$usr_data = $this->db->get('users')->row();
		
		$data = array();
		
		if($usr_data->type_code == 0) {
		    $retarr['header'] = 'template/header_public_gen';
		    $retarr['view'] = 'status/status_view';
		    $retarr['data']['logged'] = TRUE;
		    $retarr['data']['title'] = 'User Not Set';
		    $retarr['data']['msg'] = 'Unfortunately, your user profile has not been setup yet. If you find this message in error, you may
            contact the webmaster at jan@kulisek.org<br><br>';
		    
		}
		elseif($usr_data->type_code == 1) {
			$retarr['header'] = 'template/header_public_gen';
			$retarr['view'] = 'edu/main_view';
			$retarr['data']['msg'] = '';
			$retarr['data']['edu'] = $this->Edu_model->get_classes();
			$retarr['data']['logged'] = TRUE;
		}
		elseif($usr_data->type_code == 2) {
			
			$retarr['header'] = 'template/header_public_gen';
			$retarr['view'] = 'events/main_view';
			$retarr['data']['logged'] = TRUE;
		}
		elseif($usr_data->type_code == 3) {
		    
		    $lectures = $this->Speaker_model->get_lectures($this->Login_model->get_cur_user_id());
		    
		    $retarr['data']['cnt'] = $lectures['cnt'];
		    $retarr['data']['lectures'] = $lectures['lectures'];
		    $retarr['header'] = 'template/header_public_gen';
		    $retarr['view'] = 'speakers/main_view';
		    $retarr['data']['logged'] = TRUE;
		}
		
		elseif($usr_data->type_code == 4) {
		    
		    $retarr['header'] = 'template/header_public_gen';
		    $retarr['view'] = 'user/edit_user_view';
		    $retarr['data'] = $this->User_model->get_cur_user();
		    $retarr['data']['msg'] = '';
		    $retarr['data']['logged'] = TRUE;
		}
		
		elseif($usr_data->type_code == 5) {
		    
		    $retarr['header'] = 'template/header_public_gen';
		    $retarr['view'] = 'clubs/main_view';
		    $arr = $this->Club_model->get_clubs();
		    $retarr['data']['cnt'] = $arr['cnt'];
		    $retarr['data']['clubs'] = $arr['clubs'];
		    $retarr['data']['msg'] = '';
		    $retarr['data']['logged'] = TRUE;
		}
		
		elseif($usr_data->type_code == 99) {
		    
		    $retarr['header'] = 'template/header_private';
		    $retarr['view'] = 'master/main_view';
		    $retarr['data']['msg'] = 'This is it!';
		    $retarr['data']['logged'] = TRUE;
		}
		else {
		    $retarr['header'] = 'template/header_public_gen';
		    $retarr['view'] = 'status/status_view';
		    $retarr['data']['title'] = 'Login Error';
		    $retarr['data']['msg'] = 'Unfortunately, your user profile is not properly setup. If you find this message in error, you may
            contact the webmaster at jan@kulisek.org<br><br>';
		    $retarr['data']['logged'] = FALSE;
		}
				
		return $retarr;
	}
	
	public function get_blogger() {
		$retval = 0;
		if($this->is_logged() != 100) {
			
//to do: check if blogger and set retval to user ID	

			$retval = 3;
		}	
		return $retval;
	}
	
	public function get_cur_user() {
		
	    if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}
		if(isset($_SESSION['logged'])) {
		  return $_SESSION['user'];
		}
		else {
		    return NULL;
		}
	}
	


	public function get_cur_user_id() {
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}
	
		return $_SESSION['id_user'];
	}
	
	public function logout() {
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}
		
		if(isset($_SESSION['logged'])) {
			$this->db->where('logged', 1);
			$this->db->where('id_user',  $_SESSION['id_user']);
			$this->db->update('ci_sessions', array('logged' => 0, 'date_logged_out' => time()));
			
			unset($_SESSION['logged']);
			unset($_SESSION['level']);
			unset($_SESSION['id_user']);
			unset($_SESSION['user']);
			unset($_SESSION['user_type']);
		}

		session_regenerate_id(FALSE);
		session_destroy();
	}
	
	public function check_table($id) {
	    
	    $tbl_name = 'user_' . $id . '_tbl';
	    
	    $this->db->select('*');
	    $this->db->where('id_user', $id);
	    $usr_data = $this->db->get('users')->row();
	    
	    if (!($this->db->table_exists($tbl_name)))	{
	        $this->load->dbforge();
	        
	        $id_field = 'id_' . $tbl_name;
	        $fields = array(
	            $id_field => array(
	                'type' => 'INT',
	                'constraint' => 11,
	                'unsigned' => TRUE,
	                'auto_increment' => TRUE
	            ),
	            'id_user' => array(
	                'type' => 'INT',
	                'constraint' => 11,
	                'unsigned' => TRUE
	            ),
	            'fname' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '100',
	                'default' => ''
	            ),
	            'lname' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '100',
	                'default' => ''
	            ),
	            'username' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '32',
	                'default' => ''
	            ),
	            'email' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '50',
	                'default' => ''
	            ),
	            'phone' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '32',
	                'default' => ''
	            ),
	            'street' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '100',
	                'default' => ''
	            ),
	            'city' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '128',
	                'default' => ''
	            ),
	            'facebook' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '128',
	                'default' => ''
	            ),
	            'twitter' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '128',
	                'default' => ''
	            ),
	            'linkedin' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '128',
	                'default' => ''
	            ),
	            'googleplus' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '128',
	                'default' => ''
	            ),
	            'state_cd' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '2',
	                'default' => ''
	            ),
	            'zip_cd' => array(
	                'type' =>'VARCHAR',
	                'constraint' => '10',
	                'default' => ''
	            ), 
	            'narrative' => array(
	                'type' => 'TEXT',
	                'default' => ''
	            ),
	            'narrative2' => array(
	                'type' => 'TEXT',
	                'default' => ''
	            )
	            
	        );
	        $this->dbforge->add_field($fields);
	        $this->dbforge->add_key($id_field, TRUE);
	        $this->dbforge->create_table($tbl_name);
	        
	        $data = array(
	            'id_user' => $id,
	            'fname' => $usr_data->fname,
	            'lname' => $usr_data->lname,
	            'email' => $usr_data->email,
	            'username' => $usr_data->username,
	            'street' => $usr_data->street,
	            'phone' => $usr_data->phone,
	            'city' => $usr_data->city,
	            'state_cd' => $usr_data->state_cd,
	            'zip_cd' => $usr_data->zip_cd
	        );
	        
	        $this->db->insert($tbl_name, $data);
	    }
	    
	    return $tbl_name;
	}
}