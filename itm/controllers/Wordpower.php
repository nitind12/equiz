<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wordpower extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Wp_model', 'wm');
    }

    public function index() { // About Word Power
        $this->load->view('templates/header');
        $this->load->view('wp/round0/welcome');
        $this->load->view('templates/footer');
    }

    public function teams() { // Intro to Teams
        $this->load->model('wp_model', 'wm');
        $data['teams'] = $this->wm->fetch_teams();

        $this->load->view('templates/header');
        $this->load->view('wp/round0/team', $data);
        $this->load->view('templates/footer');
    }

    public function dashboard() { // Intro to Teams
        $this->load->model('wp_model', 'wm');
        $data['grules'] = $this->wm->fetch_generalrules();

        $data['jspage_'] = 'wp/round0/dashboard_js';

        $this->load->model('score_model', 'sm');
        
        $data['r1'] = $this->sm->fetch_score(1,2);
        $data['r2'] = $this->sm->fetch_score(2,2);
        $data['r3'] = $this->sm->fetch_score(3,2);
        $data['r4'] = $this->sm->fetch_score(4,2);
        $data['r5'] = $this->sm->fetch_score(5,2);
        $data['r6'] = $this->sm->fetch_score(6,2);
        $data['r7'] = $this->sm->fetch_score(13,2);
        
        $this->load->view('templates/header');
        $this->load->view('wp/round0/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function crossword() {
        $data['title'] = "Crossword Puzzle";
        $data['qa_pkg'] = $this->wm->getQuesAnsPkg(1);
        $data['rules_round'] = $this->wm->fetch_roundrules(1);
        $data['teams'] = $this->wm->fetch_teams();

        $data['crw_1'] = $this->wm->fetch_crossword(1);
        $data['crw_2'] = $this->wm->fetch_crossword(2);
        $data['crw_3'] = $this->wm->fetch_crossword(3);
        $data['crw_4'] = $this->wm->fetch_crossword(4);
        $data['crw_5'] = $this->wm->fetch_crossword(5);
        $data['crw_6'] = $this->wm->fetch_crossword(6);
        $data['hints'] = $this->wm->fetch_crossword_hints();

        $data['tot_count'] = 12;
        $data['jspage_'] = 'wp/rounds/crossword_js';
        $data['timer'] = 45;

        $this->load->view('templates/header');
        $this->load->view('wp/rounds/crossword', $data);
        $this->load->view('templates/footer');
    }

    public function grammer_genius(){
        $data['title'] = "Grammar Genius";
        $data['qa_pkg'] = $this->wm->getQuesAnsPkg(2);
        $data['rules_round'] = $this->wm->fetch_roundrules(2);
        $data['tot_count'] = 12;
        $data['break_count'] = 2;
        $data['flip_'] = $this->wm->flip_ques(2);
        $data['ftot_count'] = 2;

        $data['jspage_'] = 'wp/rounds/grammer_genius_js';
        $data['timer'] = 10;

        $this->load->view('templates/header');
        $this->load->view('wp/rounds/grammer_genius', $data);
        $this->load->view('templates/footer');
    }
    
    public function rumbleNjumble() {
        $data['title'] = "Rumble 'n' Jumble";
        $data['qa_pkg'] = $this->wm->getQuesAnsPkg(3);
        $data['rules_round'] = $this->wm->fetch_roundrules(3);
        $data['tot_count'] = 12;
        $data['break_count'] = 2;
        $data['flip_'] = $this->wm->flip_ques(3);
        $data['ftot_count'] = 2;

        $data['jspage_'] = 'wp/rounds/rumblenjumble_js';
        $data['timer'] = 15;
        $this->load->view('templates/header');
        $this->load->view('wp/rounds/rumbleNjumble', $data);
        $this->load->view('templates/footer');
    }

    function fastestFingerFirst() {
        $data['title'] = "Fastest Finger First";
        $this->load->model('wp_model', 'wm');
        $data['teams'] = $this->wm->fetch_teams();
        $data['qa_pkg'] = $this->wm->getQuesAnsPkg(4);
        $data['rules_round'] = $this->wm->fetch_roundrules(4);
        $data['tot_count'] = 6;
        $data['break_count'] = 6;
        $data['timer'] = 20;
        $data['jspage_'] = 'wp/rounds/fast_finger_js';

        $this->load->view('templates/header');
        $this->load->view('wp/rounds/fast_finger', $data);
        $this->load->view('templates/footer');
    }

    function hangman() {
        $data['title'] = "Hang-Man";
        $data['qa_pkg'] = $this->wm->getQuesAnsPkg_hangman(2);
        $data['rules_round'] = $this->wm->fetch_roundrules(2);
        $data['tot_count'] = 12;
        $data['break_count'] = 2;
        $data['flip_'] = $this->wm->flip_ques_hangman(5);
        $data['ftot_count'] = 2;

        $data['jspage_'] = 'wp/rounds/hangman_js';
        $data['timer'] = 15;
        $this->load->view('templates/header');
        $this->load->view('wp/rounds/hangman', $data);
        $this->load->view('templates/footer');
    }

    public function wheeloffortune() { //older version of this round was trivia
        $data['title'] = "Wheel of Fortune";
        $data['teams'] = $this->wm->fetch_teams();

        $data['qa_pkg'] = $this->wm->getQuesAnsPkg(3);
        $data['rules_round'] = $this->wm->fetch_roundrules(3);
        $data['tot_count'] = 12;

        $data['flip_'] = $this->wm->flip_ques(3);

        $data['ftot_count'] = 1;

        $data['jspage_'] = 'wp/rounds/pickurchoice_js';
        $data['timer'] = 15;

        $this->load->view('templates/header');
        $this->load->view('wp/rounds/_r1', $data);
        $this->load->view('templates/footer');
    }

    function buzz() {
        $data['title'] = "Buzzer";
        $this->load->model('wp_model', 'wm');
        $data['teams'] = $this->wm->fetch_teams();
        $data['qa_pkg'] = $this->wm->getQuesAnsPkg_buzz(13);
        $data['rules_round'] = $this->wm->fetch_roundrules(13);
        $data['tot_count'] = 20;
        $data['break_count'] = 20;
        $data['timer'] = 10;
        $data['jspage_'] = 'wp/rounds/buzz_js';

        $this->load->view('templates/header');
        $this->load->view('wp/rounds/buzz', $data);
        $this->load->view('templates/footer');
    }

}
