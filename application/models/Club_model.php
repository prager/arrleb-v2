<?php
class Club_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	
	public function get_club($id) {
	    
	    $this->db->select('*');
	    $this->db->where('id_club', $id);
	    $res = $this->db->get('clubs')->row();
	    
	    $retarr = array();
	    $retarr['id'] = $res->id_user;
	    $retarr['name'] = $res->name;
	    $retarr['long_name'] = $res->long_name;
	    $retarr['link'] = $this->make_clickable_url($res->link);
	    $retarr['narrative'] = $res->narrative;
	    	    
	    return $retarr;
	}
    
	public function edit_club($param) {
	    $id = $param['id'];
	    unset($param['id']);
	    if($id > 0) {
	        $this->db->where('id_clubs', $id);
	        $this->db->update('clubs', $param);
	    }
	    else {
	        $this->db->insert('clubs', $param);
	    }
	}
	
	public function delete_club($id) {
	    $this->db->where('id_clubs', $id);
	    $this->db->delete('clubs');
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
	
	public function get_clubs() {
	    
	    $this->db->from('clubs');
	    $cnt = $this->db->count_all_results();
	    
	    $retarr = array();
	    $retarr['cnt'] = $cnt;
	    $retarr['clubs'] = array();
	    
	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('name', 'ASC');
	        $res = $this->db->get('clubs')->result();	        
	        
	        foreach($res as $row) {
	            $arr = array(
	                'id' => $row->id_clubs,
	                'name' => $row->name,
	                'long_name' => $row->long_name,
	                'link' => $row->link,
	                'narrative' => $row->narrative, 
	                'active' => $row->active
	            );
	            
	            array_push($retarr['clubs'], $arr);
	        }
	    }
	    
	    return $retarr;
	    
	}	
	
}