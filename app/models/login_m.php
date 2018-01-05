<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_m extends CI_Model{
    public function check_login_m(){
        $username = $this->input->post('login_name');
        $password = md5($this->input->post('login_password'));
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_name', $username);
        $this->db->where('user_password', $password);
        $query = $this->db->get();
        
        if($query->num_rows() > 0){
            
            $row = $query->row();            
            
            $sess_data = array(
                'is_logged_in' => '1',
                'user_id' => $row->user_id,
                'user_firstname' => $row->user_firstname,
                'user_lastname' => $row->user_lastname,
                'user_dob' => $row->user_dob,
                'user_gender' => $row->user_gender,
                'user_name' => $row->user_name,
                'user_role' => $row->user_role,
                'user_created' => $row->user_created
            );
            
            $this->session->set_userdata('logged_in',$sess_data);
            
            redirect('dashboard');
        }else{
            $_SESSION['msg']='<br/>Username or password incorrect.';
            redirect('login');
        }
        
       
    }
}