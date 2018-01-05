<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Brgy extends CI_Controller {
    
    var $data;
    
    function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
        
        //page_specific
        $this->data = array(
            'head_content' => 'layouts/page_specific/blank',
            'foot_content' => 'layouts/page_specific/blank'
        );
        // $this->data can be accessed from anywhere in the controller.
        
        $this->load->model('brgy_m', 'brgy_m');
    } 

    public function index() {
        $data = $this->data;
        $data['main_content'] = 'brgy_profile';
        $data['pagename'] = 'Barangay Profile';
        $data['pagesubname'] = '';
        
        $data['lists'] = $this->brgy_m->get_brgy_m();

        $this->load->view('layouts/main', $data);
    }
    
    public function edit_brgy() {        
        $this->brgy_m->edit_brgy_m();
        $this->session->set_flashdata('msg',"Barangay Profile updated!");
        redirect('brgy');
    }

}
