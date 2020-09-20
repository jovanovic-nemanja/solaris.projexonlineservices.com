<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	/**	 
	 * Main site controller 
	 * 	 
	 * 	 
	 **/

// default  method for this controller

public function index()
{
	// if admin login then redirect on dashboard
	
	if($this->session->userdata('is_admin_logged'))
	{
		$data['customer_data'] =$this->site_model->get_rows_c2('user','user_role_id',2,'is_active','active');
		$this->load->view('common/header');
		$this->load->view('customer/customers',$data);
		$this->load->view('common/footer');
	}
	else
	{
		redirect('login');
	}
	
}

// manage site

public function manage_site()
{
	if($this->session->userdata('is_admin_logged'))
	{
		//pagination design
		$config['full_tag_open']  = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['prev_link']      = '< ';
		$config['prev_tag_open']  = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link']      = ' >';
		$config['next_tag_open']  = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open']   = '<li class="active"><a href="#">';
		$config['cur_tag_close']  = '</a></li>';
		$config['num_tag_open']   = '<li>';
		$config['num_tag_close']  = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close']= '</li>';
		$config['last_tag_open']  = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['first_link']     = 'First';
		$config['last_link']      = 'Last';

		//pagination
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$config["base_url"] = base_url()."site/manage_site";
		$query = $this->db->query(" select * from site where is_active = 1"); 
        $config['total_rows'] =  $query->num_rows();  		
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$data["site_data"] = $this->site_model->get_rows_limit_c1('site','is_active',1,'id','desc',$config["per_page"], $page);		
		$data["total_rows"] =  $query->num_rows(); 		
		$this->load->view('common/header');
		$this->load->view('site/site',$data);
		$this->load->view('common/footer');		
	}
	else
	{
		redirect('login');
	}
}

//add Site

public function add_site()
{
	if($this->session->userdata('is_admin_logged'))
	{
		$data['customer_data'] =$this->site_model->get_rows_c1('user','user_role_id',2);	
		if($this->input->post())
		{		
			//print_r($_POST); die();
			$this->form_validation->set_rules('customer_id','Customer','required');	
			$this->form_validation->set_rules('site_name','Site','required');	
			$this->form_validation->set_rules('address','Address','required');

			if($this->form_validation->run()==FALSE)
			{ 												     			
				$this->load->view('common/header');		
				$this->load->view('site/add-site',$data);
				$this->load->view('common/footer');					
			}
			else
			{				
				$tags=implode(',',$_POST['tag']);							

				$user_data =
					array(			
					'customer_id'		    	=>$_POST['customer_id'],	
					'name'		   				=>$_POST['site_name'],	
					'address'					=>$_POST['address'],
					'latitude'		   			=>$_POST['lat'],
					'longitude'		   			=>$_POST['lng'],
					'additional_address'		=>$_POST['additional_address'],	
					'first_name'				=>$_POST['first_name'],								
					'last_name'				    =>$_POST['last_name'],	
					'mobile'					=>$_POST['mobile'],				
					'telephone'					=>$_POST['telephone'],					
					'fax'						=>$_POST['fax'],			
					'email'				    	=>$_POST['email'],											
					'tags'				    	=>$tags,										
					'created_at'				=> date('Y-m-d H:i:s')
					);		

				//print_r($user_data); die();
				$is_saved = $this->site_model->save_data('site',$user_data);				

				/*$user_tag_data =
				array(
				'name'				=>$tags,					
				'created_at'		=> date('Y-m-d H:i:s'),
				'user_id'			=>$_POST['customer_id']
				);
				$is_saved = $this->site_model->save_data('tag',$user_tag_data); */	
					
				if($is_saved)
				{							
			   	 	$this->session->set_flashdata('success','Site Added Successfully.');
					redirect('site/manage_site');								
				}
				else
				{
					echo "error";
				}			
			}
		}
		else
		{				             	    
			$this->load->view('common/header');		
			$this->load->view('site/add-site',$data);
			$this->load->view('common/footer');		
		}
	}
	else
	{
		redirect('login');
	}
}

//View Site Detail

public function site_detail()
{
	if($this->session->userdata('is_admin_logged'))
	{
		$id = base64_decode($this->uri->segment(3));		
		$data['site_data'] =  $this->site_model->get_row_c1('site','id',$id); 	
		$data['equipment_data'] =  $this->site_model->get_rows_c2('equipment','site_id',$id,'is_active',1);	
		$data['project_data'] =  $this->site_model->get_rows_c2('project','site_id',$id,'is_active',1);  //print_r($data['project_data']); die();
		$this->load->view('common/header');
		$this->load->view('site/site-details',$data);
		$this->load->view('common/footer');
	}
	else
	{
		redirect('login');
	}
}

//Edit Site

public function edit_site()
{
	if($this->session->userdata('is_admin_logged'))
	{		
		$user_id = base64_decode($this->uri->segment(3));
		// get user data
		$data['site_data'] = $this->site_model->get_row_c1('site','id',$user_id);

		if($this->input->post())
		{			
			$this->form_validation->set_rules('site_name','Site Name','required');	
			$this->form_validation->set_rules('address','Address','required');			

			if($this->form_validation->run()==FALSE)
			{   		   											
				$this->load->view('common/header');
				$this->load->view('site/edit-site',$data);
				$this->load->view('common/footer');			
			}
			else
			{				
				$tags=implode(',',$_POST['tags']);						

				$site_data =
					array(	
					'customer_id'		   		=>$_POST['customer_id'],				
					'name'		   				=>$_POST['site_name'],	
					'address'					=>$_POST['address'],
					'latitude'		   			=>$_POST['lat'],
					'longitude'		   			=>$_POST['lng'],
					'additional_address'		=>$_POST['additional_address'],					
					'first_name'				=>$_POST['first_name'],
					'last_name'					=>$_POST['last_name'],	
					'mobile'					=>$_POST['mobile'],						
					'telephone'					=>$_POST['telephone'],					
					'fax'						=>$_POST['fax'],	
					'email'						=>$_POST['email'],												
					'tags'				    	=>$tags,									
					'updated_at'				=> date('Y-m-d H:i:s')
					);	

				//print_r($site_data); die();			

				$is_updated = $this->site_model->update_row_c1('site','id',$user_id,$site_data);
				
				if($is_updated)
				{
					$this->session->set_flashdata('updated','Site updated Successfully.');
					redirect('site/manage_site');	
				}
			}
		}
		else
		{			
			$this->load->view('common/header');
			$this->load->view('site/edit-site',$data);
			$this->load->view('common/footer');
		}
	}
	else
	{
		redirect('login');
	}
}

//inactive site

public function inactive_site()
{
	$id = $_POST['id'];
	$active_val = $_POST['active_val'];
		
    $update_data = array('is_active'=>$active_val);

	$update_status = $this->site_model->update_row_c1('site','id',$id,$update_data);
						
	if($update_status)
	{
		echo 1;
	}
	else
	{
		echo 0;
	}
}

public function add_learner()
{
	$learne_data = array('first_name'=>'saurabh','last_name'=>'panchal','email'=>'abc@gmail.com','password'=>'admin@123');
	$is_updated = $this->site_model->save_data('user',$learne_data);
}


}
