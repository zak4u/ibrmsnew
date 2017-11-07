<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Disaster extends CI_Controller {

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
        $data['main_content'] = 'disaster';
        $data['pagename'] = 'Disaster Cases';
        $data['pagesubname'] = 'Overview';



        $this->load->view('layouts/main', $data);
    }
    
    public function add() {
        $data = $this->data;
        $data['main_content'] = 'disaster_add';
        $data['pagename'] = 'Add Case';
        $data['pagesubname'] = 'Disaster Case';



        $this->load->view('layouts/main', $data);
    }
    
    public function edit() {
        $data = $this->data;
        $data['main_content'] = 'disaster_edit';
        $data['pagename'] = 'Edit Case';
        $data['pagesubname'] = 'Disaster Case';



        $this->load->view('layouts/main', $data);
    }
    
    public function print_case() {
        $data = $this->data;
        $data['main_content'] = 'disaster_print';
        $data['pagename'] = 'Print Case';
        $data['pagesubname'] = 'Disaster Case';



        $this->load->view('layouts/main', $data);
    }

    public function disaster_reports() {
        $data = $this->data;
        $data['main_content'] = 'disaster_reports';
        $data['pagename'] = 'Disaster Reports';
        $data['pagesubname'] = '';


        $this->load->view('layouts/main', $data);
    }

}
