<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function index()	{
        
        $data['main_content'] = 'user_list';
		$data['pagename'] = 'Users';
		$data['pagesubname'] = 'System Access';

		$this->load->view('layouts/main',$data);
    }
    public function add()	{
        
        $data['main_content'] = 'user_add';
		$data['pagename'] = 'Add New Users';
		$data['pagesubname'] = 'System Access';

		$this->load->view('layouts/main',$data);
    }
}
