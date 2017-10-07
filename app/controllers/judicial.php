<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Judicial extends CI_Controller {

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
        $data['main_content'] = 'judicial_list';
        $data['pagename'] = 'Judicial Cases';
        $data['pagesubname'] = 'List of Barangay Judicial Cases';



        $this->load->view('layouts/main', $data);
    }
    public function add() {
        $data = $this->data;
        $data['main_content'] = 'judicial_add';
        $data['pagename'] = 'Judicial Case';
        $data['pagesubname'] = 'KP 07 - Complaint Form';



        $this->load->view('layouts/main', $data);
    }
    public function edit() {
        $data = $this->data;
        $data['main_content'] = 'judicial_edit';
        $data['pagename'] = 'Edit Case';
        $data['pagesubname'] = 'KP 07 - Complaint Form';



        $this->load->view('layouts/main', $data);
    }

    public function judicial_resident_cases() {
        $data = $this->data;
        $data['main_content'] = 'judicial_resident_cases';
        $data['pagename'] = 'Resident Judicial Cases';
        $data['pagesubname'] = 'Resident Case Overview';



        $this->load->view('layouts/main', $data);
    }

    public function kp07add() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp07add';
        $data['pagename'] = 'Add Form';
        $data['pagesubname'] = 'KP Form No. 07 - Complaint';



        $this->load->view('layouts/main', $data);
    }

    public function kp07edit() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp07edit';
        $data['pagename'] = 'Edit Form';
        $data['pagesubname'] = 'KP Form No. 07 - Complaint';



        $this->load->view('layouts/main', $data);
    }
    public function kp07print() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp07print';
        $data['pagename'] = 'Print Form';
        $data['pagesubname'] = 'KP Form No. 07 - Complaint';



        $this->load->view('layouts/main', $data);
    }

    public function kp08add() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp08add';
        $data['pagename'] = 'Add Form';
        $data['pagesubname'] = 'KP Form No. 08 - Notice of Hearing';



        $this->load->view('layouts/main', $data);
    }

    public function kp08edit() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp08edit';
        $data['pagename'] = 'Edit Form';
        $data['pagesubname'] = 'KP Form No. 08 - Notice of Hearing';



        $this->load->view('layouts/main', $data);
    }
    public function kp08print() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp08print';
        $data['pagename'] = 'Print Form';
        $data['pagesubname'] = 'KP Form No. 08 - Notice of Hearing';



        $this->load->view('layouts/main', $data);
    }

    public function kp09add() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp09add';
        $data['pagename'] = 'Add Form';
        $data['pagesubname'] = 'KP Form No. 09 - Summons';



        $this->load->view('layouts/main', $data);
    }

    public function kp09edit() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp09edit';
        $data['pagename'] = 'Edit Form';
        $data['pagesubname'] = 'KP Form No. 09 - Summons';



        $this->load->view('layouts/main', $data);
    }
    public function kp09print() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp09print';
        $data['pagename'] = 'Print Form';
        $data['pagesubname'] = 'KP Form No. 09 - Summons';



        $this->load->view('layouts/main', $data);
    }

    public function judicial_reports() {
        $data = $this->data;
        $data['main_content'] = 'judicial_reports';
        $data['pagename'] = 'Judicial Reports';
        $data['pagesubname'] = '';



        $this->load->view('layouts/main', $data);
    }

}
