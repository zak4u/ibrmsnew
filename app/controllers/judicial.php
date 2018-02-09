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
        $this->load->model('kp07_m', 'kp07_m');
    }

    public function index() {
        $data = $this->data;
        $data['main_content'] = 'judicial_list';
        $data['pagename'] = 'Judicial Cases';
        $data['pagesubname'] = 'List of Barangay Judicial Cases';

        $data['lists'] = $this->kp07_m->list_kp07_status_m('On-going');
//        foreach ($data['lists'] as $list) {
//            $casenum = $list->kp07_casenumber;
//        }
//
//        $data['listsinvolved'] = $this->kp07_m->list_kp07_involved_case_m($casenum);

        $this->load->view('layouts/main', $data);
    }

//////////////// KP 07
    public function kp07_view($casenum) {
        $data = $this->data;
        $data['main_content'] = 'judicial_view_case';
        $data['pagename'] = 'Judicial Case';
        $data['pagesubname'] = 'Resident Case Overview';

        $data['kp07s'] = $this->kp07_m->get_kp07_m($casenum);
        $data['listscaseinvolved'] = $this->kp07_m->list_kp07_involved_case_m($casenum);

        $this->load->view('layouts/main', $data);
    }

    public function kp07_add() {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp07_add';
        $data['pagename'] = 'Judicial Case';
        $data['pagesubname'] = 'KP 07 - Complaint Form';

        $this->load->view('layouts/main', $data);
    }

    public function add_kp07() {
        $result = $this->kp07_m->add_kp07_m();

        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Case successfully added!");
        }

        redirect('judicial');
    }

    public function kp07_edit($casenum) {
        $data = $this->data;
        $data['main_content'] = 'judicial_kp07_edit';
        $data['pagename'] = 'Edit Case';
        $data['pagesubname'] = 'KP 07 - Complaint Form';
        
        $data['listscase'] = $this->kp07_m->get_kp07_m($casenum);
        $data['listscaseC'] = $this->kp07_m->list_kp07_involved_case_restype_m($casenum,'Complainant');
        $data['listscaseR'] = $this->kp07_m->list_kp07_involved_case_restype_m($casenum,'Respondent');

        $this->load->view('layouts/main', $data);
    }
    
    public function edit_kp07($casenum) {
        $result = $this->kp07_m->edit_kp07_m();
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Purok updated!");
        }
        redirect('judicial/kp07_view/'.$casenum);
    }

    public function kp07_delete($casenum) {
        $result = $this->kp07_m->delete_kp07_m($casenum);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Purok removed!");
        }
        redirect('judicial');
    }

    //////////////// KP 07 END

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
