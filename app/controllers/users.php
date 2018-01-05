<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    var $data;

    function __construct() {
        parent::__construct(); // needed when adding a constructor to a controller
        //page_specific
        $this->data = array(
            'head_content' => 'layouts/page_specific/blank',
            'foot_content' => 'layouts/page_specific/blank'
        );
        // $this->data can be accessed from anywhere in the controller.
        $this->load->model('users_m', 'users_m');
    }

    public function index() {
        $data = $this->data;
        $data['main_content'] = 'user_list';
        $data['pagename'] = 'Users';
        $data['pagesubname'] = 'System Access';

        $data['lists'] = $this->users_m->list_users_m();

        $this->load->view('layouts/main', $data);
    }

    public function add() {
        $data = $this->data;
        $data['main_content'] = 'user_add';
        $data['pagename'] = 'Add New User';
        $data['pagesubname'] = 'System Access';


        $this->load->view('layouts/main', $data);
    }
    
    public function add_user() {
        $result = $this->users_m->add_user_m();
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"User successfully added!");
        }
       
        redirect('users');
    }

    public function edit($uid) {
        $data = $this->data;
        $data['main_content'] = 'user_edit';
        $data['pagename'] = 'Edit User';
        $data['pagesubname'] = 'System Access';
        
        $data['lists'] = $this->users_m->get_user_m($uid);


        $this->load->view('layouts/main', $data);
    }
    
    public function edit_user($uid) {
        $result = $this->users_m->edit_user_m();
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"User updated!");
        }
        redirect('users');
    }
    public function delete($uid) {
        $result = $this->users_m->delete_user_m($uid);
        if($result == FALSE){
             $this->session->set_flashdata('msg',"Failed!");
        }else{
             $this->session->set_flashdata('msg',"User removed!");
        }
        redirect('users');
    }

}
