<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {
    
    var $data;
    
    function __construct(){
        parent::__construct(); // needed when adding a constructor to a controller
        
        //page_specific
        $this->data = array(
            'head_content' => 'layouts/page_specific/blank',
            'foot_content' => 'layouts/page_specific/blank'
        );
        // $this->data can be accessed from anywhere in the controller.
    } 

    public function index() {
        $data = $this->data;
        $data['main_content'] = 'sitio_profiles';
        $data['pagename'] = 'Sito Profiles';
        $data['pagesubname'] = '';

        $this->load->view('layouts/main', $data);
    }

}
