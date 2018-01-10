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
        $this->load->model('purok_m', 'purok_m');
    }

    public function index() {
        $data = $this->data;
        $data['main_content'] = 'purok_list';
        $data['pagename'] = 'Purok Profiles';
        $data['pagesubname'] = '';

        $data['lists'] = $this->purok_m->list_purok_m();

        $this->load->view('layouts/main', $data);
    }

    public function add() {
        $data = $this->data;
        $data['main_content'] = 'purok_add';
        $data['pagename'] = 'Add New Purok Details';
        $data['pagesubname'] = 'Purok Profile';

        $this->load->view('layouts/main', $data);
    }
    
    public function add_purok() {
        $result = $this->purok_m->add_purok_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Purok successfully added!");
        }

        redirect('purok');
    }

    public function edit($pid) {
        $data = $this->data;
        $data['main_content'] = 'purok_edit';
        $data['pagename'] = 'Edit Purok Details';
        $data['pagesubname'] = 'Purok Profile';
        
        $data['lists'] = $this->purok_m->get_purok_m($pid);

        $this->load->view('layouts/main', $data);
    }
    public function edit_purok($pid) {
        $result = $this->purok_m->edit_purok_m();
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Purok updated!");
        }
        redirect('purok');
    }
    
    public function delete($pid) {
        $result = $this->purok_m->delete_purok_m($pid);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"Purok removed!");
        }
        redirect('purok');
    }
    

}
