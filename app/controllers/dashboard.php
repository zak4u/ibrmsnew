<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    var $data;

    function __construct() {
        parent::__construct(); // needed when adding a constructor to a controller
        //page_specific
        $this->data = array(
            'head_content' => 'layouts/page_specific/blank',
            'foot_content' => 'layouts/page_specific/dashboard_foot'
        );
        // $this->data can be accessed from anywhere in the controller.
        $this->load->model('dashboard_m', 'dashboard_m');
    }

    public function index() {
        $data = $this->data;
        $data['main_content'] = 'dashboard';
        $data['pagename'] = 'Dashboard';
        $data['pagesubname'] = 'System Overview';

        $data['count_res'] = $this->dashboard_m->count_data('resident','res_id!=0');
        $data['count_jcases'] = $this->dashboard_m->count_data('kp07','kp07_status="On-going"');
        
        
        $this->load->view('layouts/main', $data);
    }
	
	public function not_found() {
        $data = $this->data;
        $data['main_content'] = 'not_found';
        $data['pagename'] = 'Page Not Found';
        $data['pagesubname'] = '404 Error';


        $this->load->view('layouts/main', $data);
    }

}
