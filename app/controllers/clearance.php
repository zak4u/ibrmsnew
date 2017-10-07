<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clearance extends CI_Controller {

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

    public function clearance_resident() {
        $data = $this->data;
        $data['main_content'] = 'clearance_resident_list';
        $data['pagename'] = 'Resident Clearance';
        $data['pagesubname'] = 'Barangay Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_resident_issue() {
        $data = $this->data;
        $data['main_content'] = 'clearance_resident_issue';
        $data['pagename'] = 'Issue Clearance';
        $data['pagesubname'] = 'Resident Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_resident_edit() {
        $data = $this->data;
        $data['main_content'] = 'clearance_resident_edit';
        $data['pagename'] = 'Edit Clearance';
        $data['pagesubname'] = 'Resident Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_resident_print() {
        $data = $this->data;
        $data['main_content'] = 'clearance_resident_print';
        $data['pagename'] = 'Print Clearance';
        $data['pagesubname'] = 'Resident Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_business() {
        $data = $this->data;
        $data['main_content'] = 'clearance_business_list';
        $data['pagename'] = 'Business Clearance';
        $data['pagesubname'] = 'Barangay Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_business_issue() {
        $data = $this->data;
        $data['main_content'] = 'clearance_business_issue';
        $data['pagename'] = 'Issue Clearance';
        $data['pagesubname'] = 'Business Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_business_edit() {
        $data = $this->data;
        $data['main_content'] = 'clearance_business_edit';
        $data['pagename'] = 'Edit Clearance';
        $data['pagesubname'] = 'Business Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_business_print() {
        $data = $this->data;
        $data['main_content'] = 'clearance_business_print';
        $data['pagename'] = 'Print Clearance';
        $data['pagesubname'] = 'Business Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_reports() {
        $data = $this->data;
        $data['main_content'] = 'clearance_reports';
        $data['pagename'] = 'Clearance Reports';
        $data['pagesubname'] = 'Resident/Business Clearance Resquests Reports';



        $this->load->view('layouts/main', $data);
    }

}
