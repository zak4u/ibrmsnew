<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()	{
        
        $data['main_content'] = 'dashboard';
		$data['pagename'] = 'Dashboard';
		$data['pagesubname'] = 'System Overview';

		$this->load->view('layouts/main',$data);
	}
}
