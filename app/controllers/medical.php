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
        $this->load->model('resident_m', 'resident_m');
        $this->load->model('medical_itr_m', 'medical_itr_m');
    }

    public function index() {
        $data = $this->data;
        $data['main_content'] = 'medical_list';
        $data['pagename'] = 'Medical Cases';
        $data['pagesubname'] = 'Overview';

        $data['lists'] = $this->medical_itr_m->list_itr_m();

        foreach ($data['lists'] as $list) {
            $resid = $list->res_id;
        }

        $data['listsres'] = $this->resident_m->get_resident_m($resid);

        $this->load->view('layouts/main', $data);
    }

    public function medical_resident_cases($rid) {
        $data = $this->data;
        $data['main_content'] = 'medical_resident_cases';
        $data['pagename'] = 'Medical Cases';
        $data['pagesubname'] = 'Resident Case Overview';

        $data['lists'] = $this->resident_m->get_resident_m($rid);
        $data['lists_itr'] = $this->medical_itr_m->get_res_itr_case($rid);

        $this->load->view('layouts/main', $data);
    }

    public function itr_add($rid) {
        $data = $this->data;
        $data['main_content'] = 'medical_itr_add';
        $data['pagename'] = 'Individual Treatment Record';
        $data['pagesubname'] = 'Add New Record';
        $data['resid'] = $rid;

        $this->load->view('layouts/main', $data);
    }

    public function add_itr($rid) {
        $result = $this->medical_itr_m->add_itr_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "ITR successfully added!");
        }

        redirect('medical/medical_resident_cases/'.$rid);
    }

    public function itr_edit($cid) {
        $data = $this->data;
        $data['main_content'] = 'medical_itr_edit';
        $data['pagename'] = 'Individual Treatment Record';
        $data['pagesubname'] = 'Edit Record';
        
        $data['lists'] = $this->medical_itr_m->get_itr_case($cid);

        $this->load->view('layouts/main', $data);
    }
     public function edit_itr($rid) {
        $result = $this->medical_itr_m->edit_itr_m();
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Purok updated!");
        }
        redirect('medical/medical_resident_cases/'.$rid);
    }
    
    
    public function delete_itr($cid) {
        $result = $this->medical_itr_m->delete_itr_m($cid);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Purok removed!");
        }
        redirect('medical');
    }

    public function itr_print() {
        $data = $this->data;
        $data['main_content'] = 'medical_itr_print';
        $data['pagename'] = 'Individual Treatment Record';
        $data['pagesubname'] = 'Print Record';

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
