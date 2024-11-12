<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Fill_arrays {
    
    public function get_day_num($key) {
        return $this->day_nums()[$key];
    }
    
    public function day_nums() {
        $retarr = array(
            'Sat' => 0,
            'Sun' => 1,
            'Mon' => 2,
            'Tue' => 3,
            'Wed' => 4,
            'Thu' => 5,
            'Fri' => 6);
        
        return $retarr;
    }
    
    public function get_day($key) {
        return $this->days()[$key];
    }
    
    public function days() {
        $retarr = array(
            '0' => 'Sat',
            '1' => 'Sun',
            '2' => 'Mon',
            '3' => 'Tue',
            '4' => 'Wed',
            '5' => 'Thu',
            '6' => 'Fri');
        
        return $retarr;
    }

	public function innings() {
		$retarr = array(
				'1' => 1,
				'2' => 2,
				'3' => 3,
				'4' => 4,
				'5' => 5,
				'6' => 6,
				'7' => 7,
				'8' => 8,
				'9' => 9);
		
		return $retarr;
	}
	public function bsbl_roles_arr() {
		$roles = array(
				'GST' => 'Guest',
				'PLY' => 'Player',
				'COA' => 'Coach',
				'REP' => 'Team Rep',
				'PRT' => 'Parent',
				'MGR' => 'Manager',
				'MST' => 'Master',
				'SMS' => 'Sub-Master',
				'ORG' => 'Org Rep',
				'DIV' => 'Div Rep',
				'SCT' => 'Scout'
		);
		
		return $roles;
	}
	public function get_bsbl_role($key){
		return $this->bsbl_roles_arr()[$key];
	}
	public function basic_rating_arr() {
		$rating = array(
				'0' => '0',
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'5' => '5',
				'6' => '6',
				'7' => '7',
				'8' => '8',
				'9' => '9',
				'10' => '10');
		return $rating;
	}
	public function get_rating($key) {
		return $this->basic_rating_arr()[$key];
	}
	public function ath_rating_arr() {
		$rating = array(
				'0' => 'No',
				'1' => 'Yes');
		return $rating;
	}
	public function get_ath_rating($key) {
		return $this->get_ath_rating_arr()[$key];
	}
	public function ext_rating_arr() {
		$rating = array(
				'0' => '0',
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'5' => '5',
				'6' => '6',
				'7' => '7',
				'8' => '8',
				'9' => '9',
				'10' => '10');
		return $rating;
	}
	public function get_ext_rating($key) {
		return $this->ext_rating_arr()[$key];
	}
	/**
	 * Get all the states
	 *
	 * @return array array of states
	 *
	 */
	public function get_states_array() {
		$states = array(
				"AL" => "Alabama",
				"AK" => "Alaska",
				"AZ" => "Arizona",
				"AR" => "Arkansas",
				"CA" => "California",
				"CO" => "Colorado",
				"CT" => "Connecticut",
				"DE" => "Delaware",
				"FL" => "Florida",
				"GA" => "Georgia",
				"HI" => "Hawaii",
				"ID" => "Idaho",
				"IL" => "Illinois",
				"IN" => "Indiana",
				"IA" => "Iowa",
				"KS" => "Kansas",
				"KY" => "Kentucky",
				"LA" => "Louisiana",
				"ME" => "Maine",
				"MD" => "Maryland",
				"MA" => "Massachusetts",
				"MI" => "Michigan",
				"MN" => "Minnesota",
				"MS" => "Mississippi",
				"MO" => "Missouri",
				"MT" => "Montana",
				"NE" => "Nebraska",
				"NV" => "Nevada",
				"NH" => "New Hampshire",
				"NJ" => "New Jersey",
				"NM" => "New Mexico",
				"NY" => "New York",
				"NC" => "North Carolina",
				"ND" => "North Dakota",
				"OH" => "Ohio",
				"OK" => "Oklahoma",
				"OR" => "Oregon",
				"PA" => "Pennsylvania",
				"RI" => "Rhode Island",
				"SC" => "South Carolina",
				"SD" => "South Dakota",
				"TN" => "Tennessee",
				"TX" => "Texas",
				"UT" => "Utah",
				"VT" => "Vermont",
				"VA" => "Virginia",
				"WA" => "Washington",
				"WV" => "West Virginia",
				"WI" => "Wisconsin",
				"WY" => "Wyoming",
				"AS" => "American Samoa",
				"DC" => "District of Columbia",
				"FM" => "Federated States of Micronesia",
				"GU" => "Guam",
				"MH" => "Marshall Islands",
				"MP" => "Northern Mariana Islands",
				"PW" => "Palau",
				"PR" => "Puerto Rico",
				"VI" => "Virgin Islands"
		);

		return $states;
	}

	public function obser_evals() {
		$retarr = array(
				'HIT' => 'Hitting',
				'INF' => 'Infield',
				'OUTF' => 'Outfield',
				'QUIC' => 'Quickness',
				'MENT' => 'Mental',
				'PITC' => 'Pitching',
				'CATC' => 'Catching');

		return $retarr;
	}

	public function  get_obser_eval($key) {
		return $this->obser_evals()[$key];
	}

	public function obser_types() {
		$retarr = array(
				'1' => 'Hitting',
				'2' => 'Hitting Detailed',
				'3' => 'Infield',
				'4' => 'Infield Detailed',
				'5' => 'Outfield',
				'6' => 'Outfield Detailed',
				'7' => 'Quickness',
				'8' => 'Quickness Detailed',
				'9' => 'Mental',
				'10' => 'Mental Detailed',
				'11' => 'Pitching',
				'12' => 'Pitching Detailed',
				'13' => 'Catching',
				'14' => 'Catching Detailed');
		return $retarr;
	}

	public function get_obser_type($key) {
		return $this->obser_types()[$key];
	}

	public function eval_str() {
		$retarr = array(
				'1' => 'HIT',
				'2' => 'INF',
				'3' => 'OUTF',
				'4' => 'QUIC',
				'5' => 'MENT',
				'6' => 'PITC',
				'7' => 'CATC');
		return $retarr;
	}

	public function get_eval_str($key) {
		return $this->eval_str()[$key];
	}

	public function ath_evals() {
		$retarr = array(
				'OSP' => 'Offense Speed',
				'DSP' => 'Defense Speed',
				'AGL' => 'Agility',
				'QCK' => 'Quickness',
				'LTM' => 'Lateral Motion',
				'RNG' => 'Range');

		return $retarr;
	}

	public function get_ath_eval($key) {
		return $this->ath_evals()[$key];
	}

	public function ath_eval_str() {
		$retarr = array(
				'11' => 'OSP',
				'12' => 'DSP',
				'13' => 'AGL',
				'14' => 'QCK',
				'15' => 'LTM',
				'16' => 'RNG');
		return $retarr;
	}

	public function get_ath_eval_str($key) {
		if($key == 0)
			$retval = 0;
			else
				$retval = $this->ath_eval_str()[$key];
				return $retval;
	}

	public function off_positions() {
		$retarr = array(
				'S9' => 'Starting 9',
				'SSU1' => 'Starting Substitute 1',
				'SSU2' => 'Starting Substitute 2',
				'SSU3' => 'Starting Substitute 3',
				'RSU1' => 'Rotating Substitute 1',
				'RSU2' => 'Rotating Substitute 2',
				'RSU3' => 'Rotating Substitute 3',
				'DH' => 'Designated Hitter',
				'EH' => 'Extra Hitter'
		);

		return $retarr;
	}

	public function def_positions() {
		$retarr = array(
				'P' => 'Pitcher',
				'C' => 'Catcher',
				'1B' => 'First Base',
				'2B' => 'Second Base',
				'3B' => 'Third Base',
				'SS' => 'Shortstop',
				'RF' => 'Right Field',
				'CF' => 'Center Field',
				'LF' => 'Left Field'
		);

		return $retarr;
	}

	public function lineup_type() {
		$retarr = array(
		//off - lim rot - DH - groups of 3 - strongest overall batting order
				'1' => 'Limited Rotation - Designated Hitter - Groups of 3 - Strongest Overall Batting Order',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				'2' => 'Limited Rotation - Designated Hitter - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				'3' => 'Limited Rotation - Designated Hitter - Groups of 4 - Strongest Overall Batting Order',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				'4' => 'Limited Rotation - Designated Hitter - Groups of 4 - Strongest Individual Groups',
				//off - lim rot - EH - groups of 3 - strongest overall batting order
				'5' => 'Limited Rotation - Extra Hitter - Groups of 3 - Strongest Overall Batting Order',
				//off - lim rot - EH - groups of 3 - strongest indiv groups
				'6' => 'Limited Rotation - Extra Hitter - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - EH - groups of 4 - strongest overall batting order
				'7' => 'Limited Rotation - Extra Hitter - Groups of 4 - Strongest Overall Batting Order',
				//off - lim rot - EH - groups of 4 - strongest indiv groups
				'8' => 'Limited Rotation - Extra Hitter - Groups of 4 - Strongest Individual Groups',
				//off - free rot - groups of 3 - strongest overall batting order
				'9' => 'Limited Rotation - No DH/EH - Groups of 3 - Strongest Overall Batting Order',
				//off - free rot - groups of 3 - strongest indiv groups
				'10' => 'Limited Rotation - No DH/EH - Groups of 3 - Strongest Individual Groups',
				//off - free rot - groups of 4 - strongest overall batting order
				'11' => 'Limited Rotation - No DH/EH - Groups of 4 - Strongest Overall Batting Order',
				//off - free rot - groups of 4 - strongest indiv groups
				'12' => 'Limited Rotation - No DH/EH - Groups of 4 - Strongest Individual Groups',
				//off - free rot - groups of 3 - strongest overall batting order
				'13' => 'Limited Rotation - Both DH and EH - Groups of 3 - Strongest Overall Batting Order',
				//off - free rot - groups of 3 - strongest indiv groups
				'14' => 'Limited Rotation - Both DH and EH - Groups of 3 - Strongest Individual Groups',
				//off - free rot - groups of 4 - strongest overall batting order
				'15' => 'Limited Rotation - Both DH and EH - Groups of 4 - Strongest Overall Batting Order',
				//off - free rot - groups of 4 - strongest indiv groups
				'16' => 'Limited Rotation - Both DH and EH - Groups of 4 - Strongest Individual Groups',
				//def - lim rot - infield priority - left side strength
				'17' => 'Limited Rotation - Infield Priority - Left Side Strength',
				//def - lim rot - infield priority - middle strength
				'18' => 'Limited Rotation - Infield Priority - Middle Strength',
				//def - lim rot - infield priority - right strength
				'19' => 'Limited Rotation - Infield Priority - Right Side Strength',
				//def - lim rot - outfield priority - left side strength
				'20' => 'Limited Rotation - Outfield Priority - Left Side Strength',
				//def - lim rot - outfield priority - middle strength
				'21' => 'Limited Rotation - Outfield Priority - Middle Strength',
				//def - lim rot - outfield priority - right strength
				'22' => 'Limited Rotation - Outfield Priority - Right Side Strength',
				//def - free rot - infield priority - left side strength
				'23' => 'Free Rotation - Infield Priority - Left Side Strength',
				//def - free rot - infield priority - middle strength
				'24' => 'Free Rotation - Infield Priority - Middle Strength',
				//def - free rot - infield priority - right strength
				'25' => 'Free Rotation - Infield Priority - Right Side Strength',
				//def - free rot - outfield priority - left side strength
				'26' => 'Free Rotation - Outfield Priority - Left Side Strength',
				//def - free rot - outfield priority - middle strength
				'27' => 'Free Rotation - Outfield Priority - Middle Strength',
				//def - lim rot - outfield priority - right strength
				'28' => 'Free Rotation - Outfield Priority - Right Side Strength');

		return $retarr;
	}

	public function get_lineup_type($key) {
		if($key < 5) {
			return $this->lim_nodheh()[$key];
		}
		elseif(($key < 9) && ($key > 4)) {
			return $this->lim_dh_noeh()[$key];
		}
		elseif(($key < 13) && ($key > 8)) {
			return $this->lim_eh_nodh()[$key];
		}
		elseif(($key < 17) && ($key > 12)) {
			return $this->lim_dheh()[$key];
		}
		elseif(($key < 21) && ($key > 16)) {
			return $this->free_off()[$key];
		}
		elseif(($key < 27) && ($key > 20)) {
			return $this->free_def()[$key];
		}
		elseif($key > 26) {
			return $this->lim_def()[$key];
		}
	}

	public function get_lineup_types($key) {
		if($key < 5) {
			return $this->lim_nodheh();
		}
		elseif(($key < 9) && ($key > 4)) {
			return $this->lim_dh_noeh();
		}
		elseif(($key < 13) && ($key > 8)) {
			return $this->lim_eh_nodh();
		}
		elseif(($key < 17) && ($key > 12)) {
			return $this->lim_dheh();
		}
		elseif(($key < 21) && ($key > 16)) {
			return $this->free_off();
		}
		elseif(($key < 27) && ($key > 20)) {
			return $this->free_def();
		}
		elseif($key > 26) {
			return $this->lim_def();
		}
	}

	public function lim_nodheh() {
		$retarr = array(
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				//'1' => 'No EH/DH - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				//'2' => 'No EH/DH - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				//'3' => 'No EH/DH - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				//'4' => 'No EH/DH - Groups of 4 - Strongest Individual Groups'				
				
				'1' => 'No DH/EH - Groups of 3 - Strongest Overall Lineup',
				'2' => 'DH (no EH) - Groups of 3 - Strongest Overall Lineup',
				'3' => 'EH (no DH) - Groups of 3 - Strongest Overall Lineup',
				'4' => 'DH/EH - Groups of 3 - Strongest Overall Lineup'
				);

		return $retarr;
	}

	public function lim_dh_noeh() {
		$retarr = array(
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				//'5' => 'DH (No EH) - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				//'6' => 'DH (No EH) - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				//'7' => 'DH (No EH) - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				//'8' => 'DH (No EH) - Groups of 4 - Strongest Individual Groups'
				
				'5' => 'No DH/EH - Groups of 3 - Strongest Individual Groups',
				'6' => 'DH (no EH) - Groups of 3 - Strongest Individual Groups',
				'7' => 'EH (no DH) - Groups of 3 - Strongest Individual Groups',
				'8' => 'DH/EH - Groups of 3 - Strongest Individual Groups'
		);

		return $retarr;
	}

	public function lim_eh_nodh() {
		$retarr = array(
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				//'9' => 'EH (No DH) - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				//'10' => 'EH (No DH)- Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				//'11' => 'EH (No DH) - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				//'12' => 'EH (No DH) - Groups of 4 - Strongest Individual Groups'
				
				'9' => 'No DH/EH - Groups of 4 - Strongest Overall Lineup',
				'10' => 'DH (no EH) - Groups of 4 - Strongest Overall Lineup',
				'11' => 'EH (no DH) - Groups of 4 - Strongest Overall Lineup',
				'12' => 'DH/EH - Groups of 4 - Strongest Overall Lineup'
		);
		return $retarr;
	}

	public function lim_dheh() {
		$retarr = array(
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				//'13' => 'EH/DH - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				//'14' => 'EH/DH - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				//'15' => 'EH/DH - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				//'16' => 'EH/DH - Groups of 4 - Strongest Individual Groups'
				
				'13' => 'No DH/EH - Groups of 4 - Strongest Individual Groups',
				'14' => 'DH (no EH) - Groups of 4 - Strongest Individual Groups',
				'15' => 'EH (no DH) - Groups of 4 - Strongest Individual Groups',
				'16' => 'DH/EH - Groups of 4 - Strongest Individual Groups'				
		);
		return $retarr;
	}
	
	public function off_limited() {
		$retarr = array(
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				'1' => 'No DH/EH - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				'2' => 'DH (no EH) - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				'3' => 'EH (no DH) - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				'4' => 'DH/EH - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				'5' => 'No DH/EH - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				'6' => 'DH (No EH) - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				'7' => 'EH (No DH) - Groups of 3 - Strongest Individual Group',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				'8' => 'DH/EH - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				'9' => 'No DH/EH - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				'10' => 'DH (No EH)- Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				'11' => 'EH (No DH) - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				'12' => 'DH/EH - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				'13' => 'No DH/EH - Groups of 4 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				'14' => 'DH (no EH) - Groups of 4 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				'15' => 'EH (no DH) - Groups of 4 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				'16' => 'EH/DH - Groups of 4 - Strongest Individual Groups'
		);
		return $retarr;
	}	
	
	public function off_limited_eh() {
		$retarr = array(
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				'3' => 'EH (no DH) - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				'4' => 'DH/EH - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				'11' => 'EH (No DH) - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				'12' => 'DH/EH - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				//off - lim rot - DH - groups of 4 - strongest indiv groups
		);
		return $retarr;
	}
	
	public function off_limited_noeh() {
		$retarr = array(
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				'1' => 'No DH/EH - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				'2' => 'DH (no EH) - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				'9' => 'No DH/EH - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				'10' => 'DH (No EH)- Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				//off - lim rot - DH - groups of 3 - strongest indiv groups,
		);
		return $retarr;
	}

	public function free_off() {
		$retarr = array(
				//off - lim rot - DH - groups of 3 - strongest overall batting order
				'17' => 'FR - Groups of 3 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 3 - strongest indiv groups
				'18' => 'FR - Groups of 3 - Strongest Individual Groups',
				//off - lim rot - DH - groups of 4 - strongest overall batting order
				'19' => 'FR - Groups of 4 - Strongest Overall Lineup',
				//off - lim rot - DH - groups of 4 - strongest indiv groups
				'20' => 'FR - Groups of 4 - Strongest Individual Groups');
		return $retarr;
	}
	//add the defense options

	public function free_def() {
		$retarr = array(
				//def - free rot - infield priority - left side strength
				'21' => 'Free Rotation - Infield Priority - Left Side Strength',
				//def - free rot - infield priority - middle strength
				'22' => 'Free Rotation - Infield Priority - Middle Strength',
				//def - free rot - infield priority - right strength
				'23' => 'Free Rotation - Infield Priority - Right Side Strength',
				//def - free rot - outfield priority - left side strength
				'24' => 'Free Rotation - Outfield Priority - Left Side Strength',
				//def - free rot - outfield priority - middle strength
				'25' => 'Free Rotation - Outfield Priority - Middle Strength',
				//def - lim rot - outfield priority - right strength
				'26' => 'Free Rotation - Outfield Priority - Right Side Strength');
		return $retarr;
	}

	public function lim_def() {
		$retarr = array(
				//def - free rot - infield priority - left side strength
				'27' => 'Limited Rotation - Infield Priority - Left Side Strength',
				//def - free rot - infield priority - middle strength
				'28' => 'Limited Rotation - Infield Priority - Middle Strength',
				//def - free rot - infield priority - right strength
				'29' => 'Limited Rotation - Infield Priority - Right Side Strength',
				//def - free rot - outfield priority - left side strength
				'30' => 'Limited Rotation - Outfield Priority - Left Side Strength',
				//def - free rot - outfield priority - middle strength
				'31' => 'Limited Rotation - Outfield Priority - Middle Strength',
				//def - lim rot - outfield priority - right strength
				'32' => 'Limited Rotation - Outfield Priority - Right Side Strength');
		return $retarr;
	}
	
	public function fill_defense() {
		$retarr = array(
				'0' => 'Pitcher',
				'1' => 'Catcher',
				'2' => 'First Base',
				'3' => 'Second Base',
				'4' => 'Third Base',
				'5' => 'Shortstop',
				'6' => 'Left Field',
				'7' => 'Center Field',
				'8' => 'Right Field'
		);
		
		return $retarr;
	}
}