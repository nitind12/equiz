<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wp_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $GLOBALS['game_'] = 2; // 1 for Quiz and 2 for Word Power
        $GLOBALS['sess_'] = 2018; // Here session means YEAR 
    }

    function fetch_teams() {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->where('STID', $gm_);
        $this->db->where('SESSID', $sess_);
        $query = $this->db->get('teams');
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }

    function fetch_generalrules() {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->where('STID', $gm_);
        $this->db->where('SESSID', $sess_);
        $query = $this->db->get('rules_general');

        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }

    function navigate_wordpower() {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->where('STID', $gm_);
        $this->db->where('SESSID', $sess_);
        $query = $this->db->get('rounds');

        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }

    function getQuesAnsPkg($round_) {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->select('q_a.*, teams.NAME_ as TeamName, teams.COLLEGE, teams.CITY');
        $this->db->from('q_a');
        $this->db->join('teams', 'teams.TID = q_a.TID');
        $this->db->where('q_a.STID', $gm_);
        $this->db->where('q_a.SESSID', $sess_);
        $this->db->where('q_a.RID', $round_);
        $this->db->where('q_a.QSTID', 1);
        $this->db->order_by("q_a.QID", "asc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
    
    function getQuesAnsPkg_buzz($round_) {
        $gm_ = 3;
        $sess_ = $GLOBALS['sess_'];

        $this->db->select('q_a.*, teams.NAME_ as TeamName, teams.COLLEGE, teams.CITY');
        $this->db->from('q_a');
        $this->db->join('teams', 'teams.TID = q_a.TID');
        $this->db->where('q_a.STID', $gm_);
        $this->db->where('q_a.SESSID', $sess_);
        $this->db->where('q_a.RID', $round_);
        $this->db->order_by("q_a.QID", "asc");
        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
    
    function getQuesAnsPkg_hangman($round_) {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->select('hangman.*, teams.NAME_ as TeamName, teams.COLLEGE, teams.CITY');
        $this->db->from('hangman');
        $this->db->join('teams', 'teams.TID = hangman.TID');
        $this->db->where('hangman.STID', $gm_);
        $this->db->where('hangman.SESSID', $sess_);
        $this->db->where('hangman.RID', $round_);
        //$this->db->where('hangman.QSTID', 1);
        $this->db->order_by("hangman.HNGID", "asc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
    function fetch_round($num_){
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];
        $this->db->where('SESSID', $sess_);
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $num_);
        $query = $this->db->get('rounds');
        //echo $this->db->last_query();
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
    function fetch_roundrules($round_) {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->where('RID', $round_);
        $this->db->where('STID', $gm_);
        $this->db->where('SESSID', $sess_);
        $query = $this->db->get('rules_round');

        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
    function fetch_crossword($num_){
        if($num_ == 1) $tbl_ = 'crossword_1';
        else if($num_ == 2) $tbl_ = 'crossword_2';
        else if($num_ == 3) $tbl_ = 'crossword_3';
        else if($num_ == 4) $tbl_ = 'crossword_4';
        else if($num_ == 5) $tbl_ = 'crossword_5';
        else if($num_ == 6) $tbl_ = 'crossword_6';
        $query = $this->db->get($tbl_);
        
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
    function fetch_crossword_hints(){
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];
        
        $this->db->where('SESSID', $sess_);
        $this->db->where('STID', $gm_);
        
        $query = $this->db->get('crossword_q_a');

        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
    function flip_ques($round_){
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];
        
        $this->db->select('q_a.*, teams.NAME_ as TeamName, teams.COLLEGE, teams.CITY');
        $this->db->from('q_a');
        $this->db->join('teams', 'teams.TID = q_a.TID');
        $this->db->where('q_a.STID', $gm_);
        $this->db->where('q_a.SESSID', $sess_);
        $this->db->where('q_a.RID', $round_);
        $this->db->where('q_a.QSTID', 2);
        $this->db->order_by("q_a.QID", "asc");
        $query = $this->db->get();
        
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
    function flip_ques_hangman($round_){
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->select('hangman.*, teams.NAME_ as TeamName, teams.COLLEGE, teams.CITY');
        $this->db->from('hangman');
        $this->db->join('teams', 'teams.TID = hangman.TID');
        $this->db->where('hangman.STID', $gm_);
        $this->db->where('hangman.SESSID', $sess_);
        $this->db->where('hangman.RID', $round_);
        $this->db->where('hangman.QSTID', 2);
        $this->db->order_by("hangman.HNGID", "asc");
        $query = $this->db->get();
        
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }
}
