<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
	}


	public function getTrainerList(){

		print_r($_GET); exit;

			//$list = $this->site_model->getRow("user");
			
	}


}
