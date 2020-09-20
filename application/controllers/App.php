<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {


	/**	 
	 * Main site controller 
	 * 	 	
	 **/

// default  method for this controller

public function index()
{
	if($this->session->userdata('userid'))
	{
		redirect('admin/app/dashboard','refresh');
	}
	else
	{
		redirect('admin/app/login','refresh');
	}
	
}

}
