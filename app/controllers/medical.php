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
        $this->load->model('medical_pedia_m', 'medical_pedia_m');
        $this->load->model('medical_adult_m', 'medical_adult_m');
        $this->load->model('medical_prenatal_m', 'medical_prenatal_m');
        $this->load->model('medical_referral_m', 'medical_referral_m');
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
        $data['lists_pedia'] = $this->medical_pedia_m->get_res_pedia_case($rid);
        $data['lists_adult'] = $this->medical_adult_m->get_res_adult_case($rid);
        $data['lists_prenatal'] = $this->medical_prenatal_m->get_res_prenatal_case($rid);
        $data['lists_referral'] = $this->medical_referral_m->get_res_referral_case($rid);

        $this->load->view('layouts/main', $data);
    }
    
    
    ////// ITR

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
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Record updated!");
        }
        redirect('medical/medical_resident_cases/' . $rid);
    }

    public function itr_delete($cid) {
        $rid = $this->uri->segment(4, 0);
        $result = $this->medical_itr_m->delete_itr_m($cid);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Record removed!");
        }
        redirect('medical/medical_resident_cases/'.$rid);
    }

    public function itr_print() {
        $data = $this->data;
        $data['main_content'] = 'medical_itr_print';
        $data['pagename'] = 'Individual Treatment Record';
        $data['pagesubname'] = 'Print Record';

        $this->load->view('layouts/main', $data);
    }
    
    //// ITR END
    //// PEDIA
    public function pedia_add($rid) {
        $data = $this->data;
        $data['main_content'] = 'medical_pedia_add';
        $data['pagename'] = 'Pedia Form';
        $data['pagesubname'] = 'Add New Record';
        $data['resid'] = $rid;

        $this->load->view('layouts/main', $data);
    }
    public function add_pedia($rid) {
        $result = $this->medical_pedia_m->add_pedia_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "ITR successfully added!");
        }

        redirect('medical/medical_resident_cases/'.$rid);
    }
    public function pedia_edit($cid) {
        $data = $this->data;
        $data['main_content'] = 'medical_pedia_edit';
        $data['pagename'] = 'Pedia Form';
        $data['pagesubname'] = 'Edit Record';
        
        $data['lists'] = $this->medical_pedia_m->get_pedia_case($cid);
        

        $this->load->view('layouts/main', $data);
    }
    
    public function edit_pedia($rid) {
        $result = $this->medical_pedia_m->edit_pedia_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Record updated!");
        }
        redirect('medical/medical_resident_cases/' . $rid);
    }
    
    public function pedia_delete($cid) {
        $rid = $this->uri->segment(4, 0);
        $result = $this->medical_pedia_m->delete_pedia_m($cid);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Record removed!");
        }
        redirect('medical/medical_resident_cases/'.$rid);
    }
    
    //// PEDIA END
    
    //// ADULT
    public function adult_add($rid) {
        $data = $this->data;
        $data['main_content'] = 'medical_adult_add';
        $data['pagename'] = 'Adult Form';
        $data['pagesubname'] = 'Add New Record';
        $data['resid'] = $rid;

        $this->load->view('layouts/main', $data);
    }
    public function add_adult($rid) {
        $result = $this->medical_adult_m->add_adult_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "ITR successfully added!");
        }

        redirect('medical/medical_resident_cases/'.$rid);
    }
    public function adult_edit($cid) {
        $data = $this->data;
        $data['main_content'] = 'medical_adult_edit';
        $data['pagename'] = 'Adult Form';
        $data['pagesubname'] = 'Edit Record';
        
        $data['lists'] = $this->medical_adult_m->get_adult_case($cid);

        $this->load->view('layouts/main', $data);
    }
    public function edit_adult($rid) {
        $result = $this->medical_adult_m->edit_adult_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Record updated!");
        }
        redirect('medical/medical_resident_cases/' . $rid);
    }
    public function adult_delete($cid) {
        $rid = $this->uri->segment(4, 0);
        $result = $this->medical_adult_m->delete_adult_m($cid);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Record removed!");
        }
        redirect('medical/medical_resident_cases/'.$rid);
    }
    //// ADULT END
    
    //// PRENATAL 
    public function prenatal_add($rid) {
        $data = $this->data;
        $data['main_content'] = 'medical_prenatal_add';
        $data['pagename'] = 'Prenatal Form';
        $data['pagesubname'] = 'Add New Record';
        $data['resid'] = $rid;

        $this->load->view('layouts/main', $data);
    }
    public function add_prenatal($rid) {
        $result = $this->medical_prenatal_m->add_prenatal_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Record successfully added!");
        }

        redirect('medical/medical_resident_cases/'.$rid);
    }
    public function prenatal_edit($cid) {
        $data = $this->data;
        $data['main_content'] = 'medical_prenatal_edit';
        $data['pagename'] = 'Prenatal Form';
        $data['pagesubname'] = 'Edit Record';
        
        $data['lists'] = $this->medical_prenatal_m->get_prenatal_case($cid);

        $this->load->view('layouts/main', $data);
    }
    public function edit_prenatal($rid) {
        $result = $this->medical_prenatal_m->edit_prenatal_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Record updated!");
        }
        redirect('medical/medical_resident_cases/' . $rid);
    }
    public function prenatal_delete($cid) {
        $rid = $this->uri->segment(4, 0);
        $result = $this->medical_prenatal_m->delete_prenatal_m($cid);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Record removed!");
        }
        redirect('medical/medical_resident_cases/'.$rid);
    }
    //// PRENATAL END
    
    //// REFERRAL 
    public function referral_add($rid) {
        $data = $this->data;
        $data['main_content'] = 'medical_referral_add';
        $data['pagename'] = 'Referral Form';
        $data['pagesubname'] = 'Add New Record';
        $data['resid'] = $rid;

        $this->load->view('layouts/main', $data);
    }
    public function add_referral($rid) {
        $result = $this->medical_referral_m->add_referral_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Record successfully added!");
        }

        redirect('medical/medical_resident_cases/'.$rid);
    }
    public function referral_edit($cid) {
        $data = $this->data;
        $data['main_content'] = 'medical_referral_edit';
        $data['pagename'] = 'Referral Form';
        $data['pagesubname'] = 'Edit Record';
        
        $data['lists'] = $this->medical_referral_m->get_referral_case($cid);

        $this->load->view('layouts/main', $data);
    }
    public function edit_referral($rid) {
        $result = $this->medical_referral_m->edit_referral_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Record updated!");
        }
        redirect('medical/medical_resident_cases/' . $rid);
    }
    public function referral_delete($cid) {
        $rid = $this->uri->segment(4, 0);
        $result = $this->medical_referral_m->delete_referral_m($cid);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Record removed!");
        }
        redirect('medical/medical_resident_cases/'.$rid);
    }
    //// REFERRAL END
    

    public function medical_reports() {
        $data = $this->data;
        $data['main_content'] = 'medical_reports';
        $data['pagename'] = 'Medical Reports';
        $data['pagesubname'] = '';



        $this->load->view('layouts/main', $data);
    }

}
