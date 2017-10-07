<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Medical extends CI_Controller {

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
        $data['main_content'] = 'medical';
        $data['pagename'] = 'Medical Cases';
        $data['pagesubname'] = 'Overview';



        $this->load->view('layouts/main', $data);
    }

    public function medical_reports() {
        $data = $this->data;
        $data['main_content'] = 'medical_reports';
        $data['pagename'] = 'Medical Reports';
        $data['pagesubname'] = '';



        $this->load->view('layouts/main', $data);
    }

}
