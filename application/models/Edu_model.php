<?php
class Edu_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_classes() {
	    $retarr = array();
	    $this->db->from('education');
	    $cnt = $this->db->count_all_results();
	    $retarr['cnt'] = $cnt;
	    $retarr['classes'] = array();
	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('date_from', 'ASC');
	        $res = $this->db->get('education')->result();
	        foreach($res as $row) {
	            if($row->date_to > time()) {
	                $arr = array(
	                    'id' => $row->id_education,
	                    'course' => $row->course,
	                    'date_from' => $row->date_from,
	                    'date_to' => $row->date_to,
	                    'fee' => $row->fee,
	                    'status' => $row->status,
	                    'location' => $row->location,
	                    'details' => $row->details_url,
	                    'category' => $row->licensing,
	                    'details_url' => $this->make_clickable_url($row->details_url),
	                    'club' => $row->club
	                );
	                   array_push($retarr['classes'], $arr);
	            }
	        }
	    }

	    return $retarr;
	}

	public function get_class($id) {
	    $this->db->select('*');
	    $this->db->where('id_education', $id);
	    $res = $this->db->get('education')->row();

	    $retarr = array();
	    $retarr['id'] = $res->id_education;
	    $retarr['course'] = $res->course;
	    $retarr['date_from'] = $res->date_from;
	    $retarr['date_to'] = $res->date_to;
	    $retarr['location'] = $res->location;
	    $retarr['fee'] = $res->fee;

	    $exploded = explode(' ', $res->details_url);
	    $retarr['details_url'] = '';

	    foreach ($exploded as $str) {
	       $retarr['details_url'] .= $this->make_clickable_url($str) . ' ';
	    }

	    return $retarr;
	}

	public function get_test($id) {
	    $this->db->select('*');
	    $this->db->where('id_education', $id);
	    $res = $this->db->get('education')->row();

	    $retarr = array();
	    $retarr['id'] = $res->id_education;
	    if($res->licensing == 1) {
	       $retarr['course'] = 'License Testing Session';
	    }
	    elseif($res->licensing == 2) {
	        $retarr['course'] = 'License Testing Session';
	    }
	    elseif($res->licensing == 3) {
	        $retarr['course'] = 'License Testing Session';
	    }
	    elseif($res->licensing == 4) {
	        $retarr['course'] = 'License Testing Session';
	    }
	    $retarr['date_from'] = $res->date_from;
	    $retarr['date_to'] = $res->date_to;
	    $retarr['location'] = $res->location;
	    //$retarr['fee'] = $res->fee;
	    $retarr['fee'] = 15;

	    $exploded = explode(' ', $res->details_url);
	    $retarr['details_url'] = '';

	    foreach ($exploded as $str) {
	        $retarr['details_url'] .= $this->make_clickable_url($str) . ' ';
	    }

	    return $retarr;
	}

	public function edit_class($param) {
	    $id = $param['id'];
	    unset($param['id']);
	    if($id > 0) {
	        $this->db->where('id_education', $id);
	        $this->db->update('education', $param);
	    }
	    else {
	        $this->db->insert('education', $param);
	    }
	}

	public function delete_class($id) {
	    $this->db->where('id_education', $id);
	    $this->db->delete('education');
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

	public function get_testing() {

	    $this->db->from('education');
	    $this->db->where('licensing >', 0);
	    $this->db->where('licensing <', 5);
	    $this->db->where('date_to >', time());
	    $cnt = $this->db->count_all_results();

	    $retval = array();
	    $tests = array();

	    if($cnt > 0) {
    	    $this->db->select('*');
    	    $this->db->order_by('date_from', 'ASC');
    	    $this->db->where('licensing >', 0);
    	    $this->db->where('licensing <', 5);
    	    $this->db->where('date_to >', time());
    	    $res = $this->db->get('education')->result();

    	    foreach($res as $row) {
    	        $course = '';
    	        if($row->licensing == 1) {
    	            $course = 'License Testing Session';
    	        }
    	        elseif($row->licensing == 2) {
    	            $course = 'License Testing Session';
    	        }
    	        elseif($row->licensing == 3){
    	            $course = 'License Testing Session';
    	        }
    	        elseif($row->licensing == 4){
    	            $course = 'License Testing Session';
    	        }
    	        $arr = array(
    	            'id' => $row->id_education,
    	            'course' => $course,
    	            'date_from' => $row->date_from,
    	            'date_to' => $row->date_to,
    	            'fee' => 15,
    	            //'fee' => $row->fee,
    	            'status' => $row->status,
    	            'location' => $row->location,
    	            'detail_url' => $row->details_url
    	        );
    	        array_push($tests, $arr);
    	    }


	    }

	    $retval['tests'] = $tests;
	    $retval['cnt'] = $cnt;

	    return $retval;
	}

	public function get_gota() {

	    $this->db->from('education');
	    $this->db->where('licensing', 4);
	    $this->db->where('date_to >', time());
	    $cnt = $this->db->count_all_results();

	    $retval = array();
	    $tests = array();

	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('date_from', 'ASC');
	        $this->db->where('licensing', 4);
	        $this->db->where('date_to >', time());
	        $res = $this->db->get('education')->result();

	        foreach($res as $row) {
	            $arr = array(
	                'id' => $row->id_education,
	                'course' => $row->course,
	                'date_from' => $row->date_from,
	                'date_to' => $row->date_to,
	                'fee' => $row->fee,
	                'status' => $row->status,
	                'location' => $row->location,
	                'detail_url' => $row->details_url,
	                'club' => $row->club
	            );
	            array_push($tests, $arr);
	        }


	    }

	    $retval['tests'] = $tests;
	    $retval['cnt'] = $cnt;

	    return $retval;
	}

	public function get_inday() {

	    $this->db->from('education');
	    $this->db->where('licensing', 7);
	    $this->db->where('date_to >', time());
	    $cnt = $this->db->count_all_results();

	    $retval = array();
	    $inday = array();

	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('date_from', 'ASC');
	        $this->db->where('licensing', 7);
	        $this->db->where('date_to >', time());
	        $res = $this->db->get('education')->result();

	        foreach($res as $row) {
	            $arr = array(
	                'id' => $row->id_education,
	                'course' => $row->course,
	                'date_from' => $row->date_from,
	                'date_to' => $row->date_to,
	                'fee' => $row->fee,
	                'status' => $row->status,
	                'location' => $row->location,
	                'detail_url' => $row->details_url,
	                'club' => $row->club
	            );
	            array_push($inday, $arr);
	        }


	    }

	    $retval['inday'] = $inday;
	    $retval['cnt'] = $cnt;

	    return $retval;
	}

	public function get_aux() {

	    $this->db->from('education');
	    $this->db->where('licensing', 6);
	    $this->db->where('date_to >', time());
	    $cnt = $this->db->count_all_results();

	    $retval = array();
	    $tests = array();

	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('date_from', 'ASC');
	        $this->db->where('licensing', 6);
	        $this->db->where('date_to >', time());
	        $res = $this->db->get('education')->result();

	        foreach($res as $row) {
	            $arr = array(
	                'id' => $row->id_education,
	                'course' => $row->course,
	                'date_from' => $row->date_from,
	                'date_to' => $row->date_to,
	                'fee' => $row->fee,
	                'status' => $row->status,
	                'location' => $row->location,
	                'detail_url' => $row->details_url
	            );
	            array_push($tests, $arr);
	        }


	    }

	    $retval['tests'] = $tests;
	    $retval['cnt'] = $cnt;

	    return $retval;
	}

	public function get_emer() {

	    $this->db->from('education');
	    $this->db->where('licensing', 5);
	    $this->db->where('date_to >', time());
	    $cnt = $this->db->count_all_results();

	    $retval = array();
	    $tests = array();

	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('date_from', 'ASC');
	        $this->db->where('licensing', 5);
	        $this->db->where('date_to >', time());
	        $res = $this->db->get('education')->result();

	        foreach($res as $row) {
	            $arr = array(
	                'id' => $row->id_education,
	                'course' => $row->course,
	                'date_from' => $row->date_from,
	                'date_to' => $row->date_to,
	                'fee' => $row->fee,
	                'status' => $row->status,
	                'location' => $row->location,
	                'detail_url' => $row->details_url
	            );
	            array_push($tests, $arr);
	        }


	    }

	    $retval['tests'] = $tests;
	    $retval['cnt'] = $cnt;

	    return $retval;
	}

	public function get_extra() {

	    $this->db->from('education');
	    $this->db->where('licensing', 3);
	    $this->db->where('date_to >', time());
	    $cnt = $this->db->count_all_results();

	    $retval = array();
	    $tests = array();

	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('id_education', 'DESC');
	        $this->db->where('licensing', 3);
	        $this->db->where('date_to >', time());
	        $res = $this->db->get('education')->result();

	        foreach($res as $row) {
	            $arr = array(
	                'id' => $row->id_education,
	                'course' => $row->course,
	                'date_from' => $row->date_from,
	                'date_to' => $row->date_to,
	                'fee' => $row->fee,
	               // 'fee' => 15,
	                'status' => $row->status,
	                'location' => $row->location,
	                'detail_url' => $row->details_url
	            );
	            array_push($tests, $arr);
	        }


	    }

	    $retval['tests'] = $tests;
	    $retval['cnt'] = $cnt;

	    return $retval;
	}

	public function get_general() {

	    $this->db->from('education');
	    $this->db->where('licensing', 2);
	    $this->db->where('date_to >', time());
	    $cnt = $this->db->count_all_results();

	    $retval = array();
	    $tests = array();

	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('date_from', 'ASC');
	        $this->db->where('licensing', 2);
	        $this->db->where('date_to >', time());
	        $res = $this->db->get('education')->result();

	        foreach($res as $row) {
	            $arr = array(
	                'id' => $row->id_education,
	                'course' => $row->course,
	                'date_from' => $row->date_from,
	                'date_to' => $row->date_to,
	                'fee' => $row->fee,
	                'status' => $row->status,
	                'location' => $row->location,
	                'detail_url' => $row->details_url
	            );
	            array_push($tests, $arr);
	        }


	    }

	    $retval['tests'] = $tests;
	    $retval['cnt'] = $cnt;

	    return $retval;
	}

	public function get_tech() {

	    $this->db->from('education');
	    $this->db->where('licensing', 1);
	    $this->db->where('date_to >', time());
	    $cnt = $this->db->count_all_results();

	    $retval = array();
	    $tests = array();

	    if($cnt > 0) {
	        $this->db->select('*');
	        $this->db->order_by('id_education', 'ASC');
	        $this->db->where('licensing', 1);
	        $this->db->where('date_to >', time());
	        $res = $this->db->get('education')->result();

	        foreach($res as $row) {
	            $arr = array(
	                'id' => $row->id_education,
	                'course' => $row->course,
	                'date_from' => $row->date_from,
	                'date_to' => $row->date_to,
	                'fee' => $row->fee,
	                'status' => $row->status,
	                'location' => $row->location,
	                'detail_url' => $row->details_url
	            );
	            array_push($tests, $arr);
	        }


	    }

	    $retval['tests'] = $tests;
	    $retval['cnt'] = $cnt;

	    return $retval;
	}
}
