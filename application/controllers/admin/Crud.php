<?php 
	class Crud extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();//call CodeIgniter's default Constructor
		$this->load->database();//load database libray manually
		$this->load->model('Crud_model');//load Model
	}
	public function importdata()
	{ 
		$this->load->view('import_data');
		if(isset($_POST["submit"]))
		{
			$file = $_FILES['file']['tmp_name'];
			$handle = fopen($file, "r");
			$c = 0;//
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				$fname = $filesop[0];
				$lname = $filesop[1];
				if($c<>0){					//SKIP THE FIRST ROW
					$this->Crud_model->saverecords($fname,$lname);
				}
				$c = $c + 1;
			}
			echo "sucessfully import data !";
				
		}
	}
    	
}
?>