<?php
class Events_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	
	public function get_event($id) {
	    
	    $this->db->select('*');
	    $this->db->where('id_events', $id);
	    $res = $this->db->get('events')->row();
	    
	    $retarr = array();
	    $retarr['id'] = $res->id_events;
	    $retarr['name'] = $this->make_clickable_url($res->name);
	    $retarr['club'] = $this->make_clickable_url($res->club_name);
	    $retarr['date'] = $res->date;
	    $retarr['day'] = $res->day;
	    $retarr['coordinator'] = $this->make_clickable_url($res->coordinator);
	    $retarr['location'] = $res->location;
	    
	    $exploded = explode(' ', $res->web);
	    $retarr['web'] = '';
	    
	    foreach ($exploded as $str) {
	        $retarr['web'] .= $this->make_clickable_url($str) . ' ';
	    }
	    	    
	    return $retarr;
	}
    
	public function edit_event($param) {
	    $id = $param['id'];
	    unset($param['id']);
	    if($id > 0) {
	        $this->db->where('id_events', $id);
	        $this->db->update('events', $param);
	    }
	    else {
	        $this->db->insert('events', $param);
	    }
	}
	
	public function delete_event($id) {
	    $this->db->where('id_events', $id);
	    $this->db->delete('events');
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
	
	public function get_events() {
	    
	    $this->db->from('events');
	    $cnt = $this->db->count_all_results();
	    
	    $retarr = array();
	    $retarr['cnt'] = $cnt;
	    $retarr['events'] = array();
	    
	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('date', 'ASC');
	        $res = $this->db->get('events')->result();	        
	        
	        foreach($res as $row) {
	            if($row->date > time()) {
    	            $arr = array(
    	                'id' => $row->id_events,
    	                'name' => $row->name,
    	                'date' => $row->date,
    	                'club' => $this->make_clickable_url($row->club_name),
    	                'day' => $row->day,
    	                'coordinator' => $row->coordinator, 
    	                'location' => $row->location,
    	                'web' => $row->web
    	            );
    	            
    	            array_push($retarr['events'], $arr);
    	        }
	        }
	    }
	    
	    return $retarr;
	    
	}
	
	public function get_all_events() {
	    
	    $this->db->from('events');
	    $cnt = $this->db->count_all_results();
	    
	    $retarr = array();
	    $retarr['cnt'] = $cnt;
	    $retarr['events'] = array();
	    
	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('date', 'ASC');
	        $res = $this->db->get('events')->result();
	        
	        foreach($res as $row) {
	                $arr = array(
	                    'id' => $row->id_events,
	                    'name' => $row->name,
	                    'date' => $row->date,
	                    'club' => $this->make_clickable_url($row->club_name),
	                    'day' => $row->day,
	                    'coordinator' => $row->coordinator,
	                    'location' => $row->location,
	                    'web' => $row->web
	                );
	                
	                array_push($retarr['events'], $arr);
	        }
	    }
	    
	    return $retarr;
	    
	}	
	
}