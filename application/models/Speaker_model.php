<?php
class Speaker_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function get_lectures($id_user) {
	    
	    $this->db->where('id_user', $id_user);
	    $this->db->from('speaker_topics');
	    $cnt = $this->db->count_all_results();
	    
	    $retarr['cnt'] = $cnt;
	    $retarr['lectures'] = array();
	    
	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->where('id_user', $id_user);
	        $res = $this->db->get('speaker_topics')->result();
	        foreach($res as $row) {
	            $arr = array(
	               'id' => $row->id_speaker_topics,
	               'topic_name' => $row->topic_name,
	               'date' => $row->date,
	               'location' => $row->location,
	               'topic_text' => $row->topic_text, 
	               'topic_ref' => $row->topic_ref
	                );
	                array_push($retarr['lectures'], $arr);
	        }
	    }
	    
	    return $retarr;
	}
	
	public function get_lecture($id) {
	    
	    $this->db->select('*');
	    $this->db->where('id_speaker_topics', $id);
	    $res = $this->db->get('speaker_topics')->row();
	    
	    $retarr = array();
	    $retarr['id'] = $res->id_user;
	    $retarr['topic_name'] = $res->topic_name;
	    $retarr['topic_text'] = $res->topic_text;
	    $retarr['date'] = $res->date;
	    $retarr['location'] = $res->location;
	    $retarr['topic_ref'] = '';
	    if($res->topic_ref != '') {
	        $exploded = explode(' ', $res->topic_ref);
	        foreach ($exploded as $str) {
	            $retarr['topic_ref'] .= $this->make_clickable_url($str) . ' ';
	        }
	    }
	    
	    $this->db->select('*');
	    $this->db->where('id_user', $res->id_user);
	    $res = $this->db->get('users')->row();
	    
	    $retarr['fname'] = $res->fname;
	    $retarr['lname'] = $res->lname;
	    
	    
	    return $retarr;
	}
    
	public function edit_lecture($param) {
	    $id = $param['id'];
	    unset($param['id']);
	    if($id > 0) {
	        $this->db->where('id_speaker_topics', $id);
	        $this->db->update('speaker_topics', $param);
	    }
	    else {
	        $param['id_user'] = $this->Login_model->get_cur_user_id();
	        $this->db->insert('speaker_topics', $param);
	    }
	}
	
	public function delete_lecture($id) {
	    $this->db->where('id_speaker_topics', $id);
	    $this->db->delete('speaker_topics');
	}	
	
	private function make_clickable_url($string){
	    
	    //FIND URLS INSIDE TEXT
	    //The Regular Expression filter
	    $reg_exUrl = "/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/";
	    
	    // Check if there is a url in the text
	    if(preg_match($reg_exUrl, $string, $url)) {
	        
	        if(strpos( $url[0], ":" ) === false){
	            $link = 'http://'.$url[0];
	        }else{
	            $link = $url[0];
	        }
	        
	        // make the urls hyper links
	        $string = preg_replace($reg_exUrl, '<a href="'.$link.'" title="'.$url[0].'" target="_blank">'.$url[0].'</a>', $string);
	        
	    }
	    
	    return $string;
	}
	
	public function get_speakers() {
	    
	    $retarr = array();
	    $retarr['cnt'] = 0;
	    $retarr['speakers'] = array();
	    
    	$this->db->select('*');
    	$users = $this->db->get('users')->result();
    	foreach($users as $user) {
    	    if(is_numeric(strpos($user->profile, "3"))) {
    	        $arr = array(
    	            'id' => $user->id_user,
    	            'fname' => $user->fname,
    	            'lname' => $user->lname,
    	            'callsign' => $user->callsign,
    	            'email' => $user->email,
    	            'city' => $user->city,
    	            'state' => $user->state_cd
    	        );
    	        array_push($retarr['speakers'], $arr);
    	        $retarr['cnt']++;
    	    }
    	}
	    return $retarr;
	    
	}	
	
	public function get_speaker($id) {
	    $this->db->select('*');
	    $this->db->where('id_user', $id);
	    $user_data = $this->db->get('users')->row();
	    
	    $retarr = array();
	    
	    $retarr['fname'] = $user_data->fname;
	    $retarr['lname'] = $user_data->lname;
	    $retarr['email'] = $user_data->email;
	    $retarr['facebook'] = $user_data->facebook;
	    $retarr['twitter'] = $user_data->twitter;
	    $retarr['linkedin'] = $user_data->linkedin;
	    $retarr['googleplus'] = $user_data->googleplus;
	    $retarr['callsign'] = $user_data->callsign;
	    if($this->Login_model->is_logged()['logged']) {
    	    $retarr['phone'] = $user_data->phone;
    	    $retarr['street'] = $user_data->street;
    	    $retarr['city'] = $user_data->city;
    	    $retarr['state'] = $user_data->state_cd;
    	    $retarr['zip'] = $user_data->zip_cd;
	    }
	    else {
	        $retarr['phone'] = 'Register to view';
	        $retarr['street'] = 'Register to view';
	        $retarr['city'] = '';
	        $retarr['state'] = '';
	        $retarr['zip'] = '';
	    }
	    $img = $user_data->image_loc;
	    
	    if($img != NULL) {
	        $retarr['image_loc'] = $img;
	    }
	    else {
	        $retarr['image_loc'] = '/assets/img/team-member.gif';
	    }
	    
	    $this->Login_model->check_table($id);
	    
	    $this->db->select('narrative, narrative2');
	    $this->db->where('id_user', $id);
	    $row = $this->db->get('user_' . $id . '_tbl')->row();
	    $retarr['narrative'] = $row->narrative;
	    $retarr['narrative2'] = $row->narrative2;
	    
	    $this->db->where('id_user', $id);
	    $this->db->from('speaker_topics');
	    $cnt = $this->db->count_all_results();
	    
	    $retarr['cnt'] = $cnt;
	    
	    $retarr['topics'] = array();
	    if($cnt > 0) {
    	    $this->db->select('*');
    	    $this->db->where('id_user', $id);
    	    $res = $this->db->get('speaker_topics')->result();
    	    	    
        	    foreach($res as $row) {
        	        $arr = array(
        	            'id_lecture' => $row->id_speaker_topics,
        	            'subject' => $row->topic_name,
        	            'text' => $row->topic_text,
        	            'ref' => $row->topic_ref,
        	            'location' => $row->location,
        	            'date' => $row->date
        	        );
        	        array_push($retarr['topics'], $arr);
        	    }
	    }
	    
	    $retarr['home_pg'] = anchor('public_ctl/speakers', 'Speakers');
	    
	    return $retarr;
	}
	
	
	
	
}