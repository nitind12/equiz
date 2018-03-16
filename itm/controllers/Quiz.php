<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model('qz_model', 'qz');
        $data['teams'] = $this->qz->fetch_teams();

        $this->load->model('score_model', 'sm');
        
        $data['r1'] = $this->sm->fetch_score(7,1);
        $data['r2'] = $this->sm->fetch_score(8,1);
        $data['r3'] = $this->sm->fetch_score(9,1);
        $data['r4'] = $this->sm->fetch_score(10,1);
        $data['r5'] = $this->sm->fetch_score(11,1);
        $data['r6'] = $this->sm->fetch_score(12,1);
        
        $data['rules_g']    = $this->qz->fetch_generalrules();;
        $data['rules_r_1']  = $this->qz->fetch_roundrules(7);
        $data['rules_r_2']  = $this->qz->fetch_roundrules(8);
        $data['rules_r_3']  = $this->qz->fetch_roundrules(9);
        $data['rules_r_4']  = $this->qz->fetch_roundrules(10);
        $data['rules_r_5']  = $this->qz->fetch_roundrules(11);
        $data['rules_r_6']  = $this->qz->fetch_roundrules(12);
        
        $this->load->view('templates/header');
        $this->load->view('qz/index', $data);
        $this->load->view('templates/footer');
    }

    function round1() {
        $data['title'] = "Break Through";

        $this->load->model('qz_model', 'qz');
        $data['teams'] = $this->qz->fetch_teams();
        $data['qa_pkg'] = $this->qz->getQuesAnsPkg(1);
        $data['tot_count'] = 24;
        $data['break_count'] = 4;

        $data['flip_'] = $this->qz->flip_ques(1);
        $data['ftot_count'] = 12;

        $data['round_'] = $this->qz->fetch_round(1); // For Round 1
        $data['jspage_'] = 'qz/round1_js';
        $data['timer'] = 15;

        $this->load->view('templates/header');
        $this->load->view('qz/round1', $data);
        $this->load->view('templates/footer');
    }

    function round2() {
        $data['title'] = "Acoustics";

        $this->load->model('qz_model', 'qz');
        $data['teams'] = $this->qz->fetch_teams();
        $data['qa_pkg'] = $this->qz->getAudioVideo(8);
        $data['tot_count'] = 12;
        $data['break_count'] = 2;
        $data['round_'] = $this->qz->fetch_round(8);
        
        $data['flip_'] = $this->qz->getAudioVideoFlip(8);
        $data['ftot_count'] = 6;
        
        $data['jspage_'] = 'qz/audio_js';
        $data['timer'] = 20;

        $this->load->view('templates/header');
        $this->load->view('qz/audio', $data);
        $this->load->view('templates/footer');
    }

    public function round3() {
        $data['title'] = "What's Your Pick";

        $this->load->model('qz_model', 'qz');
        $data['teams'] = $this->qz->fetch_teams();
        $data['qa_pkg'] = $this->qz->getQuesAnsPkg(9);
        $data['tot_count'] = 24;

        $data['flip_'] = $this->qz->flip_ques(9);
        $data['ftot_count'] = 5;

        $data['jspage_'] = 'qz/pickurchoice_js';
        $data['timer'] = 15;
        
        $this->load->view('templates/header');
        $this->load->view('qz/_r1', $data);
        $this->load->view('templates/footer');
    }

    function round4() {
        $data['title'] = "V-ZINE";
        $this->load->model('qz_model', 'qz');
        $data['teams'] = $this->qz->fetch_teams();
        $data['qa_pkg'] = $this->qz->getAudioVideo(10);
        $data['tot_count'] = 12;
        $data['break_count'] = 2;

        $data['flip_'] = $this->qz->getAudioVideoFlip(10);
        $data['ftot_count'] = 6;

        $data['round_'] = $this->qz->fetch_round(10);
        $data['jspage_'] = 'qz/video_js';
        $data['timer'] = 20;

        $this->load->view('templates/header');
        $this->load->view('qz/video', $data);
        $this->load->view('templates/footer');
    }

    function round5() {
        $data['title'] = "THE ULTIMATE EXPRESS";
        $this->load->model('qz_model', 'qz');
        $data['teams'] = $this->qz->fetch_teams();
        $data['jspage_'] = 'qz/rapidFire_js';
        $data['timer'] = 60;

        $this->load->view('templates/header');
        $this->load->view('qz/rapidFire', $data);
        $this->load->view('templates/footer');
    }
    
    function round6() {
        $data['title'] = "FASTEST FINGER FIRST";
        $this->load->model('qz_model', 'qz');
        $data['teams'] = $this->qz->fetch_teams();
        $data['qa_pkg'] = $this->qz->getQuesAnsPkg(12);
        $data['tot_count'] = 12;
        $data['break_count'] = 12;
        $data['round_'] = $this->qz->fetch_round(12);
        $data['jspage_'] = 'qz/buzzer_js';

        $data['flip_'] = $this->qz->flip_ques(12);
        $data['ftot_count'] = 2;
        $data['timer'] = 5;

        $this->load->view('templates/header');
        $this->load->view('qz/buzzer', $data);
        $this->load->view('templates/footer');
    }
}
