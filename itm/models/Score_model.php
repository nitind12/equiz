<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Score_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $GLOBALS['sess_'] = 2018; // Here session means YEAR 
    }

    function fetch_score($round_, $gm_) {
        $this->db->where('RID', $round_);
        $this->db->where('STID', $gm_);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $query = $this->db->get('team_score');
        return $query->result();
    }

    function update_score_($round_,$gm_) {
        
        //For Kosi
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 1);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data1 = array(
            'SCORE' => $this->input->post('txtKosi_r')
        );
        $this->db->update('team_score', $data1);
        // -------
        
        // For Ganga
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 2);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data2 = array(
            'SCORE' => $this->input->post('txtGanga_r'),
        );
        $this->db->update('team_score', $data2);
        // ---------
        
        
        // For Yamuna
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 3);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data3 = array(
            'SCORE' => $this->input->post('txtYamuna_r'),
        );
        $this->db->update('team_score', $data3);
        // ----------
        
        
        // For Saryu
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 4);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data4 = array(
            'SCORE' => $this->input->post('txtSaryu_r'),
        );
        $this->db->update('team_score', $data4);
        // --------
        
        // for Gargi
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 5);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data5 = array(
            'SCORE' => $this->input->post('txtGargi_r')
        );
        $this->db->update('team_score', $data5);
        // ---------
        
        
        // For Sharda
        $data6 = array(
            'SCORE' => $this->input->post('txtSharda_r'),
        );

        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 6);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $this->db->update('team_score', $data6);
        // -----------
    }
    
    function update_score_q($round_,$gm_) {
        
        //For Kosi
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 7);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data1 = array(
            'SCORE' => $this->input->post('txtKosi_r')
        );
        $this->db->update('team_score', $data1);
        
        // -------
        
        // For Ganga
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 8);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data2 = array(
            'SCORE' => $this->input->post('txtGanga_r'),
        );
        $this->db->update('team_score', $data2);
        
        // ---------
        
        
        // For Yamuna
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 9);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data3 = array(
            'SCORE' => $this->input->post('txtYamuna_r'),
        );
        $this->db->update('team_score', $data3);
        echo $this->db->last_query() . "<br />";
        // ----------
        
        
        // For Saryu
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 10);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data4 = array(
            'SCORE' => $this->input->post('txtSaryu_r'),
        );
        $this->db->update('team_score', $data4);
        
        // --------
        
        // for Gargi
        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 11);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $data5 = array(
            'SCORE' => $this->input->post('txtGargi_r')
        );
        $this->db->update('team_score', $data5);
        
        // ---------
        
        
        // For Sharda
        $data6 = array(
            'SCORE' => $this->input->post('txtSharda_r'),
        );

        $this->db->where('STID', $gm_);
        $this->db->where('RID', $round_);
        $this->db->where('TID', 12);
        $this->db->where('SESSID', $GLOBALS['sess_']);
        $this->db->update('team_score', $data6);
        
        // -----------
    }

}
