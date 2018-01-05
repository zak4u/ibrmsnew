<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_m extends CI_Model{
    // list all users
    public function list_users_m(){
        $query = $this->db->get('users');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all users END
    // add new user
    public function add_user_m(){
        $form_fields = array(
            'user_firstname' =>ucwords(strtolower(trim(stripslashes($this->input->post('user_firstname'))))),
            'user_lastname' =>ucwords(strtolower(trim(stripslashes($this->input->post('user_lastname'))))),
            'user_dob' =>trim(stripslashes($this->input->post('user_dob'))),
            'user_gender' =>$this->input->post('user_gender'),
            'user_name' =>strtolower(trim(stripslashes($this->input->post('user_name')))),
            'user_password' =>md5(strtolower(trim(stripslashes($this->input->post('user_password'))))),
            'user_role' =>$this->input->post('user_role'),
            'user_created' =>globTimeNow
        );
        $this->db->insert('users', $form_fields);
    }
    // add new user END
    // get user
    public function get_user_m($uid){
        
        $this->db->where('user_id', $uid);
        $query = $this->db->get('users');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get user ID
    // edit user
    public function edit_user_m(){
        $uid = $this->input->post('user_id');
        
        $form_fields = array(
            'user_firstname' =>ucwords(strtolower(trim(stripslashes($this->input->post('user_firstname'))))),
            'user_lastname' =>ucwords(strtolower(trim(stripslashes($this->input->post('user_lastname'))))),
            'user_dob' =>trim(stripslashes($this->input->post('user_dob'))),
            'user_gender' =>$this->input->post('user_gender'),
            'user_name' =>strtolower(trim(stripslashes($this->input->post('user_name')))),
            'user_password' =>md5(strtolower(trim(stripslashes($this->input->post('user_password'))))),
            'user_role' =>$this->input->post('user_role')
        );
        
        $this->db->where('user_id', $uid);
        $query = $this->db->update('users', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit user ID
    // delete user
    public function delete_user_m($uid){
        $this->db->where('user_id', $uid);
        $this->db->delete('users');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete user END
}