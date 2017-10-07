<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Purok extends CI_Controller {

    var $data;

    function __construct() {
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
        $data['main_content'] = 'purok_profiles';
        $data['pagename'] = 'Purok Profiles';
        $data['pagesubname'] = '';

        $this->load->view('layouts/main', $data);
    }
    
    public function add() {
        $data = $this->data;
        $data['main_content'] = 'purok_add';
        $data['pagename'] = 'Add New Purok Details';
        $data['pagesubname'] = 'Purok Profile';

        $this->load->view('layouts/main', $data);
    }
    public function edit() {
        $data = $this->data;
        $data['main_content'] = 'purok_edit';
        $data['pagename'] = 'Edit Purok Details';
        $data['pagesubname'] = 'Purok Profile';

        $this->load->view('layouts/main', $data);
    }

}
