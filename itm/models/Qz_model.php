<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Qz_model extends CI_Model {

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
    
    function getQuesAnsEli($team_) {
        $gm_ = $team_;
        $sess_ = $GLOBALS['sess_'];

        $this->db->select('q_a_elimination.*, teamse.NAME_ as TeamName, teamse.COLLEGE, teamse.CITY');
        $this->db->from('q_a_elimination');
        $this->db->join('teamse', 'teamse.TID = q_a_elimination.TID');
        $this->db->where('q_a_elimination.STID', $gm_);
        $this->db->where('q_a_elimination.SESSID', $sess_);
        $this->db->where('q_a_elimination.QSTID', 1);
        $this->db->order_by("q_a_elimination.QID", "asc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }

    function getAudioVideo($round_) {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->select('audiovideo.*, teams.NAME_ as TeamName, teams.COLLEGE, teams.CITY');
        $this->db->from('audiovideo');
        $this->db->join('teams', 'teams.TID = audiovideo.TID');
        $this->db->where('audiovideo.STID', $gm_);
        $this->db->where('audiovideo.QSTID', 1);
        $this->db->where('audiovideo.SESSID', $sess_);
        $this->db->where('audiovideo.RID', $round_);
        $this->db->order_by("audiovideo.QID", "asc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }

    function getAudioVideoFlip($round_) {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];

        $this->db->select('audiovideo.*, teams.NAME_ as TeamName, teams.COLLEGE, teams.CITY');
        $this->db->from('audiovideo');
        $this->db->join('teams', 'teams.TID = audiovideo.TID');
        $this->db->where('audiovideo.STID', $gm_);
        $this->db->where('audiovideo.QSTID', 2);
        $this->db->where('audiovideo.SESSID', $sess_);
        $this->db->where('audiovideo.RID', $round_);
        $this->db->order_by("audiovideo.QID", "asc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->result());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }

    function fetch_round($num_) {
        $gm_ = $GLOBALS['game_'];
        $sess_ = $GLOBALS['sess_'];
        $this->db->where('SESSID', $sess_);
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $num_);
        $query = $this->db->get('rounds');

        if ($query->num_rows() != 0) {
            $data = array('res_' => TRUE, 'data_' => $query->row());
        } else {
            $data = array('res_' => FALSE, 'data_' => 0);
        }
        return $data;
    }

    function flip_ques($round_) {
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

}
