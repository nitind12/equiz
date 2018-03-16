<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itm extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    function lgn(){
        $this -> load -> view ('templates/header');
        $this -> load -> view ('login');
        $this -> load -> view ('templates/footer');
    }
    function authenticate(){
        if($this->input->post('lol') == 'admin' AND $this->input->post('pol') == 'itm123'){
            $this->session->set_userdata('ok',"itm2016");
            redirect('itm');
        } else {
            redirect('itm/lgn');
        }
    }
    function index(){
        if(!$this->session->userdata('ok')){ redirect('itm/lgn'); }

        redirect('wordpower');
    }
    function lgout(){
        $this->session->unset_userdata('ok');
        redirect('itm/lgn');
    }
    function qElimination(){
        $data['title'] = "QZ";

        $this->load->model('qz_model', 'qz');
        // $data['teams'] = $this->qz->fetch_teams();
        $data['qa_pkg'] = $this->qz->getQuesAnsEli(4);
        $data['tot_count'] = 130;
        $data['break_count'] = 5;
        
        //$data['flip_'] = $this->qz->flip_ques(7);
        //$data['ftot_count'] = 2;

        //$data['round_'] = $this->qz->fetch_round(7); 
        $data['jspage_'] = 'elimination/elimination_js';
        $data['timer'] = 15;
        
        $this -> load -> view ('templates/header');
        $this -> load -> view ('elimination/elimination', $data);
        $this -> load -> view ('templates/footer');
    }
    
    function wpElimination(){
        $data['title'] = "WP";

        $this->load->model('qz_model', 'qz');
        //$data['teams'] = $this->qz->fetch_teams();
        $data['qa_pkg'] = $this->qz->getQuesAnsEli(5);
        $data['tot_count'] = 125;
        $data['break_count'] = 5;

       $data['flip_'] = $this->qz->flip_ques(7);
       $data['ftot_count'] = 2;

        //$data['round_'] = $this->qz->fetch_round(7); 
        $data['jspage_'] = 'elimination/elimination_js';
        $data['timer'] = 10;
        
        $this -> load -> view ('templates/header');
        $this -> load -> view ('elimination/elimination', $data);
        $this -> load -> view ('templates/footer');
    }
    function feed_score_w(){
        $this->load->model('score_model', 'sm');
        
        $data['r1'] = $this->sm->fetch_score(1,2);
        $data['r2'] = $this->sm->fetch_score(2,2);
        $data['r3'] = $this->sm->fetch_score(3,2);
        $data['r4'] = $this->sm->fetch_score(4,2);
        $data['r5'] = $this->sm->fetch_score(5,2);
        $data['r6'] = $this->sm->fetch_score(6,2);
        $data['r7'] = $this->sm->fetch_score(13,2);
        
        $this->load->view('templates/header');
        $this->load->view('score/w', $data);
        $this->load->view('templates/header');
    }
    
    function feed_score_q(){
        $this->load->model('score_model', 'sm');
        
        $data['r1'] = $this->sm->fetch_score(7,1);
        $data['r2'] = $this->sm->fetch_score(8,1);
        $data['r3'] = $this->sm->fetch_score(9,1);
        $data['r4'] = $this->sm->fetch_score(10,1);
        $data['r5'] = $this->sm->fetch_score(11,1);
        $data['r6'] = $this->sm->fetch_score(12,1);
        
        $this->load->view('templates/header');
        $this->load->view('score/q', $data);
        $this->load->view('templates/header');
    }

    
    function update_score_w($round_){
        $this->load->model('score_model', 'sm');
        $this->sm->update_score_($round_,2);
        redirect('/itm/feed_score_w');
    }
    
    function update_score_q($round_){
        $this->load->model('score_model', 'sm');
        $this->sm->update_score_q($round_,1);
        redirect('/itm/feed_score_q');
    }



    function feed_score(){
        $this->load->model('score_model', 'sm');
        
        $data['r1'] = $this->sm->fetch_score(1,2);
        $data['r2'] = $this->sm->fetch_score(2,2);
        $data['r3'] = $this->sm->fetch_score(3,2);
        $data['r4'] = $this->sm->fetch_score(4,2);
        $data['r5'] = $this->sm->fetch_score(5,2);
        $data['r6'] = $this->sm->fetch_score(6,2);
        $data['r7'] = $this->sm->fetch_score(13,2);
        
        $this->load->view('templates/header');
        $this->load->view('score/w', $data);
        $this->load->view('templates/header');
    }
    function update_score($round_){
        $this->load->model('score_model', 'sm');
        $this->sm->update_score_($round_,2);
        redirect('/itm/feed_score');
    }
}