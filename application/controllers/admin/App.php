<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('download');
	}  
	
	/**	 
	 * Admin controller 
	 * 	 	
	 **/
	public function index()
	{	
		// if admin login then redirect on dashboard	
		if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_sales_logged') || $this->session->userdata('is_finance_logged') || $this->session->userdata('is_project_manage_logged'))
		{
			redirect('admin/app/dashboard');	
		}
		else
		{
			redirect('admin/app/login');
		}
	}
	
	public function importdata()
	{ 
        $pdata = $this->input->post();
		if(isset($_FILES['uploadExcel']['name']))
		{
			$file = $_FILES['uploadExcel']['name'];			
			
			//////////////////file_upload/////////////////////////////
			$filename=time().uniqid().$_FILES['uploadExcel']['name'];
			$url1 = "uploads/quotationpdf/".$filename;
            move_uploaded_file($_FILES['uploadExcel']['tmp_name'], $url1);
	        /////////////////////////////////////////////////
	        
			$handle = fopen($url1, "r");
			$c = 0;
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				$product_name = $filesop[0];
				// print_r($product_name); exit();
				$product_unit = $filesop[1];
				$product_categories = $filesop[2];
				$product_cost = $filesop[3];
				if (@$filesop[4]) {
					$product_description = $filesop[4];
				}else{
				    $product_description = '';
				}
				
				if($c<>0) {
				    $unit = $this->site_model->get_id('units', 'name', $product_unit);
				    $category = $this->site_model->get_id('categories', 'title', $product_categories);
				    if(@$unit && @$category) {
    				    $units = $unit[0]['id'];
    				    $category = $category[0]['id'];
    				    
    				    $this->site_model->saverecords($product_name, $units, $category, $product_cost, $product_description);
    				}
				}
				$c = $c + 1;
			}
			
			$responce['err'] = 100;
			$responce['msg'] = "Successful Operation!";
			$responce['url'] = base_url('/admin/app/products');
			echo json_encode($responce); 
		}
	}

	public function importcostsheet()
	{ 
        $pdata = $this->input->post();

		if(isset($_FILES['uploadExcel']['name']))
		{
			$file = $_FILES['uploadExcel']['name'];			
			
			//////////////////file_upload/////////////////////////////
			$filename=time().uniqid().$_FILES['uploadExcel']['name'];
			$url1 = "uploads/quotationpdf/".$filename;
            move_uploaded_file($_FILES['uploadExcel']['tmp_name'], $url1);
	        /////////////////////////////////////////////////
	    	
	    	$costsheet_id = (isset($pdata['CostSheetId']) ? $pdata['CostSheetId'] : '');
	    	$cate_id = '';
	    	$sub_cate_id = '';

			$handle = fopen($url1, "r");
			$c = 0;
			while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
			{
				if($c > 0) {
					$cate_col = $filesop[0];
					$cate_name = $filesop[1];

					if(@$cate_col) {
						if($cate_col == "Sl. No" || $cate_col == "Total For the above" || $cate_col == "VAT @ 5%" || $cate_col == "Total Cost including VAT") {

						}else {
							if($filesop[1]) {
								$cate = $this->site_model->get_id('categories', 'title', $cate_name);
							    if(count($cate) > 0) {
			    				    $cateID = $cate[0]['id'];
			    				}else{
			    					$cadata['title'] = $cate_name;
									$cadata['created_at'] = date('Y-m-d H:i:s');
									$result = $this->site_model->savedata("categories", $cadata);	
									$cateID = $result;
								}

							    $data['cat_id']	= $cateID;
								$data['cost_sheet_id'] = $costsheet_id;
								$result = $this->site_model->savedata("cost_sheet_category", $data);
								$cate_id = $cateID;

								if(@$filesop[2]) {
									$sub_cate_name = $filesop[2];
									$sub_cate_qty = $filesop[3];
									$sub_cate_unit = $filesop[4];
									$lineitem_1 = $filesop[5];
									$lineitem_cost1 = $filesop[6];
									$lineitem_2 = $filesop[7];
									$lineitem_cost2 = $filesop[8];
									$lineitem_3 = $filesop[9];
									$lineitem_cost3 = $filesop[10];
									$lineitem_oh = $filesop[13];

									$data1['cat_id'] = $cate_id;
									$data1['title'] = $sub_cate_name;
									$data1['quantity'] = $sub_cate_qty;
									$data1['unit'] = $sub_cate_unit;
									$data1['costsheet_id'] = $costsheet_id;
									$data1['created_at'] = date('Y-m-d H:i:s');

									$result1 = $this->site_model->savedata("costsheet_subcategory", $data1);
									$sub_cate_id = $result1;

									$unit = $this->site_model->get_id('units', 'name', $data1['unit']);
									if(@$unit) {
										$unitID = $unit[0]['id'];
									}else{
										$unit__data['name'] = $data1['unit'];
										$unit__data['created_at'] = date('Y-m-d H:i:s');
										$unit__result = $this->site_model->savedata("units", $unit__data);
										$unitID = $unit__result;	
									}

									if($lineitem_1 && $lineitem_cost1) {
										$line_data['unit_cost'] = str_replace('AED', '', $lineitem_cost1);
										$line_data['product_name'] = $lineitem_1;
										$line_data['quantity'] = $sub_cate_qty;
										$line_data['unit_id'] = $unitID;
										$line_data['total_cost'] = $line_data['unit_cost'] * $line_data['quantity'];
										$line_data['cat_id'] = $cate_id;
										$line_data['sub_cat_id'] = $sub_cate_id;
										$line_data['cost_sheet_id'] = $costsheet_id;
										$line_data['created_at'] = date('Y-m-d H:i:s');
										$line_data['status'] = 1;
										$line_data['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
										$line_data['selling_price'] = $line_data['total_cost'] / $line_data['o/h'];

										$result3 = $this->site_model->savedata("cost_sheet_line_item", $line_data);
									}if($lineitem_2 && $lineitem_cost2) {
										$line_data2['unit_cost'] = str_replace('AED', '', $lineitem_cost2);
										$line_data2['product_name'] = $lineitem_2;
										$line_data2['quantity'] = $sub_cate_qty;
										$line_data2['unit_id'] = $unitID;
										$line_data2['total_cost'] = $line_data2['unit_cost'] * $line_data2['quantity'];
										$line_data2['cat_id'] = $cate_id;
										$line_data2['sub_cat_id'] = $sub_cate_id;
										$line_data2['cost_sheet_id'] = $costsheet_id;
										$line_data2['created_at'] = date('Y-m-d H:i:s');
										$line_data2['status'] = 1;
										$line_data2['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
										$line_data2['selling_price'] = $line_data2['total_cost'] / $line_data2['o/h'];

										$result3_2 = $this->site_model->savedata("cost_sheet_line_item", $line_data2);
									}if($lineitem_3 && $lineitem_cost3) {
										$line_data3['unit_cost'] = str_replace('AED', '', $lineitem_cost3);
										$line_data3['product_name'] = $lineitem_3;
										$line_data3['quantity'] = $sub_cate_qty;
										$line_data3['unit_id'] = $unitID;
										$line_data3['total_cost'] = $line_data3['unit_cost'] * $line_data3['quantity'];
										$line_data3['cat_id'] = $cate_id;
										$line_data3['sub_cat_id'] = $sub_cate_id;
										$line_data3['cost_sheet_id'] = $costsheet_id;
										$line_data3['created_at'] = date('Y-m-d H:i:s');
										$line_data3['status'] = 1;
										$line_data3['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
										$line_data3['selling_price'] = $line_data3['total_cost'] / $line_data3['o/h'];

										$result3_3 = $this->site_model->savedata("cost_sheet_line_item", $line_data3);
									}
								}
							}else {
								$sub_cate_name = $filesop[2];
								$sub_cate_qty = $filesop[3];
								$sub_cate_unit = $filesop[4];
								$lineitem_1 = $filesop[5];
								$lineitem_cost1 = $filesop[6];
								$lineitem_2 = $filesop[7];
								$lineitem_cost2 = $filesop[8];
								$lineitem_3 = $filesop[9];
								$lineitem_cost3 = $filesop[10];
								$lineitem_oh = $filesop[13];

								$data1['cat_id'] = $cate_id;
								$data1['title'] = $sub_cate_name;
								$data1['quantity'] = $sub_cate_qty;
								$data1['unit'] = $sub_cate_unit;
								$data1['costsheet_id'] = $costsheet_id;
								$data1['created_at'] = date('Y-m-d H:i:s');

								$result1 = $this->site_model->savedata("costsheet_subcategory", $data1);
								$sub_cate_id = $result1;

								$unit = $this->site_model->get_id('units', 'name', $data1['unit']);
								if(@$unit) {
									$unitID = $unit[0]['id'];
								}else{
									$unit__data['name'] = $data1['unit'];
									$unit__data['created_at'] = date('Y-m-d H:i:s');
									$unit__result = $this->site_model->savedata("units", $unit__data);
									$unitID = $unit__result;	
								}


								if($lineitem_1 && $lineitem_cost1) {
									$line_data['unit_cost'] = str_replace('AED', '', $lineitem_cost1);
									$line_data['product_name'] = $lineitem_1;
									$line_data['quantity'] = $sub_cate_qty;
									$line_data['unit_id'] = $unitID;
									$line_data['total_cost'] = $line_data['unit_cost'] * $line_data['quantity'];
									$line_data['cat_id'] = $cate_id;
									$line_data['sub_cat_id'] = $sub_cate_id;
									$line_data['cost_sheet_id'] = $costsheet_id;
									$line_data['created_at'] = date('Y-m-d H:i:s');
									$line_data['status'] = 1;
									$line_data['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
									$line_data['selling_price'] = $line_data['total_cost'] / $line_data['o/h'];

									$result3 = $this->site_model->savedata("cost_sheet_line_item", $line_data);
								}if($lineitem_2 && $lineitem_cost2) {
									$line_data2['unit_cost'] = str_replace('AED', '', $lineitem_cost2);
									$line_data2['product_name'] = $lineitem_2;
									$line_data2['quantity'] = $sub_cate_qty;
									$line_data2['unit_id'] = $unitID;
									$line_data2['total_cost'] = $line_data2['unit_cost'] * $line_data2['quantity'];
									$line_data2['cat_id'] = $cate_id;
									$line_data2['sub_cat_id'] = $sub_cate_id;
									$line_data2['cost_sheet_id'] = $costsheet_id;
									$line_data2['created_at'] = date('Y-m-d H:i:s');
									$line_data2['status'] = 1;
									$line_data2['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
									$line_data2['selling_price'] = $line_data2['total_cost'] / $line_data2['o/h'];

									$result3_2 = $this->site_model->savedata("cost_sheet_line_item", $line_data2);
								}if($lineitem_3 && $lineitem_cost3) {
									$line_data3['unit_cost'] = str_replace('AED', '', $lineitem_cost3);
									$line_data3['product_name'] = $lineitem_3;
									$line_data3['quantity'] = $sub_cate_qty;
									$line_data3['unit_id'] = $unitID;
									$line_data3['total_cost'] = $line_data3['unit_cost'] * $line_data3['quantity'];
									$line_data3['cat_id'] = $cate_id;
									$line_data3['sub_cat_id'] = $sub_cate_id;
									$line_data3['cost_sheet_id'] = $costsheet_id;
									$line_data3['created_at'] = date('Y-m-d H:i:s');
									$line_data3['status'] = 1;
									$line_data3['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
									$line_data3['selling_price'] = $line_data3['total_cost'] / $line_data3['o/h'];

									$result3_3 = $this->site_model->savedata("cost_sheet_line_item", $line_data3);
								}
							}
						}
					}
				}

				$c = $c + 1;
			}
			
			$responce['err'] = 600;
			$responce['msg'] = "Successful Operation!";
			$responce['url'] = base_url('/admin/app/cost_sheet');
			echo json_encode($responce); 
		}
	}
	
    public function add_bulk_product()
    {	
    	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
    	{
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/add_bulk_product');
    		$this->load->view('admin/common/footer');
    	}
    	else
    	{
    		redirect('admin/app/not_authorized');
    	}
    }
    
    public function backupdatabase()
    {	
    	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
    	{
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/backupdatabase');
    		$this->load->view('admin/common/footer');
    	}
    	else
    	{
    		redirect('admin/app/not_authorized');
    	}
    }
    
    public function backup_database() {
        if($this->session->userdata('is_cost_estimator_logged')  || $this->session->userdata('is_admin_logged')) {
            $this->load->dbutil();
            $db_format = array('format' => 'txt', 'filename' => 'back.sql');
            $backup = & $this->dbutil->backup($db_format); 
            $db_name = 'backup-on-'. date("Y-m-d h:m:s") .'.txt';
            $save = 'uploads/'.$db_name;
            write_file($save, $backup);
            force_download($db_name, $backup); 
            redirect('admin/app/backupdatabase');
        }else{
            redirect('admin/app/not_authorized');
        }
    }

    public function uploadlogo() {
    	if($this->session->userdata('is_admin_logged'))
    	{
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/uploadlogo');
    		$this->load->view('admin/common/footer');
    	}
    	else
    	{
    		redirect('admin/app/not_authorized');
    	}
    }

    public function Logoupload()
	{ 
        $pdata = $this->input->post();
		if(isset($_FILES['uploadlogo']['name']))
		{
			$file = $_FILES['uploadlogo']['name'];
			if (@$file) {
				if (@$pdata['device']) {
					$device = $pdata['device'];
					if ($device == "mobile") {
						$device = 0;
					}else if($device == "web") {
						$device = 1;
					}else if($device == "quote") {
					    $device = 2;
					}else{
					    $device = 100;
					}
 				}else{
					$err = "Device is required.";
					$responce['err'] = 1111;
					$responce['msg'] = $err;
					echo json_encode($responce);
					exit;
				}
			}else{
				$err = "Image is required.";
				$responce['err'] = 1111;
				$responce['msg'] = $err;
				echo json_encode($responce);
				exit;
			}
			
			//////////////////file_upload/////////////////////////////
			$filename = $_FILES['uploadlogo']['name'];
			$url1 = "admin_assets/images/logo/".$filename;
            move_uploaded_file($_FILES['uploadlogo']['tmp_name'], $url1);
	        /////////////////////////////////////////////////
	        
		    $this->site_model->Logoupload($filename, $device);
			
			$responce['err'] = 100;
			$responce['msg'] = "Successful Operation!";
			$responce['url'] = base_url('/admin/app/uploadlogo');
			echo json_encode($responce); 
		}
	}

    public function changelogo()
    {	
    	if($this->session->userdata('is_admin_logged'))
    	{
    		$data['img'] = $this->site_model->get_rows('logo');

    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/changelogo', $data);
    		$this->load->view('admin/common/footer');
    	}
    	else
    	{
    		redirect('admin/app/not_authorized');
    	}
    }
    
    public function managequotelogo()
    {	
    	if($this->session->userdata('is_admin_logged'))
    	{
    		$data['img'] = $this->site_model->get_rows_c1('logo', 'device', 2);

    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/managequotelogo', $data);
    		$this->load->view('admin/common/footer');
    	}
    	else
    	{
    		redirect('admin/app/not_authorized');
    	}
    }

    public function Logochange() {
    	if($this->session->userdata('is_admin_logged'))
    	{
    		$pdata = $this->input->post();
    		if(@$pdata['quote']) {
    		    $this->site_model->Logochange($pdata['id']);
    
        		$responce['err'] = 100;
    			$responce['msg'] = "Quote Logo changed successfully and can not delete it.";
    			$responce['url'] = base_url('/admin/app/managequotelogo');
    		}else{
    		    $this->site_model->Logochange($pdata['id']);
    
        		$responce['err'] = 100;
    			$responce['msg'] = "Logo changed successfully and can not delete it.";
    			$responce['url'] = base_url('/admin/app/changelogo');
    		}
        		
			echo json_encode($responce); 
    	}
    	else
    	{
    		redirect('admin/app/not_authorized');
    	}
    }

    public function changestyle()
    {	
    	if($this->session->userdata('is_admin_logged'))
    	{
    		$dir = "demo_admin_assets/css/";
    		$style = array();

    		if (is_dir($dir)) {
    			if ($dh = opendir($dir)){
    				$i = 0;
				    while (($file = readdir($dh)) !== false){
				      	if ($file == "." || $file == "..") {
	    					
	    				}else{
	    				    $style[] = array(
	    						'name' => $file
	    					);
	    				}
				    }
				    closedir($dh);
			  	}
    		}

    		$data['style'] = $style;

    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/changestyle', $data);
    		$this->load->view('admin/common/footer');
    	}
    	else
    	{
    		redirect('admin/app/not_authorized');
    	}
    }

    public function Csschange()
    {	
    	if($this->session->userdata('is_admin_logged'))
    	{
    		$pdata = $this->input->post();
    		(@$pdata['headval']) ? $pdata['headval'] = $pdata['headval'] : $pdata['headval'] = "";
    		$this->site_model->Csschange($pdata['name'], $pdata['headval']);

    		$responce['err'] = 100;
			$responce['msg'] = "Successful Changed";
			$responce['url'] = base_url('/admin/app/changestyle');
			echo json_encode($responce); 
    	}
    	else
    	{
    		redirect('admin/app/not_authorized');
    	}
    }

    public function dashboard()
    {		
    	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_sales_logged') || $this->session->userdata('is_finance_logged') || $this->session->userdata('is_project_manage_logged'))
    	{
    	    $date = getdate();
    	    $year = $date['year'];
    	    $month = $date['mon'];
    	    $_month = ($date['mon'] != 1) ? ($date['mon'] - 1) : '12';
    	    
    		$cost_sheet_sql1="
    		    SELECT COUNT(id) as count FROM cost_sheet A 
                WHERE year(A.genrated_date) = "."$year"."
                AND month(A.genrated_date) = ".$month;
            
            $cost_sheet_sql2="
    		    SELECT COUNT(id) as count FROM cost_sheet A 
                WHERE year(A.genrated_date) = "."$year"."
                AND month(A.genrated_date) = ".$_month;
            
            $jobs_sql="
    		    SELECT COUNT(id) as count FROM cost_type A 
                WHERE year(A.created_at) = "."$year"."
                AND month(A.created_at) = ".$month;
            $jobs1_sql="
    		    SELECT COUNT(id) as count FROM cost_type A 
                WHERE year(A.created_at) = "."$year"."
                AND month(A.created_at) = ".$_month;

            $this->db->where('(quotation_status = "Pending" or quotation_status = "Accepted")');
            $this->db->where('year(genrated_date)', $year);
            $this->db->where('month(genrated_date)', $month);
            $pipeline_sql = $this->db->get('cost_sheet');
            $data['pipeline_count'] = $pipeline_sql->result_array();
                
		    $data['cost_sheet_m_count'] = $this->db->query($cost_sheet_sql1)->result_array();
		    $data['cost_sheet_l_count'] = $this->db->query($cost_sheet_sql2)->result_array();
		    $data['jobs_count'] = $this->site_model->get_quotation_c2('cost_sheet','status','genrated');
		    $data['jobs_l_count'] = $this->db->query($jobs1_sql)->result_array();

		    $sql = "SELECT logs.id, logs.type, logs.description, logs.status, logs.created_at, user.name FROM logs INNER JOIN user ON logs.user = user.id ORDER BY created_at DESC";
		    $data['logs'] = $this->db->query($sql)->result_array();
		    
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/dashboard', $data);
    		$this->load->view('admin/common/footer');
    	}
    	else
    	{
    		redirect('admin/app/login');
    	}
    }

public function cost_sheet()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$cost_sheet_id = $this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet', 'id', $cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');

		$data['exclusions']			= $this->site_model->get_rows('exclusions');
		
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/cost_sheet',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function revised_cost_sheet_csv()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$cost_sheet_id = $this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet', 'id', $cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');

		$data['exclusions']			= $this->site_model->get_rows('exclusions');
		
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/revised_cost_sheet_csv',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function cost_template()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$cost_sheet_id = $this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/cost_template',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}


public function getTotalSumCostsheet()
{
	$responce = array();
	$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";
	$costSheetTotal = $this->db->query($query)->result();
	if($costSheetTotal)
	{
		$responce['err'] = 0;
		$responce['msg'] = "";
		$responce['costSheetTotal']=$costSheetTotal;
		echo json_encode($responce); 
	}
	else{
		$responce['err'] = 1;
		$responce['msg'] = "Data Not exist";
		$responce['costSheetTotal']=$costSheetTotal;
		echo json_encode($responce);
	}
}

public function edit_cost_template()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$cost_sheet_id =$this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/edit_cost_template',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function save_cost_sheet()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$cost_sheet_id =$this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/save_cost_sheet',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function addCostSheetlineitem()
{
	if($this->session->userdata('userid'))
	{
		$response = array();
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('cat_id','cat_it','trim|required');
		$this->form_validation->set_rules('sub_cat_id','Su cat id','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['cat_id']  						=(isset($pdata['cat_id']) ? $pdata['cat_id'] : '');
		$data['sub_cat_id']  					=(isset($pdata['sub_cat_id']) ? $pdata['sub_cat_id'] : '');
		$data['cost_sheet_id']  				=(isset($pdata['costsheet_id']) ? $pdata['costsheet_id'] : '');
		$data['created_at']						=date('Y-m-d H:i:s');
		$result=$this->site_model->savedata("cost_sheet_line_item",$data);
		$products_id = array();
		$cost_product = $this->db->query("SELECT product_id from cost_sheet_product WHERE cost_sheet_id = ".$pdata['costsheet_id']."")->result_array();
		foreach ($cost_product as $key => $value)
		{
		   $products_id[]=$value['product_id']; 
		}
		if(!empty($products_id))
		{
		 $sql = "SELECT id, product_name as value from products WHERE id NOT IN (".implode(',', $products_id).")";
		 $datas = $this->db->query($sql)->result_array();
		 $i=1; foreach ($datas as $key => $value)
		 {
		   	$response[]  = array('id' =>$value['id'] ,'value'=>$value['value'] );
		   $i++;
		 }
		}
		if(empty($products_id))
		{
		 $sql = "SELECT id, product_name as value from products";
		 $datas = $this->db->query($sql)->result_array();
		 $i=1; foreach ($datas as $key => $value)
		 {
		   	$response[]  = array('id' =>$value['id'] ,'value'=>$value['value'] );

		   $i++;
		 }
		}

		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			$responce['lineItemID']=$result;
			$responce['products']=$response;
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function revise_cost_sheet()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$cost_sheet_id =$this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');

		$data['exclusions']			= $this->site_model->get_rows('exclusions');

		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/revise_cost_sheet',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function genrated_cost_sheet()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$cost_sheet_id =$this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['comment']		= $this->site_model->get_row_c1('costsheet_comment','costsheet_id',$cost_sheet_id);
		
		$data['comments']		= $this->site_model->get_cost_comments($cost_sheet_id);
		
		$data['approval_status'] = $this->site_model->get_row_c1('approval_status','costsheet_id',$cost_sheet_id);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');

		$data['exclusions']			= $this->site_model->get_rows('exclusions');

		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/genrated_cost_sheet',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function genrated_archived_costsheet()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$cost_sheet_id =$this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['comment']		= $this->site_model->get_row_c1('costsheet_comment','costsheet_id',$cost_sheet_id);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/genrated_archived_costsheet',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function genrated_view_cost_sheet()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_sales_logged') || $this->session->userdata('is_finance_logged'))
	{
		$cost_sheet_id =$this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet', 'id', $cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['comment']		= $this->site_model->get_row_c1('costsheet_comment','costsheet_id',$cost_sheet_id);
		
		$data['comments']		= $this->site_model->get_cost_comments($cost_sheet_id);

		$data['exclusions']			= $this->site_model->get_rows('exclusions');
		
		$data['approval_status'] = $this->site_model->get_row_c1('approval_status','costsheet_id',$cost_sheet_id);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/genrated_view_cost_sheet',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function genrated_view_job()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_sales_logged') || $this->session->userdata('is_finance_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$cost_sheet_id =$this->uri->segment(4);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet', 'id', $cost_sheet_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['comment']		= $this->site_model->get_row_c1('costsheet_comment','costsheet_id', $cost_sheet_id);
		
		$data['comments']		= $this->site_model->get_job_comments($cost_sheet_id);
		
		$data['approval_status'] = $this->site_model->get_row_c1('approval_status','costsheet_id',$cost_sheet_id);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/genrated_view_job',$data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function get_price()
{
	$productsPrice = $this->site_model->get_row_c1('products','id',$_POST['id']);
	echo $productsPrice->cost_in_usd; exit;
}

public function updateLineItem()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('qty','Quantity','trim|required');
		$this->form_validation->set_rules('unit_cost','Cost','trim|required');
		$this->form_validation->set_rules('margin','margin','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['quantity']  						=(isset($pdata['qty']) ? $pdata['qty'] : '');
		$data['unit_cost']  					=(isset($pdata['unit_cost']) ? $pdata['unit_cost'] : '');
		$data['total_cost']						=$pdata['qty']*$pdata['unit_cost'];
		$data['o/h']  							=(isset($pdata['margin']) ? $pdata['margin'] : '');
		$data['selling_price']  				=round(($pdata['qty']*$pdata['unit_cost'])/$pdata['margin'],1);
		$data['updated_at']						=date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet_line_item",'id',$pdata['lineItemId'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}
public function categories()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
    		$data['edit_categories']	= $this->site_model->get_row_c1('categories','id',$_GET['id']);
    		$data['categories']	= $this->site_model->get_rows('categories');
    		$data['edit'] = true;
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/manage_categories',$data);
    		$this->load->view('admin/common/footer');
		}
		else
		{
    		$data['categories']	= $this->site_model->get_rows('categories');
    		$data['edit'] = false;
    		$data['parent_categories']	= $this->site_model->get_rows_c1('categories','parent_id',0);
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/manage_categories',$data);
    		$this->load->view('admin/common/footer');
		}
		
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function venues()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_venue']	= $this->site_model->get_row_c1('venue','id',$_GET['id']);	
			$data['venues']	= $this->site_model->get_rows('venue');
			$data['edit'] = true;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_venue',$data);
			$this->load->view('admin/common/footer');
		}
		else
		{
			$data['venues']	= $this->site_model->get_rows('venue');
			$data['edit'] = false;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_venue',$data);
			$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function exclusions()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_exclusion']	= $this->site_model->get_row_c1('exclusions', 'id', $_GET['id']);	
			$data['exclusions']	= $this->site_model->get_rows('exclusions');
			$data['edit'] = true;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_exclusion',$data);
			$this->load->view('admin/common/footer');
		}
		else
		{
			$data['exclusions']	= $this->site_model->get_rows('exclusions');
			$data['edit'] = false;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_exclusion',$data);
			$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function terms()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_terms']	= $this->site_model->get_row_c1('terms_conditions', 'id', $_GET['id']);	
			$data['terms']	= $this->site_model->get_rows('terms_conditions');
			$data['edit'] = true;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_terms_conditions',$data);
			$this->load->view('admin/common/footer');
		}
		else
		{
			$data['terms']	= $this->site_model->get_rows('terms_conditions');
			$data['edit'] = false;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_terms_conditions',$data);
			$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function copyright()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_copyright']	= $this->site_model->get_row_c1('copyright', 'id', $_GET['id']);	
			$data['copyright']	= $this->site_model->get_rows('copyright');
			$data['edit'] = true;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_copyright',$data);
			$this->load->view('admin/common/footer');
		}
		else
		{
			$data['copyright']	= $this->site_model->get_rows('copyright');
			$data['edit'] = false;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_copyright',$data);
			$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function coverletter()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_coverletter']	= $this->site_model->get_row_c1('coverletter', 'id', $_GET['id']);	
			$data['coverletter']	= $this->site_model->get_rows('coverletter');
			$data['edit'] = true;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_coverletter',$data);
			$this->load->view('admin/common/footer');
		}
		else
		{
			$data['coverletter']	= $this->site_model->get_rows('coverletter');
			$data['edit'] = false;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_coverletter',$data);
			$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function validity()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_validity']	= $this->site_model->get_row_c1('validity', 'id', $_GET['id']);	
			$data['validity']	= $this->site_model->get_rows('validity');
			$data['edit'] = true;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_validity', $data);
			$this->load->view('admin/common/footer');
		}
		else
		{
			$data['validity']	= $this->site_model->get_rows('validity');
			$data['edit'] = false;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_validity', $data);
			$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function salesperson()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_salesperson']	= $this->site_model->get_row_c1('salesperson','id',$_GET['id']);	
			$data['salesPerson']	= $this->site_model->get_rows('salesperson');
			$data['edit'] = true;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_salesperson',$data);
			$this->load->view('admin/common/footer');
		}
		else
		{
			$data['salesPerson']	= $this->site_model->get_rows('salesperson');
			$data['edit'] = false;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_salesperson',$data);
			$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function cost_type()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_cost_type']	= $this->site_model->get_row_c1('cost_type','id',$_GET['id']);	
			$data['edit'] = true;
			$data['cost_type']	= $this->site_model->get_rows('cost_type');
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_cost_type',$data);
			$this->load->view('admin/common/footer');
		}
		else
		{
			$data['cost_type']	= $this->site_model->get_rows('cost_type');
			$data['edit'] = false;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_cost_type',$data);
			$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function openCostSubCat()
{
	$pdata = $_POST;
	$query = "SELECT * FROM costsheet_subcategory WHERE id= '".$pdata['id']."' ";
	$subcategory= $this->db->query($query)->row();
    echo json_encode($subcategory);
    exit;
}

public function openCostCat()
{
	$pdata = $_POST;
	$query = "SELECT cT.* FROM categories cT LEFT JOIN cost_sheet_category sC on cT.id = sC.sub_cat_id WHERE parent_id= '".$pdata['id']."' AND sC.cat_id IS NULL";
	$subcategory= $this->db->query($query)->result_array();
    echo json_encode($subcategory);
    exit;
}

public function UpdateCustomer()
{
	
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('customer','customer','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['customer']  						=(isset($pdata['customer']) ? $pdata['customer'] : '');
		$data['updated_at']						=date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);
		$getContactPerson = $this->site_model->get_rows_c1('contact_person','conatct_person',$pdata['customer']);
		$paymentData = $this->db->query("SELECT customer.*, (SELECT title FROM payment_terms WHERE id = customer.payment_terms) as payment_term, (SELECT title FROM payment_terms WHERE id = customer.payment_terms2) as payment_term2, (SELECT title FROM payment_terms WHERE id = customer.payment_terms3) as payment_term3 FROM `customer` WHERE id = ".$pdata['customer']."")->row();

		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			$responce['data']= json_encode($getContactPerson);
			$responce['paymentdata']= json_encode($paymentData);
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}

}

public function UpdatePaymentTerms()
{
	
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('payment_terms','payment terms','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['payment_terms']  				=(isset($pdata['payment_terms']) ? $pdata['payment_terms'] : '');
		$data['updated_at']						=date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function UpdateExclusion()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('exclus','exclusion','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}

		$data['exclusions'] = (isset($pdata['exclus']) ? $pdata['exclus'] : '');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$result = $this->site_model->update_row_c1("cost_sheet", 'id', $pdata['CostSheetId'], $data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function UpdateVenue()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('venue','venue','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['venue']  						=(isset($pdata['venue']) ? $pdata['venue'] : '');
		$data['updated_at']						=date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function UpdateCity()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('city', 'city', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}

		$data['city'] = (isset($pdata['city']) ? $pdata['city'] : '');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$result = $this->site_model->update_row_c1("cost_sheet", 'id', $pdata['CostSheetId'], $data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function UpdateCostType()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('cost_type','cost_type','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['cost_type']  						=(isset($pdata['cost_type']) ? $pdata['cost_type'] : '');
		$data['updated_at']						    =date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}
public function updateStartDate()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
	
		$data['project_start_date'] = (isset($pdata['project_start_date']) ? $pdata['project_start_date'] : '');
		$choose_Date = date("Y-m-d", strtotime($data['project_start_date']));
		$today = date('Y-m-d');
		$ch = date_create($choose_Date);
		$td = date_create($today);
		$diff = date_diff($td, $ch);
		if($diff->format("%R%a") < 0) {
		    $responce['err'] = 202;
			$responce['msg'] = "Start Date should be greater than today!";
			echo json_encode($responce); 
		}else{
		    $data['status']  				=1;
    		$data['updated_at']				=date('Y-m-d H:i:s');
    		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
    		if($result){
    			$responce['err'] = 0;
    			$responce['msg'] = "";
    			echo json_encode($responce); 
    		}else{
    			$error = $this->db->error();
    			$responce['err'] = 2;
    			$responce['msg'] = $error['message'];
    			echo json_encode($responce); 
    		}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function copy_Right()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		
	    $data['copyright'] = $pdata['copy_right'];
		$data['created_at'] = date('Y-m-d H:i:s');
		$result = $this->site_model->update_row_c1("cost_sheet", 'id', $pdata['CostSheetId'], $data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function updateEndDate()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
	
		$data['project_end_date']  	=(isset($pdata['project_end_date']) ? $pdata['project_end_date'] : '');
		$choose_Date = date("Y-m-d", strtotime($data['project_end_date']));
		$today = date('Y-m-d');
		$ch = date_create($choose_Date);
		$td = date_create($today);
		$diff = date_diff($td, $ch);
		if($diff->format("%R%a") < 0) {
		    $responce['err'] = 202;
			$responce['msg'] = "End Date should be greater than today!";
			echo json_encode($responce); 
		}else{
		    $data['status']  				=1;
    		$data['updated_at']				=date('Y-m-d H:i:s');
    		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
    		if($result){
    			$responce['err'] = 0;
    			$responce['msg'] = "Success End Date";
    			echo json_encode($responce); 
    		}else{
    			$error = $this->db->error();
    			$responce['err'] = 2;
    			$responce['msg'] = $error['message'];
    			echo json_encode($responce); 
    		}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function updateTemplateName()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
	
		$data['name']  								=(isset($pdata['template_Name']) ? $pdata['template_Name'] : '');
		$data['status']  							=1;
		$data['updated_at']						    =date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function UpdateCurrency()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('currency','currency','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}

		$data['currency'] = (isset($pdata['currency']) ? $pdata['currency'] : '');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function UpdateContactPerson()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('contactPerson','Name','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['conatct_person']  				 =(isset($pdata['contactPerson']) ? $pdata['contactPerson'] : '');
		$data['updated_at']						 =date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}


public function UpdateSalesPerson()
{
	
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('salesPerson','Name','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['sales_person']  				 =(isset($pdata['salesPerson']) ? $pdata['salesPerson'] : '');
		$data['updated_at']					 =date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet",'id',$pdata['CostSheetId'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}

	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}

}

public function viewLineItem()
{
	$pdata = $_POST;
	$products = $this->site_model->get_rows_c1('products','product_cat',$pdata['id']);
	//print_r($subcategory);
    echo json_encode($products);
    exit;
}

public function products()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$data['categories']	= $this->site_model->get_rows('categories');
		$data['units']	= $this->site_model->get_rows('units');
		$data['products']	= $this->site_model->get_rows('products');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/manage_product',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}


public function add_product()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
	    if(isset($_GET['action'])=='edit')
		{
			$data['units']	= $this->site_model->get_rows('units');
			$data['categories']	= $this->site_model->get_rows('categories');
			$data['products']	= $this->site_model->get_rows('products');
			
			$data['edit_units']	= $this->site_model->get_row_c1('units','id',$_GET['id']);
			$data['edit_categories']	= $this->site_model->get_row_c1('categories','id',$_GET['id']);
			$data['edit_products']	= $this->site_model->get_row_c1('products','id',$_GET['id']);
			
			$data['edit'] = true;
			$data['id'] = $_GET['id'];
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/add_product',$data);
			$this->load->view('admin/common/footer');
	    }
	    else
	    {
	        $data['edit'] = false;
	    	$data['categories']	= $this->site_model->get_rows('categories');
			$data['units']	= $this->site_model->get_rows('units');
    		$data['products']	= $this->site_model->get_rows('products');
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/add_product',$data);
    		$this->load->view('admin/common/footer');
	    }
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function getProductByCategories()
{
	$response  = array();
	if ($_POST) {
	   $result = $this->db->query('Select * from products where id = '.$_POST['id'].'')->result_array();
	

	   //$result = $this->site_model->get_rows_c1('products','product_cat',$_POST['cat_id']);
	   if(!empty($result))
	   {
	   	echo json_encode($result);
	   	exit;
	   }
	}
}

public function customers()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$data['categories']	= $this->site_model->get_rows('categories');
		$data['units']	= $this->site_model->get_rows('units');
		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
		$data['customer']	= $this->site_model->get_rows('customer');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/manage_customer',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}
public function users()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$data['users']	= $this->site_model->get_rows_c1('user','is_active','active');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/users',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}
public function add_user()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$data['user_type']	= $this->site_model->get_rows('user_role');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/add_user',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function update_user()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$user_id = $this->uri->segment(4);
		$data['userData']	= $this->site_model->get_row_c1('user','id',$user_id);
		$data['user_type']	= $this->site_model->get_rows('user_role');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/update_user',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}


public function update_user_data()
{
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('userid'))
	{
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('user_type','User Type','trim|required');


		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}

		$data['name']  							=(isset($pdata['name']) ? $pdata['name'] : '');
		$data['email']  						=(isset($pdata['email']) ? $pdata['email'] : '');
		$data['user_role_id']  					=(isset($pdata['user_type']) ? $pdata['user_type'] : '');
		$data['password']  						=(isset($pdata['password']) ? md5($pdata['password']) : '');
		$data['user_password']  				=$pdata['password'];
		$data['is_active']						='active';
		$data['created_at']						=date('Y-m-d H:i:s');

		$result=$this->site_model->update_row_c1("user",'id',$pdata['user_id'],$data);	
		if($result){
			$name = ucfirst($pdata['name']);
			$bar = strtolower($name);
			$username = preg_replace('/\s+/', '', $bar);
			$user_data = array('username' => trim($username.$result));
			$this->site_model->update_row_c1('user','id',$pdata['user_id'],$user_data);

			$dt = [];
			$dt['user'] = $this->session->userdata('userid');
			$dt['type'] = "User";
			$dt['status'] = "Updated";
			$dt['description'] = trim($username.$result);
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);


			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function updateUser()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('user_type','User Type','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		if ($this->site_model->is_exist_c1('user','email',$pdata['email']) == TRUE) {
			$responce['err'] = 2;
			$responce['msg'] = 'Email already exist!';
			echo json_encode($responce);
			exit;
		}
		$randomCode = $this->randomCode(10);
		$data['name']  							=(isset($pdata['name']) ? $pdata['name'] : '');
		$data['email']  						=(isset($pdata['email']) ? $pdata['email'] : '');
		$data['user_role_id']  					=(isset($pdata['user_type']) ? $pdata['user_type'] : '');
		$data['password']  						=md5($randomCode);
		$data['user_password']  				=$randomCode;
		$data['is_active']						='active';
		$data['created_at']						=date('Y-m-d H:i:s');

		$result=$this->site_model->savedata("user",$data);	
		if($result){
			$name = ucfirst($pdata['name']);
			$bar = strtolower($name);
			$username = preg_replace('/\s+/', '', $bar);
			$user_data = array('username' => trim($username.$result));
			$this->site_model->update_row_c1('user','id',$result,$user_data);

			$dt = [];
			$dt['user'] = $user_id;
			$dt['type'] = "User";
			$dt['status'] = "Added";
			$dt['description'] = trim($username.$result);
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function saveLogs($data) {
	$insert_logs = $this->site_model->savedata("logs", $data);
}

public function addJobcomment()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		
		$data['comment'] = (isset($pdata['comment']) ? $pdata['comment'] : '');
		$data['user_id'] = (isset($user_id) ? $user_id : '1');
		$data['cost_sheet_id'] = (isset($pdata['cost_sheet_id']) ? $pdata['cost_sheet_id'] : '1');

		$timeZone = 'Asia/Dubai';
    		date_default_timezone_set($timeZone);
    		$dateSrc = date('Y-m-d H:i:s');
		$data['created_at'] = $dateSrc;


		$result=$this->site_model->saveComment("comments", $data);	
		redirect('admin/app/genrated_view_job/'.$pdata['cost_sheet_id']);
	}
	else
	{
		redirect('admin/app/not_authorized');
    }
}

public function addCostcomment()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		
		$data['comment'] = (isset($pdata['comment']) ? $pdata['comment'] : '');
		$data['user_id'] = (isset($user_id) ? $user_id : '1');
		$data['cost_sheet_id'] = (isset($pdata['cost_sheet_id']) ? $pdata['cost_sheet_id'] : '1');
		$timeZone = 'Asia/Dubai';
    		date_default_timezone_set($timeZone);
    		$dateSrc = date('Y-m-d H:i:s');
		$data['created_at'] = $dateSrc;

		$result=$this->site_model->saveComment("cost_comments", $data);	
		redirect('admin/app/genrated_view_cost_sheet/'.$pdata['cost_sheet_id']);
	}
	else
	{
		redirect('admin/app/not_authorized');
    }
}

public function manage_costsheet()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$data['categories']		= $this->site_model->get_rows('categories');
		$data['units']			= $this->site_model->get_rows('units');
		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
		$data['cost_sheet'] = $this->site_model->get_row_costsheet();
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/manage_costsheet',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function manage_quotations()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_sales_logged') || $this->session->userdata('is_finance_logged'))
	{
		$data['categories']		= $this->site_model->get_rows('categories');
		$data['units']			= $this->site_model->get_rows('units');
		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
		if($this->session->userdata('is_finance_logged'))
		{
			$data['cost_sheet'] = $this->site_model->get_quotation_c1('cost_sheet','status','genrated');
		}
		else
		{
			$data['cost_sheet'] = $this->site_model->get_quotation('cost_sheet','status','genrated');
		}
		
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/manage_template',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function manage_jobs()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_sales_logged') || $this->session->userdata('is_finance_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$data['categories']		= $this->site_model->get_rows('categories');
		$data['units']			= $this->site_model->get_rows('units');
		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
		if($this->session->userdata('is_finance_logged'))
		{
			$data['cost_sheet'] = $this->site_model->get_quotation_c2('cost_sheet','status','genrated');
		}
		else
		{
			$data['cost_sheet'] = $this->site_model->get_quotation_c2('cost_sheet','status','genrated');
		}
		
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/manage_jobs_template',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function archived_quotations()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$data['categories']		= $this->site_model->get_rows('categories');
		$data['units']			= $this->site_model->get_rows('units');
		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
		$data['cost_sheet'] = $this->site_model->get_archived('cost_sheet','status','genrated');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/manage_archived',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}
public function manage_template()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$data['categories']		= $this->site_model->get_rows('categories');
		$data['units']			= $this->site_model->get_rows('units');
		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
		$data['cost_sheet'] = $this->site_model->get_rows_c1('cost_sheet','status','templated');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/manage_save_template',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function manage_draft()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
	$data['cost_sheet'] = $this->site_model->get_rows_c1('cost_sheet','status','draft');
	$this->load->view('admin/common/header');
	$this->load->view('admin/common/sidebar');
	$this->load->view('admin/manage_draft',$data);
	$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function add_customers()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$data['conatctPerson']	= $this->site_model->get_rows('contact_person');
		$data['categories']	= $this->site_model->get_rows('categories');
		$data['units']	= $this->site_model->get_rows('units');
		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
		$data['customer']	= $this->site_model->get_rows('customer');
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/add_customer',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function edit_customers()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		$id = $this->uri->segment(4);
		$data['conatctPerson']	= $this->site_model->get_rows('contact_person');
		$data['categories']	= $this->site_model->get_rows('categories');
		$data['units']	= $this->site_model->get_rows('units');
		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
		$data['customer']	= $this->site_model->get_rows('customer');
		$data['customers']	= $this->site_model->get_row_c1('customer','id',$id);
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/edit_customer',$data);
		$this->load->view('admin/common/footer');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function not_authorized()
{
	$this->load->view('admin/not_authorized');
}

public function create_cost_sheet()
{
	$data['created_at']  =date('Y-m-d H:i:s');

	$generatedCosts = $this->site_model->get_rows_B1('cost_sheet');
	if(count($generatedCosts) > 0) {
		$data['quotation_number'] = $generatedCosts[0]['quotation_number'] + 1;
	}else{
		$data['quotation_number'] = 1;
	}

	$user_id = $this->session->userdata('userid');
	$is_created = $this->site_model->savedata("cost_sheet", $data);
	$insert_id = $this->db->insert_id();
	if($is_created)
	{
		$dt = [];
		$dt['user'] = $user_id;
		$dt['type'] = "Cost Sheet";
		$dt['status'] = "Created";
		$dt['description'] = $insert_id;
		$timeZone = 'Asia/Dubai';
		date_default_timezone_set($timeZone);
		$dateSrc = date('Y-m-d H:i:s');
		$dt['created_at'] = $dateSrc;
		$this->saveLogs($dt);

		redirect('admin/app/cost_sheet/'.$insert_id, 'refresh');
	}
	else
	{
		echo 'somthing went wrong';
	}
}

public function create_cost_template()
{
	$data['created_at']  =date('Y-m-d H:i:s');
	$is_created = $this->site_model->savedata("cost_sheet", $data);
	$user_id = $this->session->userdata('userid');
	$insert_id = $this->db->insert_id();
	if($is_created)
	{
		$dt = [];
		$dt['user'] = $user_id;
		$dt['type'] = "Cost Template";
		$dt['status'] = "Created";
		$dt['description'] = $insert_id;
		$timeZone = 'Asia/Dubai';
		date_default_timezone_set($timeZone);
		$dateSrc = date('Y-m-d H:i:s');
		$dt['created_at'] = $dateSrc;
		$this->saveLogs($dt);

		redirect('admin/app/cost_template/'.$insert_id, 'refresh');
	}
	else
	{
		echo 'somthing went wrong';
	}
}

public function create_cost_butemplate()
{
	$data['created_at']  =date('Y-m-d H:i:s');
	$is_created = $this->site_model->savedata("cost_sheet", $data);
	$insert_id = $this->db->insert_id();
	$template_id =$this->uri->segment(4);

	if ($template_id) {
		$sql = "SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$template_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$template_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$template_id."' AND cost_sheet_category.sub_cat_id IS NULL";

		$sql2 = "SELECT * from costsheet_subcategory where costsheet_id='".$template_id."'";

		$sql3 = "SELECT * from cost_sheet_line_item where cost_sheet_id='".$template_id."'";

		$sql4 = "SELECT * from cost_sheet_product where cost_sheet_id='".$template_id."'";

		$categories = $this->db->query($sql)->result_array();
		$sub_categories = $this->db->query($sql2)->result_array();
		$lineItems = $this->db->query($sql3)->result_array();
		$products = $this->db->query($sql4)->result_array();

		if (@$categories) {
			foreach ($categories as $key1 => $value1) {
				$val = $value1['cat_id'];
				$run_query = "INSERT INTO cost_sheet_category (cost_sheet_id, cat_id, sub_cat_id) VALUES ('$insert_id', '$val', null)";
				$this->db->query($run_query);
			}
		}
		if (@$products) {
			foreach ($products as $key4 => $value4) {
				$product_id = $value4['product_id'];
				$run_query4 = "INSERT INTO cost_sheet_product (cost_sheet_id, product_id) VALUES ('$insert_id', '$product_id')";
				$this->db->query($run_query4);
			}
		}
		if (@$sub_categories) {
			foreach ($sub_categories as $key2 => $value2) {
				$title = $value2['title'];
				$cat_id = $value2['cat_id'];
				$quantity = $value2['quantity'];
				$unit = $value2['unit'];
				$created_at = date('Y-m-d H:i:s');

				$run_query2 = "INSERT INTO costsheet_subcategory (title, cat_id, costsheet_id, quantity, unit, created_at) VALUES ('$title', '$cat_id', '$insert_id', '$quantity', '$unit', '$created_at')";
				$this->db->query($run_query2);
			}
		}
		if (@$lineItems) {
			foreach ($lineItems as $key3 => $value3) {
				$data = [];
				$cat_id = $data['cat_id'] = $value3['cat_id'];
				$sub_cat_id = $value3['sub_cat_id'];

				$run = "SELECT id FROM costsheet_subcategory WHERE costsheet_id = '$insert_id' AND cat_id = '$cat_id'";
				$id = $this->db->query($run)->result_array();
				// $count = count($id);
				// if ($count == 1) {
				// 	$data['sub_cat_id'] = $id[0]['id'];
				// }else{
				// 	$data['sub_cat_id'] = $id[$key3]['id'];
				// }
				$data['sub_cat_id'] = $id[0]['id'];
				$data['cost_sheet_id'] = $insert_id;
				$data['product_name'] = $value3['product_name'];
				$data['unit_id'] = $value3['unit_id'];
				$data['quantity'] = $value3['quantity'];
				$data['unit_cost'] = $value3['unit_cost'];
				$data['total_cost'] = $value3['total_cost'];
				$data['o/h'] = $value3['o/h'];
				$data['selling_price'] = $value3['selling_price'];
				$data['position'] = $value3['position'];
				$data['status'] = $value3['status'];
				$data['actual_cost'] = $value3['actual_cost'];
				$data['total_actual_cost'] = $value3['total_actual_cost'];
				$data['deviation'] = $value3['deviation'];
				$data['editable'] = $value3['editable'];
				$data['created_at'] = date('Y-m-d H:i:s');

				$table_name = "cost_sheet_line_item";
				$this->db->insert($table_name, $data);
			}
		}
	}

	if($is_created)
	{
		$user_id = $this->session->userdata('userid');

		$dt = [];
		$dt['user'] = $user_id;
		$dt['type'] = "Cost Sheet By Model";
		$dt['status'] = "Created";
		$dt['description'] = $insert_id;
		$timeZone = 'Asia/Dubai';
		date_default_timezone_set($timeZone);
		$dateSrc = date('Y-m-d H:i:s');
		$dt['created_at'] = $dateSrc;
		$this->saveLogs($dt);

		redirect('admin/app/cost_sheet/'.$insert_id, 'refresh');
	}
	else
	{
		echo 'somthing went wrong';
	}
}

public function create_cost_by_using_template()
{
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged') || $this->session->userdata('is_project_manage_logged'))
	{
		$_data['created_at']  =date('Y-m-d H:i:s');
		$cost_sheet_id =$this->uri->segment(4);
		$template_id =$this->uri->segment(5);

		$sql = "SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$template_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$template_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$template_id."' AND cost_sheet_category.sub_cat_id IS NULL";

		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$template_id."'";

		$data['costSheetTotal'] = $this->db->query($query)->result();
		$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet', 'id', $template_id);
        $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
		$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
		$data['product']		= $this->site_model->get_rows('products');
		$data['customers']		= $this->site_model->get_rows('customer');
		$data['salesperson']	= $this->site_model->get_rows('salesperson');
		$data['venue']			= $this->site_model->get_rows('venue');
		$data['cost_type']		= $this->site_model->get_rows('cost_type');
		$data['units']			= $this->site_model->get_rows('units');
		$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);
		$data['insert_id'] = $cost_sheet_id;

		$this->load->view('admin/common/header1');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/new_cost_sheet_by_using_template', $data);
		$this->load->view('admin/common/footer1');
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function units()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
			$data['edit_units']	= $this->site_model->get_row_c1('units','id',$_GET['id']);
			$data['units']	= $this->site_model->get_rows('units');
			$data['edit'] = true;
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_unit',$data);
			$this->load->view('admin/common/footer');
	    }
	    else
	    {
	        $data['edit'] = false;
	    	$data['units']	= $this->site_model->get_rows('units');
			$this->load->view('admin/common/header');
			$this->load->view('admin/common/sidebar');
			$this->load->view('admin/manage_unit',$data);
			$this->load->view('admin/common/footer');
	    }

	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function payment_terms()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
    		$data['edit_terms']	= $this->site_model->get_row_c1('payment_terms','id',$_GET['id']);	
    		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
    		$data['edit'] = true;
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/manage_payment_term',$data);
    		$this->load->view('admin/common/footer');
		}
		else
		{
		    $data['edit'] = false;
    		$data['payment_terms']	= $this->site_model->get_rows('payment_terms');
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/manage_payment_term',$data);
    		$this->load->view('admin/common/footer');
		}
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
}

public function addCategories()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit')
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title', 'Title', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['title']  						=(isset($pdata['title']) ? $pdata['title'] : '');
			$data['created_at']						=date('Y-m-d H:i:s');
			
			$result = $this->site_model->update_row_c1("categories", 'id', $_POST['id'], $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Category";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
				date_default_timezone_set($timeZone);
				$dateSrc = date('Y-m-d H:i:s');
				$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
		else
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title','Title','trim|required');

				if ($this->form_validation->run() == FALSE) {
					$err = $this->form_validation->error_array();
					$responce['err'] = 1;
					$responce['msg'] = $err;
					$responce['datas'] = $err;
					echo json_encode($responce);
					exit;
				}
				$data['title']  						=(isset($pdata['title']) ? $pdata['title'] : '');
				$data['created_at']						=date('Y-m-d H:i:s');
				$result = $this->site_model->savedata("categories", $data);	
				if($result){
					$dt = [];
					$dt['user'] = $user_id;
					$dt['type'] = "Category";
					$dt['status'] = "Added";
					$dt['description'] = $pdata['title'];
					$timeZone = 'Asia/Dubai';
					date_default_timezone_set($timeZone);
					$dateSrc = date('Y-m-d H:i:s');
					$dt['created_at'] = $dateSrc;
					$this->saveLogs($dt);

					$responce['err'] = 0;
					$responce['msg'] = "";
					echo json_encode($responce); 
				}else{
					$error = $this->db->error();
					$responce['err'] = 2;
					$responce['msg'] = $error['message'];
					echo json_encode($responce); 
				}
		}

	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}

}

public function contact_person()
{	
	// if admin login then redirect on dashboard	
	if($this->session->userdata('is_cost_estimator_logged') || $this->session->userdata('is_admin_logged'))
	{
		if(isset($_GET['action'])=='edit')
		{
    		$data['edit_contact_person']	= $this->site_model->get_row_c1('contact_person','id',$_GET['id']);	
    		$data['conatctPerson']	= $this->site_model->get_rows('contact_person');
    		$data['customer']	= $this->site_model->get_rows('customer');
    		$data['edit'] = true;
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/manage_contact_person',$data);
    		$this->load->view('admin/common/footer');
		}
		else
		{
    		$data['conatctPerson']	= $this->site_model->get_rows('contact_person');
    		$data['customer']	= $this->site_model->get_rows('customer');
    		$data['edit'] = false;
    		$this->load->view('admin/common/header');
    		$this->load->view('admin/common/sidebar');
    		$this->load->view('admin/manage_contact_person',$data);
    		$this->load->view('admin/common/footer');
		}
		
	}
	else
	{
		redirect('admin/app/not_authorized');
	}
} 

public function addContactPerson()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit')
		{
			$pdata = $this->input->post();
			$this->load->helper('url');	
			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');
			// $this->form_validation->set_rules('mobile','Mobile','trim|required|numeric');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['conatct_person']  			=(isset($pdata['conatct_person']) ? $pdata['conatct_person'] : '');
			$data['name']  						=(isset($pdata['name']) ? $pdata['name'] : '');
			$data['email']  					=(isset($pdata['email']) ? $pdata['email'] : '');
			$data['mobile']  				    =(isset($pdata['mobile']) ? $pdata['mobile'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->update_row_c1("contact_person",'id',$_POST['id'],$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Contact Person";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['name'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
		else
		{
			$pdata = $this->input->post();
			$this->load->helper('url');	
			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');
			// $this->form_validation->set_rules('mobile','Mobile','trim|required|numeric');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['conatct_person']  			=(isset($pdata['conatct_person']) ? $pdata['conatct_person'] : '');
			$data['name']  						=(isset($pdata['name']) ? $pdata['name'] : '');
			$data['email']  					=(isset($pdata['email']) ? $pdata['email'] : '');
			$data['mobile']  				    =(isset($pdata['mobile']) ? $pdata['mobile'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("contact_person",$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Contact Person";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['name'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function addSalesPerson()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit')
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['name']  						=(isset($pdata['name']) ? $pdata['name'] : '');
			$data['email']  					=(isset($pdata['email']) ? $pdata['email'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->update_row_c1("salesperson",'id',$_POST['id'],$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Sales Person";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['name'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
		else
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['name']  						=(isset($pdata['name']) ? $pdata['name'] : '');
			$data['email']  					=(isset($pdata['email']) ? $pdata['email'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("salesperson",$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Sales Person";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['name'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function addCostSheet()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('description','description','trim|required');
		$this->form_validation->set_rules('qty','Quantity','trim|required');
		$this->form_validation->set_rules('unit_cost','Unit Cost','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$description = '';
		if(is_numeric($pdata['description']))
		{
			$productName = $this->site_model->get_row_c1('products','id',$pdata['description']);
			$description = $productName->product_name;
			$productData  = array('cost_sheet_id' => $pdata['cost_sheet_id'],'product_id'=> $pdata['description']);
			if($this->site_model->is_exist_c2('cost_sheet_product','cost_sheet_id',$pdata['cost_sheet_id'],'product_id',$pdata['description'])==FALSE)
			{
			$this->site_model->savedata('cost_sheet_product',$productData);
			}
		}
		else{
			$description = $pdata['description'];
		}
		$data['product_name']  					=(isset($description) ? $description : '');
		$data['quantity']  						=(isset($pdata['qty']) ? $pdata['qty'] : '');
		$data['unit_id']  					    =(isset($pdata['product_unit']) ? $pdata['product_unit'] : '');
		$data['unit_cost']  					=(isset($pdata['unit_cost']) ? $pdata['unit_cost'] : '');
		$data['total_cost']  					=(isset($pdata['total_cost']) ? $pdata['total_cost'] : '');
		$data['o/h']  							=(isset($pdata['margin']) ? $pdata['margin'] : '');
		$data['selling_price']  				=(isset($pdata['selling_price']) ? $pdata['selling_price'] : '');
		$data['cat_id']  						=(isset($pdata['cat_id']) ? $pdata['cat_id'] : '');
		$data['sub_cat_id']  					=(isset($pdata['sub_cat_id']) ? $pdata['sub_cat_id'] : '');
		$data['cost_sheet_id']  				=(isset($pdata['cost_sheet_id']) ? $pdata['cost_sheet_id'] : '');
		$data['created_at']						=date('Y-m-d H:i:s');
		$data['status']							=1;
		$result=$this->site_model->update_row_c1("cost_sheet_line_item",'id',$pdata['lineItemID'],$data);
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$pdata['cost_sheet_id']."'";
		$costSheetTotal = $this->db->query($query)->result();
		$costSumData = array('totalcostsum'=>number_format(round($costSheetTotal[0]->totalCostSum,3,PHP_ROUND_HALF_UP),2,'.',''),'sellingPriceSum'=>number_format(round($costSheetTotal[0]->sellingPriceSum,3,PHP_ROUND_HALF_UP),2,'.',''));

		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$pdata['cost_sheet_id'].") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$pdata['cost_sheet_id'].") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$pdata['cost_sheet_id']."' AND cost_sheet_category.sub_cat_id IS NULL";
        $cost_sheet_cat = $this->db->query($sql)->result_array();

        $subcatquery = "select cE.id, cE.title, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$pdata['cost_sheet_id']."' AND cE.cat_id = '".$pdata['cat_id']."'";
        $subCategory= $this->db->query($subcatquery)->result_array();

		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			$responce['data'] = $costSumData;
			$responce['categoryData'] = $cost_sheet_cat;
			$responce['subCategoryData'] = $subCategory;
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}

	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}

}


public function getTotalSellingPrice()
{
		if($this->input->post())
		{
			$pdata = $_POST;
			$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$pdata['cost_sheet_id']."'";
			$costSheetTotal = $this->db->query($query)->result();
			$costSumData = array('totalcostsum'=>number_format(round($costSheetTotal[0]->totalCostSum,3,PHP_ROUND_HALF_UP),2,'.',''),'sellingPriceSum'=>number_format(round($costSheetTotal[0]->sellingPriceSum,3,PHP_ROUND_HALF_UP),2,'.',''));

			$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$pdata['cost_sheet_id'].") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$pdata['cost_sheet_id'].") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$pdata['cost_sheet_id']."' AND cost_sheet_category.sub_cat_id IS NULL";
	        $cost_sheet_cat = $this->db->query($sql)->result_array();

	        $subcatquery = "select id, title, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$pdata['cost_sheet_id']."' AND cE.id = '".$pdata['cat_id']."'";
	        $subCategory= $this->db->query($subcatquery)->result_array();
	        if(empty($subCategory))
	        {
	        	$subCategory[] = array('id'=>$pdata['cat_id'],'sumTotalCost'=>null,'sumSellingCost'=>null);
	        }

				$responce['err'] = 0;
				$responce['msg'] = "";
				$responce['data'] = $costSumData;
				$responce['categoryData'] = $cost_sheet_cat;
				$responce['subCategoryData'] = $subCategory;
				echo json_encode($responce); 
			
		}
		
}

public function updateDiscount()
{
	
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$data['discountPerent'] = (isset($pdata['percent']) ? $pdata['percent'] : '');
		$data['discountBy'] = (isset($pdata['discountBy']) ? $pdata['discountBy'] : '1');

		$result = $this->site_model->update_row_c1("cost_sheet", 'id', $pdata['cost_sheet_id'], $data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}

	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}

}

public function addUnit()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit')
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('name','Name','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['name']  						=(isset($pdata['name']) ? $pdata['name'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->update_row_c1("units",'id',$_POST['id'],$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Unit";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['name'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
		else
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('name','Name','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['name']  						=(isset($pdata['name']) ? $pdata['name'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("units",$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Unit";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['name'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function addVenue()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit')
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title','title','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['title']  						=(isset($pdata['title']) ? $pdata['title'] : '');
			$data['created_at']					    =date('Y-m-d H:i:s');
			$result=$this->site_model->update_row_c1("venue",'id',$_POST['id'],$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Venue";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
		else
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title','title','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['title']  						=(isset($pdata['title']) ? $pdata['title'] : '');
			$data['created_at']					    =date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("venue",$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Venue";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function addExclusion()
{
	if($this->session->userdata('userid')) {
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit') {
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title', 'title', 'trim|required');
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['title'] = (isset($pdata['title']) ? $pdata['title'] : '');
			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			$data['created_at'] = date('Y-m-d H:i:s');
			$result = $this->site_model->update_row_c1("exclusions", 'id', $_POST['id'], $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Exclusion";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}else {
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title','title','trim|required');
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['title'] = (isset($pdata['title']) ? $pdata['title'] : '');
			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			$data['created_at'] = date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("exclusions", $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Exclusion";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}

}

public function addTerms()
{
	if($this->session->userdata('userid')) {
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit') {
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			$data['created_at'] = date('Y-m-d H:i:s');
			$result = $this->site_model->update_row_c1("terms_conditions", 'id', $_POST['id'], $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Terms and Conditions";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['description'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}else {
			$pdata = $this->input->post();
			$this->load->helper('url');
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			$data['created_at'] = date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("terms_conditions", $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Terms and Conditions";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['description'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}

}

public function addcopyright()
{
	if($this->session->userdata('userid')) {
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit') {
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			$data['created_at'] = date('Y-m-d H:i:s');
			$result = $this->site_model->update_row_c1("copyright", 'id', $_POST['id'], $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Copyright";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['description'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}else {
			$pdata = $this->input->post();
			$this->load->helper('url');
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			$data['created_at'] = date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("copyright", $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Copyright";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['description'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function addcoverletter()
{
	if($this->session->userdata('userid')) {
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit') {
			$pdata = $this->input->post();
			$this->load->helper('url');		
			
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
    
			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			
			$data['created_at'] = date('Y-m-d H:i:s');
			$result = $this->site_model->update_row_c1("coverletter", 'id', $_POST['id'], $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Coverletter";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['description'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}else {
			$pdata = $this->input->post();
			$this->load->helper('url');
			
			$this->form_validation->set_rules('description', 'description', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			
			$data['created_at'] = date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("coverletter", $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Coverletter";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['description'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function addvalidity()
{
	if($this->session->userdata('userid')) {
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit') {
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			$data['created_at'] = date('Y-m-d H:i:s');
			$result = $this->site_model->update_row_c1("validity", 'id', $_POST['id'], $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Validity";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['description'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}else {
			$pdata = $this->input->post();
			$this->load->helper('url');
			$this->form_validation->set_rules('description', 'description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$data['description'] = (isset($pdata['description']) ? $pdata['description'] : '');
			$data['created_at'] = date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("validity", $data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Validity";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['description'];
				$timeZone = 'Asia/Dubai';
                date_default_timezone_set($timeZone);
                $dateSrc = date('Y-m-d H:i:s');
                $dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function addCostType()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit')
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title','title','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['title']  						=(isset($pdata['title']) ? $pdata['title'] : '');
			$data['created_at']					    =date('Y-m-d H:i:s');
			$result=$this->site_model->update_row_c1("cost_type",'id',$_POST['id'],$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Job Type";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
		else
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title','title','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['title']  						=(isset($pdata['title']) ? $pdata['title'] : '');
			$data['created_at']					    =date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("cost_type",$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Job Type";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
date_default_timezone_set($timeZone);
$dateSrc = date('Y-m-d H:i:s');
$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}

	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}

}

public function addCostCat()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('category','category','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['cat_id']  					=(isset($pdata['category']) ? $pdata['category'] : '');
			$data['cost_sheet_id']  			=(isset($pdata['cost_sheet_id']) ? $pdata['cost_sheet_id'] : '');
			// $data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("cost_sheet_category",$data);	
			if($result){
				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}

	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}

}

public function addCostSubCat()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('subcategory','Category','trim|required');
		$this->form_validation->set_rules('editsubqty','Quantity','trim|required');
		$this->form_validation->set_rules('sub_product_unit','Unit','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['cat_id']  					=(isset($pdata['pcategory_id']) ? $pdata['pcategory_id'] : '');
			$data['costsheet_id']  			    =(isset($pdata['sub_cost_sheet_id']) ? $pdata['sub_cost_sheet_id'] : '');
			$data['title']  				    =(isset($pdata['subcategory']) ? $pdata['subcategory'] : '');
			$data['quantity']  				    =(isset($pdata['editsubqty']) ? $pdata['editsubqty'] : '');
			$data['unit']  				    	=(isset($pdata['sub_product_unit']) ? $pdata['sub_product_unit'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("costsheet_subcategory",$data);	
			if($result){
				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}

	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}

}


public function updateCostSubCat()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('editsubcategory','Sub category','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
		
			$data['title']  				    =(isset($pdata['editsubcategory']) ? $pdata['editsubcategory'] : '');
			$data['quantity']  				    =(isset($pdata['editsubqty']) ? $pdata['editsubqty'] : '');
			$data['unit']  				    	=(isset($pdata['editsub_product_unit']) ? $pdata['editsub_product_unit'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->update_row_c1("costsheet_subcategory",'id',$pdata['subpcategory_id'],$data);	
			if($result){
				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}

	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}

}


public function addPaymentTerms()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		if($_POST['action']=='edit')
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title','Title','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['title']  						=(isset($pdata['title']) ? $pdata['title'] : '');
			$data['created_at']						=date('Y-m-d H:i:s');
			$result=$this->site_model->update_row_c1("payment_terms",'id',$_POST['id'],$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Payment Terms";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
				date_default_timezone_set($timeZone);
				$dateSrc = date('Y-m-d H:i:s');
				$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
		else
		{
			$pdata = $this->input->post();
			$this->load->helper('url');		
			$this->form_validation->set_rules('title','Title','trim|required');

			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['title']  						=(isset($pdata['title']) ? $pdata['title'] : '');
			$data['created_at']					=date('Y-m-d H:i:s');
			$result=$this->site_model->savedata("payment_terms",$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Payment Terms";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['title'];
				$timeZone = 'Asia/Dubai';
				date_default_timezone_set($timeZone);
				$dateSrc = date('Y-m-d H:i:s');
				$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function addProduct()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
	    $pdata = $this->input->post();
    	if(@$pdata['id'])
		{
		    $user_id = $this->session->userdata('userid');
    		$pdata = $this->input->post();
    		$this->load->helper('url');		
    		$this->form_validation->set_rules('product_name','Product Name','trim|required');
    		$this->form_validation->set_rules('product_desc','Product Description','trim|required');
    		$this->form_validation->set_rules('product_cat','Product Category','trim|required');
    		$this->form_validation->set_rules('product_unit','Product Unit','trim|required');
    		$this->form_validation->set_rules('product_cost_aed','Cost AED','trim|required|numeric');
    
    		if ($this->form_validation->run() == FALSE) {
    			$err = $this->form_validation->error_array();
    			$responce['err'] = 1;
    			$responce['msg'] = $err;
    			$responce['datas'] = $err;
    			echo json_encode($responce);
    			exit;
    		}
    		$data['product_name']  					=(isset($pdata['product_name']) ? $pdata['product_name'] : '');
    		$data['product_desc']  					=(isset($pdata['product_desc']) ? $pdata['product_desc'] : '');
    		$data['product_cat']  					=(isset($pdata['product_cat']) ? $pdata['product_cat'] : '');
    		$data['product_unit']  					=(isset($pdata['product_unit']) ? $pdata['product_unit'] : '');
    		$data['cost_in_aed']  					=(isset($pdata['product_cost_aed']) ? $pdata['product_cost_aed'] : '');
    		$data['cost_in_usd']  					=round(($pdata['product_cost_aed']/3.67),1);
    		$data['created_at']						=date('Y-m-d H:i:s');
    
    		$result=$this->site_model->update_row_c1("products",'id',$pdata['id'],$data);	
    		if($result){
    			$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Product";
				$dt['status'] = "Updated";
				$dt['description'] = $pdata['product_name'];
				$timeZone = 'Asia/Dubai';
				date_default_timezone_set($timeZone);
				$dateSrc = date('Y-m-d H:i:s');
				$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

    			$responce['err'] = 0;
    			$responce['msg'] = "";
    			echo json_encode($responce); 
    		}else{
    			$error = $this->db->error();
    			$responce['err'] = 2;
    			$responce['msg'] = $error['message'];
    			echo json_encode($responce); 
    		}
		}else{
			$user_id = $this->session->userdata('userid');
    		$pdata = $this->input->post();
    		$this->load->helper('url');		
    		$this->form_validation->set_rules('product_name','Product Name','trim|required');
    		$this->form_validation->set_rules('product_desc','Product Description','trim|required');
    		$this->form_validation->set_rules('product_cat','Product Category','trim|required');
    		$this->form_validation->set_rules('product_unit','Product Unit','trim|required');
    		$this->form_validation->set_rules('product_cost_aed','Cost AED','trim|required|numeric');


			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}
			$data['product_name']  					=(isset($pdata['product_name']) ? $pdata['product_name'] : '');
			$data['product_desc']  					=(isset($pdata['product_desc']) ? $pdata['product_desc'] : '');
			$data['product_cat']  					=(isset($pdata['product_cat']) ? $pdata['product_cat'] : '');
			$data['product_unit']  					=(isset($pdata['product_unit']) ? $pdata['product_unit'] : '');
			$data['cost_in_aed']  					=(isset($pdata['product_cost_aed']) ? $pdata['product_cost_aed'] : '');
			$data['cost_in_usd']  					=round(($pdata['product_cost_aed']/3.67),1);
			$data['created_at']						=date('Y-m-d H:i:s');
			$result = $this->site_model->savedata("products",$data);	
			if($result){
				$dt = [];
				$dt['user'] = $user_id;
				$dt['type'] = "Product";
				$dt['status'] = "Added";
				$dt['description'] = $pdata['product_name'];
				$timeZone = 'Asia/Dubai';
				date_default_timezone_set($timeZone);
				$dateSrc = date('Y-m-d H:i:s');
				$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}
}

public function addCustomer()
{
    
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('company_name','Company Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['company_name']  					=(isset($pdata['company_name']) ? $pdata['company_name'] : '');
		$data['email']  						=(isset($pdata['email']) ? $pdata['email'] : '');
		$data['vat_number']  					=(isset($pdata['vat_number']) ? $pdata['vat_number'] : '');
		$data['payment_terms']  				=(isset($pdata['payment_terms']) ? $pdata['payment_terms'] : '');
		$data['payment_terms2']  				=(isset($pdata['payment_terms2']) ? $pdata['payment_terms2'] : '');
		$data['payment_terms3']  				=(isset($pdata['payment_terms3']) ? $pdata['payment_terms3'] : '');
		$data['tel_number']  					=(isset($pdata['tel_number']) ? $pdata['tel_number'] : '');
		$data['address']  						=(isset($pdata['address']) ? $pdata['address'] : '');
		$data['mobile']  						=(isset($pdata['mobile']) ? $pdata['mobile'] : '');
		$data['created_at']						=date('Y-m-d H:i:s');

		$result=$this->site_model->savedata("customer",$data);	
		if($result){
			$dt = [];
			$dt['user'] = $this->session->userdata('userid');
			$dt['type'] = "Customer";
			$dt['status'] = "Added";
			$dt['description'] = $data['company_name'];
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}

public function editCustomer()
{
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('company_name','Company Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['company_name']  					=(isset($pdata['company_name']) ? $pdata['company_name'] : '');
		$data['email']  						=(isset($pdata['email']) ? $pdata['email'] : '');
		$data['vat_number']  					=(isset($pdata['vat_number']) ? $pdata['vat_number'] : '');
		$data['payment_terms']  				=(isset($pdata['payment_terms']) ? $pdata['payment_terms'] : '');
		$data['payment_terms2']  				=(isset($pdata['payment_terms2']) ? $pdata['payment_terms2'] : '');
		$data['payment_terms3']  				=(isset($pdata['payment_terms3']) ? $pdata['payment_terms3'] : '');
		$data['tel_number']  					=(isset($pdata['tel_number']) ? $pdata['tel_number'] : '');
		$data['address']  						=(isset($pdata['address']) ? $pdata['address'] : '');
		$data['mobile']  						=(isset($pdata['mobile']) ? $pdata['mobile'] : '');
		$data['created_at']						=date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("customer",'id',$pdata['id'],$data);	
		if($result){
			$dt = [];
			$dt['user'] = $this->session->userdata('userid');
			$dt['type'] = "Customer";
			$dt['status'] = "Updated";
			$dt['description'] = $data['company_name'];
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$responce['err'] = 3;
		$responce['msg'] = 'Session expired!';
		echo json_encode($responce); 
	}
}
 
public function uploadDocument()
{
  
    		$path = 'uploads/document/'; 
    		$title ='Doc_'.date('Y-m-d H:i:s');
            if (!empty($_FILES)) {
            	$images = $this->upload_files($path, $title, $_FILES['image']);
            	//print_r($images); exit;
                if ($images=== FALSE) {
                   $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                }
                else
                {
				    $data = array();
				    //print_r($images); exit;
				    foreach ($images as $key => $value) {
				    	//print_r($value); exit;
				    	$data[$key] = array(
				            'line_item_id' => $this->input->post('lineItemID'),
				            'doc_image' => $value['img_name'],
				            'doc_type' => $value['file_type'],
				            'created_at'=> date('Y-m-d H:i:s'),
				        );
				    }

				    $is_insert = $this->db->insert_batch('document', $data);
				    if($is_insert)
				    {
				    	$responce['err'] = 0;
				    	$responce['lineItemID']=$this->input->post('lineItemID');
						$responce['msg'] = "";
						echo json_encode($responce);
				    }
                }
            }                   

}    

public function saveTemplateDraft(){

	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('costsheet_id','Cost sheet id','trim|required');
			if ($this->form_validation->run() == FALSE) {
				$err = $this->form_validation->error_array();
				$responce['err'] = 1;
				$responce['msg'] = $err;
				$responce['datas'] = $err;
				echo json_encode($responce);
				exit;
			}

			$is_exist = $this->site_model->is_exist_c2('cost_sheet','id',$pdata['costsheet_id'],'status','draft');
			if($is_exist)
			{
				$responce['err'] = 3;
				$responce['msg'] = "this tempalate already in draft!";
				echo json_encode($responce); 
				exit;
			}

			$data['status']  						='draft';
			$data['updated_at']						=date('Y-m-d H:i:s');
			$result=$this->site_model->update_row_c1("cost_sheet","id",$pdata['costsheet_id'],$data);	
			if($result){
				$responce['err'] = 0;
				$responce['msg'] = "";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}

	}
}

public function saveTemplate(){

	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('costsheet_id','Cost sheet id','trim|required');
		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$is_exist = $this->site_model->is_exist_c2('cost_sheet','id',$pdata['costsheet_id'],'status','save');
		if($is_exist)
		{
			$responce['err'] = 3;
			$responce['msg'] = "this tempalate already saved!";
			echo json_encode($responce); 
			exit;
		}
		$data['customer']						=NULL;
		$data['conatct_person']					=NULL;
		$data['payment_terms']					=NULL;
		$data['sales_person']					=NULL;
		$data['venue']							=NULL;
		$data['cost_type']						=NULL;
		$data['status']  						='save';
		$data['updated_at']						=date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet","id",$pdata['costsheet_id'],$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
}

public function genrateTemplate(){

	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('costsheet_id','Cost sheet id','trim|required');
		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$is_exist = $this->site_model->is_exist_c2('cost_sheet','id',$pdata['costsheet_id'],'status','genrated');
		if($is_exist)
		{
			$responce['err'] = 3;
			$responce['msg'] = "tempalate already genrated!";
			echo json_encode($responce); 
			exit;
		}
		$data['status'] = 'genrated';
		$generatedCosts = $this->site_model->get_rows_c1('cost_sheet', 'status', 'genrated');
		if(count($generatedCosts) > 0) {
			$latest_number = $generatedCosts[0]['quotation_number'];
			$data['quotation_number'] = (@$latest_number) ? $latest_number + 1 : 1;
		}else{
			$data['quotation_number'] = 1;	
		}
		
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['genrated_date'] = date('Y-m-d H:i:s');
		$data['currency'] = 'AED';

		$result=$this->site_model->update_row_c1("cost_sheet","id",$pdata['costsheet_id'],$data);
		$userData  = $this->db->query('Select salesperson.name, salesperson.email from  salesperson LEFT JOIN cost_sheet on salesperson.id = cost_sheet.sales_person WHERE cost_sheet.id = '.$pdata['costsheet_id'].'')->row();	
		if($result){
			$dt = [];
			$dt['user'] = $this->session->userdata('userid');
			$dt['type'] = "Cost Sheet";
			$dt['status'] = "Created";
			$dt['description'] = $pdata['costsheet_id'];
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			$this->sendEmailNotification($pdata['costsheet_id'],$userData);
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
}

public function generateCost(){

	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('costsheet_id','Cost sheet id','trim|required');
		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$is_exist = $this->site_model->is_exist_c2('cost_sheet','id',$pdata['costsheet_id'],'status','genrated');
		if($is_exist)
		{
			$responce['err'] = 3;
			$responce['msg'] = "tempalate already genrated!";
			echo json_encode($responce); 
			exit;
		}
		$data['status']  						='genrated';
		$data['updated_at']						=date('Y-m-d H:i:s');
		$data['genrated_date']					=date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet","id",$pdata['costsheet_id'],$data);
		$userData  = $this->db->query('Select salesperson.name, salesperson.email from  salesperson LEFT JOIN cost_sheet on salesperson.id = cost_sheet.sales_person WHERE cost_sheet.id = '.$pdata['costsheet_id'].'')->row();	
		if($result){
			// $this->sendEmailNotification($pdata['costsheet_id'],$userData);
			$responce['err'] = 20000;
			$responce['msg'] = base_url('/admin/app/cost_sheet/'.$pdata['costsheet_id']);
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}

	}
}

public function saveCostTemplate(){

	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('costsheet_id', 'Cost sheet id', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$is_exist = $this->site_model->is_exist_c2('cost_sheet', 'id', $pdata['costsheet_id'], 'status', 'genrated');
		if($is_exist)
		{
			$responce['err'] = 3;
			$responce['msg'] = "tempalate already genrated!";
			echo json_encode($responce); 
			exit;
		}
		$data['status']  						= 'templated';
		$data['updated_at']						= date('Y-m-d H:i:s');
		$data['genrated_date']					= date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("cost_sheet", "id", $pdata['costsheet_id'], $data);
		$userData  = $this->db->query('Select salesperson.name, salesperson.email from  salesperson LEFT JOIN cost_sheet on salesperson.id = cost_sheet.sales_person WHERE cost_sheet.id = '.$pdata['costsheet_id'].'')->row();	
		if($result){
			$dt = [];
			$dt['user'] = $this->session->userdata('userid');
			$dt['type'] = "Cost Model";
			$dt['status'] = "Updated";
			$dt['description'] = $pdata['costsheet_id'];
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			$this->sendEmailNotification($pdata['costsheet_id'], $userData);
			$responce['err'] = 10000;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
}

public function saveJob(){
	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('costsheet_id','Cost sheet id','trim|required');
		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['updated_at']						=date('Y-m-d H:i:s');
		
		$data['deviation'] = $pdata['deviation'];
		$data['actual_cost'] = $pdata['actual_cost'];
		$data['total_actual_cost'] = $pdata['total_actual_cost'];
		
		$result = $this->site_model->saveJob("cost_sheet_line_item", "cost_sheet_id", $pdata['costsheet_id'], "product_name", $pdata['description'], $data);
		$userData = $this->db->query('Select salesperson.name, salesperson.email from  salesperson LEFT JOIN cost_sheet on salesperson.id = cost_sheet.sales_person WHERE cost_sheet.id = '.$pdata['costsheet_id'].'')->row();	
		if($result){
			$this->sendEmailNotification($pdata['costsheet_id'], $userData);
			$responce['err'] = 9;
			$responce['msg'] = "Success";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
}

public function noeditable(){

	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('costsheet_id','Cost sheet id','trim|required');
		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['editable'] = 1;
		$result = $this->site_model->updateJob("cost_sheet_line_item", "cost_sheet_id", $pdata['costsheet_id'], $data);
		if($result){
			$dt = [];
			$dt['user'] = $user_id;
			$dt['type'] = "Jobs";
			$dt['status'] = "Submitted";
			$dt['description'] = $pdata['costsheet_id'];
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			$this->sendEmailNotificationsubmitJob($pdata['costsheet_id']);
			$responce['err'] = 18;
			$responce['msg'] = "Success";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
}

public function updatejob(){

	if($this->session->userdata('userid'))
	{
		$user_id = $this->session->userdata('userid');
		$pdata = $this->input->post();
		$this->load->helper('url');		
		$this->form_validation->set_rules('costsheet_id', 'Cost sheet id', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}

		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['editable'] = -1;
		$result = $this->site_model->updateJob("cost_sheet_line_item", "cost_sheet_id", $pdata['costsheet_id'], $data);
		if($result){
			$dt = [];
			$dt['user'] = $user_id;
			$dt['type'] = "Jobs";
			$dt['status'] = "Updated";
			$dt['description'] = $pdata['costsheet_id'];
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			// $this->sendEmailNotificationsubmitJob($pdata['costsheet_id']);
			$responce['err'] = 180;
			$responce['msg'] = "Success";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
}

public function addCostSheetComment()
{
	//print_r($_POST); exit;
	if($this->session->userdata('userid'))
	{
		$pdata = $this->input->post();
		$this->load->helper('url');	
		$this->form_validation->set_rules('comment','Name','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['costsheet_id']  				=(isset($pdata['costsheet_id']) ? $pdata['costsheet_id'] : '');
		$data['comment']  					=(isset($pdata['comment']) ? $pdata['comment'] : '');
		
		$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);

			$dateSrc = date('Y-m-d H:i:s');
			$dateTime = new DateTime($dateSrc);

		$data['created_at'] = strtotime($dateSrc);

		$result=$this->site_model->savedata("costsheet_comment",$data);	
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
			$responce['err'] = 3;
			$responce['msg'] = 'Session expired!';
			echo json_encode($responce); 
	}

}

public function reuse_record()
{
	$cost_sheet_id =$this->uri->segment(4);
	$getData = $this->site_model->get_row_c1('cost_sheet', 'id', $cost_sheet_id);
	if(!empty($getData))
	{
		$name ='';
		$data = array('name'=>$name, 'customer'=>'', 'conatct_person'=>'', 'payment_terms'=>'', 'sales_person'=>'', 'venue'=>'', 'cost_type'=>'', 'currency'=>'', 'status' => '', 'created_at' => date('Y-m-d H:i:s'));
		$is_saved = $this->site_model->savedata('cost_sheet', $data);
		$getCatData = $this->site_model->get_rows_c1('cost_sheet_category', 'cost_sheet_id', $cost_sheet_id);

		foreach ($getCatData as $value) {
			$catData = array('cost_sheet_id'=>$is_saved,'cat_id'=>$value['cat_id']);
			$savecat = $this->site_model->savedata('cost_sheet_category',$catData);
			$getSubCatData = $this->site_model->get_rows_c2('costsheet_subcategory','costsheet_id',$cost_sheet_id,'cat_id',$value['cat_id']);

			foreach ($getSubCatData as $key => $subvalue) {
				$catSubData = array('title'=>$subvalue['title'],'costsheet_id'=>$is_saved,'cat_id'=>$subvalue['cat_id']);
				$saveSubcat = $this->site_model->savedata('costsheet_subcategory',$catSubData);
				$getLineData = $this->site_model->get_rows_c1('cost_sheet_line_item','sub_cat_id',$subvalue['id']);
				foreach ($getLineData as $key => $lvalue) {
					$lineData = array('cat_id'=>$value['cat_id'],'sub_cat_id'=>$saveSubcat,'cost_sheet_id'=>$is_saved,'product_name'=>$lvalue['product_name'],'unit_id'=>$lvalue['unit_id'],'quantity'=>$lvalue['quantity'],'unit_cost'=>$lvalue['unit_cost'],'total_cost'=>$lvalue['total_cost'],'o/h'=>$lvalue['o/h'],'selling_price'=>$lvalue['selling_price'], 'status'=>$lvalue['status'],'position'=>$lvalue['position'],'created_at'=>date('Y-m-d H:i:s'));
					$saveline = $this->site_model->savedata('cost_sheet_line_item',$lineData);
				}
			}
		}

		if($is_saved){
			$dt = [];
			$dt['user'] = $this->session->userdata('userid');
			$dt['type'] = "Cost Sheet";
			$dt['status'] = "Created";
			$dt['description'] = $is_saved;
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			redirect('admin/app/cost_sheet/'.$is_saved, 'refresh');
		} 
	}
}

public function save_model()
{
	$cost_sheet_id = $this->uri->segment(4);
	$getData = $this->site_model->get_row_c1('cost_sheet', 'id', $cost_sheet_id);
	if(!empty($getData))
	{
		$name = $getData->name;
		$cost_type = $getData->cost_type;

		$data = array('name'=>$name, 'customer'=>'', 'conatct_person'=>'', 'payment_terms'=>'', 'sales_person'=>'', 'venue'=>'', 'cost_type'=> $cost_type, 'currency'=>'', 'status' => 'templated', 'created_at' => date('Y-m-d H:i:s'));
		$is_saved = $this->site_model->savedata('cost_sheet', $data);
		$getCatData = $this->site_model->get_rows_c1('cost_sheet_category', 'cost_sheet_id', $cost_sheet_id);

		foreach ($getCatData as $value) {
			$catData = array('cost_sheet_id'=>$is_saved,'cat_id'=>$value['cat_id']);
			$savecat = $this->site_model->savedata('cost_sheet_category',$catData);
			$getSubCatData = $this->site_model->get_rows_c2('costsheet_subcategory','costsheet_id',$cost_sheet_id,'cat_id',$value['cat_id']);

			foreach ($getSubCatData as $key => $subvalue) {
				$catSubData = array('title'=>$subvalue['title'],'costsheet_id'=>$is_saved,'cat_id'=>$subvalue['cat_id']);
				$saveSubcat = $this->site_model->savedata('costsheet_subcategory',$catSubData);
				$getLineData = $this->site_model->get_rows_c1('cost_sheet_line_item','sub_cat_id',$subvalue['id']);
				foreach ($getLineData as $key => $lvalue) {
					$lineData = array('cat_id'=>$value['cat_id'],'sub_cat_id'=>$saveSubcat,'cost_sheet_id'=>$is_saved,'product_name'=>$lvalue['product_name'],'unit_id'=>$lvalue['unit_id'],'quantity'=>$lvalue['quantity'],'unit_cost'=>$lvalue['unit_cost'],'total_cost'=>$lvalue['total_cost'],'o/h'=>$lvalue['o/h'],'selling_price'=>$lvalue['selling_price'], 'status'=>$lvalue['status'],'position'=>$lvalue['position'],'created_at'=>date('Y-m-d H:i:s'));
					$saveline = $this->site_model->savedata('cost_sheet_line_item',$lineData);
				}
			}
		}

		if($is_saved){
			$dt = [];
			$dt['user'] = $this->session->userdata('userid');
			$dt['type'] = "Cost Sheet";
			$dt['status'] = "Created";
			$dt['description'] = $is_saved;
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			redirect('admin/app/manage_template', 'refresh');
		} 
	}
}

public function revised_record()
{

	if($this->input->post())
	{
		$pdata = $this->input->post();

		$getData = $this->site_model->get_row_c1('cost_sheet','id',$pdata['id']);
		
		if($getData->quot_numb) {
			$quot_numb = $getData->quot_numb + 1;
			
		}else{
			$quot_numb = 1;
		}

		if(!empty($getData))
		{
			$name ='';
			$template_Name = explode('-', $getData->name);
			if(count($template_Name)==1){ $name = $template_Name[0].'-Revision-1'; }
			else { $count = $template_Name[2];
			$name = $template_Name[0].'-Revision-'.($count+1); }

			$data = array('name'=>$name,'customer'=>$getData->customer,'conatct_person'=>$getData->conatct_person,'payment_terms'=>$getData->payment_terms,'sales_person'=>$getData->sales_person,'venue'=>$getData->venue,'cost_type'=>$getData->cost_type,'currency'=>$getData->currency,'status'=>1,'created_at'=>date('Y-m-d H:i:s'), 'quotation_number' => $getData->quotation_number, 'quot_numb' => $quot_numb);
			$is_saved = $this->site_model->savedata('cost_sheet',$data);
			$getCatData = $this->site_model->get_rows_c1('cost_sheet_category','cost_sheet_id',$pdata['id']);

			foreach ($getCatData as $value) {
				$catData = array('cost_sheet_id'=>$is_saved,'cat_id'=>$value['cat_id']);
				$savecat = $this->site_model->savedata('cost_sheet_category',$catData);
				$getSubCatData = $this->site_model->get_rows_c2('costsheet_subcategory','costsheet_id',$pdata['id'],'cat_id',$value['cat_id']);

				foreach ($getSubCatData as $key => $subvalue) {
					$catSubData = array('title'=>$subvalue['title'],'costsheet_id'=>$is_saved,'cat_id'=>$subvalue['cat_id']);
					$saveSubcat = $this->site_model->savedata('costsheet_subcategory',$catSubData);
					$getLineData = $this->site_model->get_rows_c1('cost_sheet_line_item','sub_cat_id',$subvalue['id']);
					foreach ($getLineData as $key => $lvalue) {
						$lineData = array('cat_id'=>$value['cat_id'],'sub_cat_id'=>$saveSubcat,'cost_sheet_id'=>$is_saved,'product_name'=>$lvalue['product_name'],'unit_id'=>$lvalue['unit_id'],'quantity'=>$lvalue['quantity'],'unit_cost'=>$lvalue['unit_cost'],'total_cost'=>$lvalue['total_cost'],'o/h'=>$lvalue['o/h'],'selling_price'=>$lvalue['selling_price'], 'status'=>$lvalue['status'],'position'=>$lvalue['position'],'created_at'=>date('Y-m-d H:i:s'));
						$saveline = $this->site_model->savedata('cost_sheet_line_item',$lineData);
					}
				}
			}

			if($is_saved){
				$dt = [];
				$dt['user'] = $this->session->userdata('userid');
				$dt['type'] = "Quotation";
				$dt['status'] = "Revised";
				$dt['description'] = $pdata['id'];
				$timeZone = 'Asia/Dubai';
				date_default_timezone_set($timeZone);
				$dateSrc = date('Y-m-d H:i:s');
				$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$responce['err'] = 0;
				$responce['msg'] = "";
				$responce['data'] = $is_saved;
				echo json_encode($responce); 
				}
			else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		}
	}
	else
	{
		echo 'somthing went wrong!';
	}
}

public function revised_record_csv()
{

	if($this->input->post())
	{
		$pdata = $this->input->post();

		$getData = $this->site_model->get_row_c1('cost_sheet','id',$pdata['id']);
		
		if($getData->quot_numb) {
			$quot_numb = $getData->quot_numb + 1;
			
		}else{
			$quot_numb = 1;
		}

		if(!empty($getData))
		{
			$Mdata = array('name'=>'Revision-'.$getData->name, 'customer'=>$getData->customer, 'conatct_person'=>$getData->conatct_person, 'payment_terms'=>$getData->payment_terms, 'sales_person'=>$getData->sales_person, 'venue'=>$getData->venue, 'cost_type'=>$getData->cost_type, 'currency'=>$getData->currency, 'status'=>1, 'quotation_number' => $getData->quotation_number, 'quot_numb' => $quot_numb, 'project_start_date'=>$getData->project_start_date, 'project_end_date'=>$getData->project_end_date, 'exclusions'=>$getData->exclusions, 'copyright'=>$getData->copyright, 'created_at'=>date('Y-m-d H:i:s'));
			$is_saved = $this->site_model->savedata('cost_sheet',$Mdata);

			if($is_saved) {
				if(isset($_FILES['uploadCSV']['name']))
				{
					$file = $_FILES['uploadCSV']['name'];			
					
					//////////////////file_upload/////////////////////////////
					$filename=time().uniqid().$_FILES['uploadCSV']['name'];
					$url1 = "uploads/quotationpdf/".$filename;
		            move_uploaded_file($_FILES['uploadCSV']['tmp_name'], $url1);
			        /////////////////////////////////////////////////
			    	
			    	$costsheet_id = $is_saved;
			    	$cate_id = '';
			    	$sub_cate_id = '';

					$handle = fopen($url1, "r");
					$c = 0;
					while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
					{
						if($c > 0) {
							$cate_col = $filesop[0];
							$cate_name = $filesop[1];

							if(@$cate_col) {
								if($cate_col == "Sl. No" || $cate_col == "Total For the above" || $cate_col == "VAT @ 5%" || $cate_col == "Total Cost including VAT") {

								}else {
									if($filesop[1]) {
										$cate = $this->site_model->get_id('categories', 'title', $cate_name);
									    if(count($cate) > 0) {
					    				    $cateID = $cate[0]['id'];
					    				}else{
					    					$cadata['title'] = $cate_name;
											$cadata['created_at'] = date('Y-m-d H:i:s');
											$result = $this->site_model->savedata("categories", $cadata);	
											$cateID = $result;
										}

									    $data['cat_id']	= $cateID;
										$data['cost_sheet_id'] = $costsheet_id;
										$result = $this->site_model->savedata("cost_sheet_category", $data);
										$cate_id = $cateID;

										if(@$filesop[2]) {
											$sub_cate_name = $filesop[2];
											$sub_cate_qty = $filesop[3];
											$sub_cate_unit = $filesop[4];
											$lineitem_1 = $filesop[5];
											$lineitem_cost1 = $filesop[6];
											$lineitem_2 = $filesop[7];
											$lineitem_cost2 = $filesop[8];
											$lineitem_3 = $filesop[9];
											$lineitem_cost3 = $filesop[10];
											$lineitem_oh = $filesop[13];

											$data1['cat_id'] = $cate_id;
											$data1['title'] = $sub_cate_name;
											$data1['quantity'] = $sub_cate_qty;
											$data1['unit'] = $sub_cate_unit;
											$data1['costsheet_id'] = $costsheet_id;
											$data1['created_at'] = date('Y-m-d H:i:s');

											$result1 = $this->site_model->savedata("costsheet_subcategory", $data1);
											$sub_cate_id = $result1;

											$unit = $this->site_model->get_id('units', 'name', $data1['unit']);
											if(@$unit) {
												$unitID = $unit[0]['id'];
											}else{
												$unit__data['name'] = $data1['unit'];
												$unit__data['created_at'] = date('Y-m-d H:i:s');
												$unit__result = $this->site_model->savedata("units", $unit__data);
												$unitID = $unit__result;	
											}

											if($lineitem_1 && $lineitem_cost1) {
												$line_data['unit_cost'] = str_replace('AED', '', $lineitem_cost1);
												$line_data['product_name'] = $lineitem_1;
												$line_data['quantity'] = $sub_cate_qty;
												$line_data['unit_id'] = $unitID;
												$line_data['total_cost'] = $line_data['unit_cost'] * $line_data['quantity'];
												$line_data['cat_id'] = $cate_id;
												$line_data['sub_cat_id'] = $sub_cate_id;
												$line_data['cost_sheet_id'] = $costsheet_id;
												$line_data['created_at'] = date('Y-m-d H:i:s');
												$line_data['status'] = 1;
												$line_data['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
												$line_data['selling_price'] = $line_data['total_cost'] / $line_data['o/h'];

												$result3 = $this->site_model->savedata("cost_sheet_line_item", $line_data);
											}if($lineitem_2 && $lineitem_cost2) {
												$line_data2['unit_cost'] = str_replace('AED', '', $lineitem_cost2);
												$line_data2['product_name'] = $lineitem_2;
												$line_data2['quantity'] = $sub_cate_qty;
												$line_data2['unit_id'] = $unitID;
												$line_data2['total_cost'] = $line_data2['unit_cost'] * $line_data2['quantity'];
												$line_data2['cat_id'] = $cate_id;
												$line_data2['sub_cat_id'] = $sub_cate_id;
												$line_data2['cost_sheet_id'] = $costsheet_id;
												$line_data2['created_at'] = date('Y-m-d H:i:s');
												$line_data2['status'] = 1;
												$line_data2['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
												$line_data2['selling_price'] = $line_data2['total_cost'] / $line_data2['o/h'];

												$result3_2 = $this->site_model->savedata("cost_sheet_line_item", $line_data2);
											}if($lineitem_3 && $lineitem_cost3) {
												$line_data3['unit_cost'] = str_replace('AED', '', $lineitem_cost3);
												$line_data3['product_name'] = $lineitem_3;
												$line_data3['quantity'] = $sub_cate_qty;
												$line_data3['unit_id'] = $unitID;
												$line_data3['total_cost'] = $line_data3['unit_cost'] * $line_data3['quantity'];
												$line_data3['cat_id'] = $cate_id;
												$line_data3['sub_cat_id'] = $sub_cate_id;
												$line_data3['cost_sheet_id'] = $costsheet_id;
												$line_data3['created_at'] = date('Y-m-d H:i:s');
												$line_data3['status'] = 1;
												$line_data3['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
												$line_data3['selling_price'] = $line_data3['total_cost'] / $line_data3['o/h'];

												$result3_3 = $this->site_model->savedata("cost_sheet_line_item", $line_data3);
											}
										}
									}else {
										$sub_cate_name = $filesop[2];
										$sub_cate_qty = $filesop[3];
										$sub_cate_unit = $filesop[4];
										$lineitem_1 = $filesop[5];
										$lineitem_cost1 = $filesop[6];
										$lineitem_2 = $filesop[7];
										$lineitem_cost2 = $filesop[8];
										$lineitem_3 = $filesop[9];
										$lineitem_cost3 = $filesop[10];
										$lineitem_oh = $filesop[13];

										$data1['cat_id'] = $cate_id;
										$data1['title'] = $sub_cate_name;
										$data1['quantity'] = $sub_cate_qty;
										$data1['unit'] = $sub_cate_unit;
										$data1['costsheet_id'] = $costsheet_id;
										$data1['created_at'] = date('Y-m-d H:i:s');

										$result1 = $this->site_model->savedata("costsheet_subcategory", $data1);
										$sub_cate_id = $result1;

										$unit = $this->site_model->get_id('units', 'name', $data1['unit']);
										if(@$unit) {
											$unitID = $unit[0]['id'];
										}else{
											$unit__data['name'] = $data1['unit'];
											$unit__data['created_at'] = date('Y-m-d H:i:s');
											$unit__result = $this->site_model->savedata("units", $unit__data);
											$unitID = $unit__result;	
										}


										if($lineitem_1 && $lineitem_cost1) {
											$line_data['unit_cost'] = str_replace('AED', '', $lineitem_cost1);
											$line_data['product_name'] = $lineitem_1;
											$line_data['quantity'] = $sub_cate_qty;
											$line_data['unit_id'] = $unitID;
											$line_data['total_cost'] = $line_data['unit_cost'] * $line_data['quantity'];
											$line_data['cat_id'] = $cate_id;
											$line_data['sub_cat_id'] = $sub_cate_id;
											$line_data['cost_sheet_id'] = $costsheet_id;
											$line_data['created_at'] = date('Y-m-d H:i:s');
											$line_data['status'] = 1;
											$line_data['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
											$line_data['selling_price'] = $line_data['total_cost'] / $line_data['o/h'];

											$result3 = $this->site_model->savedata("cost_sheet_line_item", $line_data);
										}if($lineitem_2 && $lineitem_cost2) {
											$line_data2['unit_cost'] = str_replace('AED', '', $lineitem_cost2);
											$line_data2['product_name'] = $lineitem_2;
											$line_data2['quantity'] = $sub_cate_qty;
											$line_data2['unit_id'] = $unitID;
											$line_data2['total_cost'] = $line_data2['unit_cost'] * $line_data2['quantity'];
											$line_data2['cat_id'] = $cate_id;
											$line_data2['sub_cat_id'] = $sub_cate_id;
											$line_data2['cost_sheet_id'] = $costsheet_id;
											$line_data2['created_at'] = date('Y-m-d H:i:s');
											$line_data2['status'] = 1;
											$line_data2['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
											$line_data2['selling_price'] = $line_data2['total_cost'] / $line_data2['o/h'];

											$result3_2 = $this->site_model->savedata("cost_sheet_line_item", $line_data2);
										}if($lineitem_3 && $lineitem_cost3) {
											$line_data3['unit_cost'] = str_replace('AED', '', $lineitem_cost3);
											$line_data3['product_name'] = $lineitem_3;
											$line_data3['quantity'] = $sub_cate_qty;
											$line_data3['unit_id'] = $unitID;
											$line_data3['total_cost'] = $line_data3['unit_cost'] * $line_data3['quantity'];
											$line_data3['cat_id'] = $cate_id;
											$line_data3['sub_cat_id'] = $sub_cate_id;
											$line_data3['cost_sheet_id'] = $costsheet_id;
											$line_data3['created_at'] = date('Y-m-d H:i:s');
											$line_data3['status'] = 1;
											$line_data3['o/h'] = (@$lineitem_oh) ? $lineitem_oh : 1;
											$line_data3['selling_price'] = $line_data3['total_cost'] / $line_data3['o/h'];

											$result3_3 = $this->site_model->savedata("cost_sheet_line_item", $line_data3);
										}
									}
								}
							}
						}

						$c = $c + 1;
					}
					
					$responce['err'] = 200;
					$responce['msg'] = "Successful Operation!";
					$responce['url'] = base_url('/admin/app/revised_cost_sheet_csv/'.$costsheet_id);
					echo json_encode($responce); 
				}
			}
		}
	}
	else
	{
		echo 'somthing went wrong!';
	}
}

public function approvalStatusChange()
{
	$user_id = $this->session->userdata('userid');
	$query = "SELECT A.name FROM user A WHERE A.id = ".$user_id;
	$customer = $this->db->query($query)->result_array();
	$pdata = $this->input->post();

    if($pdata['approval_status']=='Approved'){
		 $this->form_validation->set_rules('approval_status','Status','trim|required');
		 $this->form_validation->set_rules('approvalJobCode','Job Code','trim|required');
	}
	if($pdata['approval_status']=='Not Approved'){
		 $this->form_validation->set_rules('approval_status','Status','trim|required');
		 $this->form_validation->set_rules('notApprovalReason','Reason','trim|required');
	}

	if ($this->form_validation->run() == FALSE) {
		$err = $this->form_validation->error_array();
		$responce['err'] = 1;
		$responce['msg'] = $err;
		$responce['datas'] = $err;
		echo json_encode($responce);
		exit;
 	}
 	if($pdata['approval_status'] == 'Approved')
	 {
       	$data['approval_status']  	=$pdata['approval_status'];
       	$data['costsheet_id']		=$pdata['cost_sheet_id'];
		$data['job_code']			=$pdata['approvalJobCode'];
		$data['created_at']			=date('Y-m-d H:i:s');
		$result=$this->site_model->savedata("approval_status",$data);
		if($result){
		    $this->sendEmailNotificationApproval($pdata['cost_sheet_id'], $customer);
			$responce['err'] = 0;
			$responce['msg'] = " Status Successfully Updated.";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
 	}
 	if($pdata['approval_status'] == 'Not Approved')
 	{
	 	$data['approval_status']  	=$pdata['approval_status'];
	 	$data['costsheet_id']		=$pdata['cost_sheet_id'];
		$data['reason']				=$pdata['notApprovalReason'];
		$data['created_at']			=date('Y-m-d H:i:s');
		$result=$this->site_model->savedata("approval_status",$data);
		if($result){
			$responce['err'] = 0;
			$responce['msg'] = " Status Successfully Updated.";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
 	}
}

public function quotationStatusChange()
{
	$user_id = $this->session->userdata('userid');
	$pdata = $this->input->post();

	    if(!empty($pdata['quotation_status'])){
			 $this->form_validation->set_rules('quotation_status','Status','trim|required');
			 $this->form_validation->set_rules('quotationComment','Comment','trim|required');
		}
	
		if ($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		 }
		 if($pdata['quotation_status'] == 'Accepted')
		 {
		 	if(!empty($_FILES['uploadPDF']['name']))
			{	
				$type1 = explode(".", $_FILES['uploadPDF']['name']);	
				$type1 = end($type1);
				if(!in_array($type1, array("pdf"))) 
					{
					$responce['err'] = 1;
					$responce['msg'] = array('uploadPDF'=>'Purchase Order Missing');
					$responce['datas'] = array('uploadPDF'=>'Purchase Order Missing');
	                echo json_encode($responce);
	                exit;
	            }else {
					$filename=time().uniqid().$_FILES['uploadPDF']['name'];
					$url1 = "uploads/quotationpdf/".$filename;
	                move_uploaded_file($_FILES['uploadPDF']['tmp_name'], $url1);
	            }

	       	}else{
	       		$responce['err'] = 1;
				$responce['msg'] = array('uploadPDF'=>'Purchase Order Missing');
				$responce['datas'] = array('uploadPDF'=>'Purchase Order Missing');
                echo json_encode($responce);
                exit;
	       	}

	       	$data['quotation_status']  	=$pdata['quotation_status'];
			$data['quotation_pdf']		=(isset($filename)?$filename:'');
			$data['quotation_comment']	=$pdata['quotationComment'];
			$result = $this->Api_model->updateRow("cost_sheet", $data, "id=".$pdata['cost_sheet_id']."");
			if($result){
				$dt = [];
				$dt['user'] = $this->session->userdata('userid');
				$dt['type'] = "Quotation Status";
				$dt['status'] = "Changed";
				$dt['description'] = $pdata['cost_sheet_id'];
				$timeZone = 'Asia/Dubai';
				date_default_timezone_set($timeZone);
				$dateSrc = date('Y-m-d H:i:s');
				$dt['created_at'] = $dateSrc;
				$this->saveLogs($dt);

				$this->sendEmailNotificationAccept($pdata['cost_sheet_id']);
				$responce['err'] = 0;
				$responce['msg'] = " Status Successfully Updated.";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}

		 }
		 if($pdata['quotation_status'] == 'Not Accepted')
		 {
		 	$data['quotation_status']  	=$pdata['quotation_status'];
			$data['quotation_comment']	=$pdata['quotationComment'];
			$result=$this->Api_model->updateRow("cost_sheet",$data,"id=".$pdata['cost_sheet_id']."");
			if($result){
				$responce['err'] = 0;
				$responce['msg'] = " Status Successfully Updated.";
				echo json_encode($responce); 
			}else{
				$error = $this->db->error();
				$responce['err'] = 2;
				$responce['msg'] = $error['message'];
				echo json_encode($responce); 
			}
		 }
	   		
}


public function login()
{

// if admin loggedin redirect to admin dashboard
	
	if($this->session->userdata('is_admin_logged'))
	{
		redirect('admin/app/dashboard');		
	}		
	else
	{	
		if($_POST)
		{
			//print_r($_POST); exit;
			$this->form_validation->set_rules('username','Username','required');	
			$this->form_validation->set_rules('password','Password','required');	
			if($this->form_validation->run()==FALSE)
			{   		   							
				$this->load->view('admin/common/login');					
			}
			else
			{
				$username = trim($this->input->post('username'));
				$password = md5(trim($this->input->post('password')));

				$is_user_logged = $this->site_model->do_login_admin('user','username',$username,'password',$password,'is_active','active'); 


				if($is_user_logged)
				{																
					$user_data = $this->site_model->get_row_c1('user', 'username', $username);
					//echo"<pre>";print_r($user_data); exit;		
					
					if($user_data->user_role_id == 1)
					{
						// set session data 
						$session_data = array(										
						'userfname'				=>$user_data->name,
						'is_admin_logged'		=>TRUE,					
						'userid'				=>$user_data->id,
						'user_role_id'			=>$user_data->user_role_id		
						);
						$this->session->set_userdata($session_data);
						redirect('admin/dashboard');			
					}
					if($user_data->user_role_id == 2)
					{
						// set session data 
						$session_data = array(										
						'userfname'				=>$user_data->name,
						'is_sales_logged'		=>TRUE,					
						'userid'				=>$user_data->id,
						'user_role_id'			=>$user_data->user_role_id		
						);
						$this->session->set_userdata($session_data);
						redirect('admin/dashboard');			
					}
					if($user_data->user_role_id == 3)
					{
						// set session data 
						$session_data = array(										
						'userfname'					=>$user_data->name,
						'is_project_manage_logged'	=>TRUE,					
						'userid'					=>$user_data->id,
						'user_role_id'				=>$user_data->user_role_id		
						);
						$this->session->set_userdata($session_data);
						redirect('admin/dashboard');			
					}
					if($user_data->user_role_id == 4)
					{
						// set session data 
						$session_data = array(										
						'userfname'					=>$user_data->name,
						'is_finance_logged'			=>TRUE,					
						'userid'					=>$user_data->id,
						'user_role_id'				=>$user_data->user_role_id		
						);
						$this->session->set_userdata($session_data);
						redirect('admin/dashboard');			
					}
					if($user_data->user_role_id == 5)
					{
						// print_r($user_data->user_role_id); exit();			
						// set session data 
						$session_data = array(										
						'userfname'					=>$user_data->name,
						'is_cost_estimator_logged'			=>TRUE,					
						'userid'					=>$user_data->id,
						'user_role_id'				=>$user_data->user_role_id		
						);
						$this->session->set_userdata($session_data);
						redirect('admin/dashboard');			
					}								
				}
				else
				{
					$this->session->set_flashdata('error','Username or Password is wrong ! ');
					$this->load->view('admin/common/login');	
				}
			}
		}	
		else
		{
			$this->load->view('admin/common/login');	
		}	
	}		
}

public function changepass() {
    $this->form_validation->set_rules('old_pass','Old Pass','required');	
	$this->form_validation->set_rules('new_pass','New Password','required');
	$this->form_validation->set_rules('confirm_pass','Confirm Password','required|matches[new_pass]');
	
	if($this->form_validation->run() == FALSE) {
		$err = $this->form_validation->error_array();
		$responce['err'] = 1;
		$responce['msg'] = $err;
		$responce['datas'] = $err;
		echo json_encode($responce);
		exit;
	}
	
	if($this->input->post()) {
	    
		$old_pass = $this->input->post('old_pass');
		$new_pass = $this->input->post('new_pass');
		$confirm_pass = $this->input->post('confirm_pass');
		$session_id = $this->session->userdata('userid');

		$que = $this->db->query("select * from user where id='$session_id'");
		$row = $que->row();
	
		if($this->site_model->change_pass($session_id, md5($new_pass))){
			$responce['err'] = 0;
			$responce['msg'] = "Successful changed!";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
}

public function changepassword()
{
	$this->load->view('admin/common/header');
	$this->load->view('admin/common/sidebar');
	$this->load->view('admin/changepassword');
	$this->load->view('admin/common/footer');
}

public function forgotpassword()
{
	$this->load->view('admin/common/forgotpassword');
}

public function forgotpass() {
    
	if($_POST) {
	   // print_r("123"); exit();    
		$email = $this->input->post('email');
		
		$session_id = $this->session->userdata('userid');

		$que = $this->db->query("select user_password, email from user where email='$email'");
		
		$row = $que->row();
		
		if(@$row) {
		    $user_email=$row->email;
		
    	    $this->load->library('email');
    	    
    	    if((!strcmp($email, $user_email))){
    			$pass=$row->user_password;
    			
    			/*Mail Code*/
    			$to = $user_email;
    			$subject = "Password";
    			$message = "Your password is $pass .";
                // print_r($user_email); exit();
            	$result = $this->email
    						    ->from('costestimate@projexuae.com')
    						    ->reply_to('costestimate@projexuae.com')
    						    ->to($user_email)
    						    ->subject($subject)
    						    ->message($message)
    						    ->send();
    			
    			redirect('admin/app/login');
    		}
		}else{
		    $this->session->set_flashdata('error','Email Id is wrong ! ');
			$this->load->view('admin/common/forgotpassword');
		}
	}
}

function upload_files($path, $title, $files)
    {
    	//print_r($files); exit;
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'jpeg|jpg|png|pdf|docx',
            'overwrite'     => 1,                       
        );

        $this->load->library('upload', $config);

        $images = array();
        foreach ($files['name'] as $key => $image) {
            $_FILES['image[]']['name']= $files['name'][$key];
            $_FILES['image[]']['type']= $files['type'][$key];
            $_FILES['image[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['image[]']['error']= $files['error'][$key];
            $_FILES['image[]']['size']= $files['size'][$key];

            $fileName = $title.'_'.$image;

            

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('image[]')) {
            	$images[] = array('img_name' => $this->upload->data('file_name'),'file_type'=> $this->upload->data('file_ext'));
                 //return array();
            } else {
                return false;
            }
        }

        return $images;
    }

public function costSheetCategory()
{
	$response = array();
	$cats_id =array();
	$cost_cat = $this->db->query("SELECT cat_id from cost_sheet_category WHERE cost_sheet_id = ".$_POST['id']."")->result_array();
	foreach ($cost_cat as $key => $value){
					$cats_id[]=$value['cat_id']; }
			if(!empty($cats_id))
			{
			 $sql = "SELECT id, title from categories WHERE id NOT IN (".implode(',', $cats_id).")";
			 $datas = $this->db->query($sql)->result_array();

			 echo json_encode($datas); exit;
			}
			if(empty($cats_id))
			{
			 $sql = "SELECT id, title from categories";
			 $datas = $this->db->query($sql)->result_array();

			 echo json_encode($datas); exit;
			}
			
}

public function getDocumentLineItem()
{
	$response = array();
	$data = $this->site_model->get_rows_c1('document','line_item_id',$_POST['id']);
	echo json_encode($data); exit;
}

public function manage_currency()
{
	if($this->input->post())
	{
		$this->form_validation->set_rules('convent_value','Value','trim|required|numeric');

		if($this->form_validation->run() == FALSE) {
			$err = $this->form_validation->error_array();
			$responce['err'] = 1;
			$responce['msg'] = $err;
			$responce['datas'] = $err;
			echo json_encode($responce);
			exit;
		}
		$data['convert_value']					=$_POST['convent_value'];
		$data['updated_at']						=date('Y-m-d H:i:s');
		$result=$this->site_model->update_row_c1("convert_usd_to_aed", "id", 1, $data);	
		if($result){
			$dt = [];
			$dt['user'] = $this->session->userdata('userid');
			$dt['type'] = "Currency";
			$dt['status'] = "Updated";
			$dt['description'] = $data['convert_value'];
			$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);

			$responce['err'] = 0;
			$responce['msg'] = "";
			echo json_encode($responce); 
		}else{
			$error = $this->db->error();
			$responce['err'] = 2;
			$responce['msg'] = $error['message'];
			echo json_encode($responce); 
		}
	}
	else
	{
		$data['currency'] = $this->site_model->get_rows('convert_usd_to_aed'); 
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/manage_currency',$data);
		$this->load->view('admin/common/footer');
	}
} 

public function update_comment()
{
	if ($_POST) {
	  $pdata = $this->input->post();
	  $data['comment'] = $pdata['data'];
	  $data['updated_at']= date('Y-m-d H:i:s');
	  $is_update = $this->site_model->update_row_c1('costsheet_comment','costsheet_id',$pdata['id'],$data);
	  if($is_update)
	  {
	  	echo 1;
	  }
	  else{
	  	echo 0;
	  }
	}
}


public function delete_category_record()
{
	$table_name = $this->input->post('table');
	$id = $this->input->post('id');
	$cat_id = $this->input->post('cat_id');
    $costsheetid = $this->input->post('cost_sheet_id');
	$update_status = $this->site_model->delete_row_c1($table_name,'id',$id);
	$is_deletes = $this->site_model->delete_rows_c1('costsheet_subcategory','costsheet_id',$costsheetid,'cat_id',$cat_id);
	$is_delete = $this->site_model->delete_rows_c1('cost_sheet_line_item','cost_sheet_id',$costsheetid,'cat_id',$cat_id);
	$response = array();

	if($update_status)
	{
		$response = array('status'=>1);
	}
	else
	{
		$response = array('status'=>0);
	}

	echo json_encode($response);
}

public function delete_subcategory_record()
{
	$table_name = $this->input->post('table');
	$id = $this->input->post('id');
	$costsheetid = $this->input->post('cost_sheet_id');
	$update_status = $this->site_model->delete_row_c1($table_name,'id',$id);
	$is_delete = $this->site_model->delete_rows_c1('cost_sheet_line_item','cost_sheet_id',$costsheetid,'sub_cat_id',$id);
	$response = array();

	if($update_status)
	{
		$response = array('status'=>1);
	}
	else
	{
		$response = array('status'=>0);
	}

	echo json_encode($response);
}
public function delete_record()
{
	$table_name = $this->input->post('table');
	$id = $this->input->post('id');

	$delete_data = $this->site_model->get_rows_c1($table_name, 'id', $id);
	$user_id = $this->session->userdata('userid');
	
	if ($table_name) {
		if ($table_name == "logs") {
			# code...
		}else if($table_name == "logo") {
			$logo_name = $delete_data[0]['name'];
			$this->load->helper('file');
			$path = "admin_assets/images/logo/";
			delete_files($path.$logo_name, TRUE);
		}else{
			$dt = [];
			$dt['user'] = $user_id;
			$dt['status'] = "Deleted";
			
		 	if ($table_name == 'user') {
		 		$dt['type'] = 'User';
		 		$dt['description'] = $delete_data[0]['username'];
		 	}else if ($table_name == 'products') {
		 		$dt['type'] = 'Product';
		 		$dt['description'] = $delete_data[0]['product_name'];
		 	}else if ($table_name == 'categories') {
		 		$dt['type'] = 'Category';
		 		$dt['description'] = $delete_data[0]['title'];
		 	}else if ($table_name == 'units') {
		 		$dt['type'] = 'Unit';
		 		$dt['description'] = $delete_data[0]['name'];
		 	}else if ($table_name == 'customer') {
		 		$dt['type'] = 'Customer';
		 		$dt['description'] = $delete_data[0]['company_name'];
		 	}else if ($table_name == 'payment_terms') {
		 		$dt['type'] = 'Payment Terms';
		 		$dt['description'] = $delete_data[0]['title'];
		 	}else if ($table_name == 'cost_type') {
		 		$dt['type'] = 'Job Type';
		 		$dt['description'] = $delete_data[0]['title'];
		 	}else if ($table_name == 'venue') {
		 		$dt['type'] = 'Venue';
		 		$dt['description'] = $delete_data[0]['title'];
		 	}else if ($table_name == 'exclusions') {
		 		$dt['type'] = 'Exclusion';
		 		$dt['description'] = $delete_data[0]['title'];
		 	}else if ($table_name == 'contact_person') {
		 		$dt['type'] = 'Contact Person';
		 		$dt['description'] = $delete_data[0]['name'];
		 	}else if ($table_name == 'salesperson') {
		 		$dt['type'] = 'Sales Person';
		 		$dt['description'] = $delete_data[0]['name'];
		 	}else if ($table_name == 'salesperson') {
		 		$dt['type'] = 'Sales Person';
		 		$dt['description'] = $delete_data[0]['name'];
		 	}else if ($table_name == 'cost_sheet') {
		 		$dt['type'] = 'Cost Sheet';
		 		$dt['description'] = $delete_data[0]['id'];
		 	}else if ($table_name == 'terms_conditions') {
		 		$dt['type'] = 'Terms and Conditions';
		 		$dt['description'] = $delete_data[0]['description'];
		 	}else if ($table_name == 'copyright') {
		 		$dt['type'] = 'Copyright';
		 		$dt['description'] = $delete_data[0]['description'];
		 	}else if ($table_name == 'validity') {
		 		$dt['type'] = 'Validity';
		 		$dt['description'] = $delete_data[0]['description'];
		 	}else if ($table_name == 'coverletter') {
		 		$dt['type'] = 'Coverletter';
		 		$dt['description'] = $delete_data[0]['description'];
		 	}
		 	
		 	$timeZone = 'Asia/Dubai';
			date_default_timezone_set($timeZone);
			$dateSrc = date('Y-m-d H:i:s');
			$dt['created_at'] = $dateSrc;
			$this->saveLogs($dt);
		}
	}

	$update_status = $this->site_model->delete_row_c1($table_name, 'id', $id);
	$response = array();

	if($update_status)
	{
		$response = array('status'=>1);
	}
	else
	{
		$response = array('status'=>0);
	}

	echo json_encode($response);
}
public function delete2_record()
{
	$table_name = $this->input->post('table');
	$id = $this->input->post('id');

	$update_status = $this->site_model->delete_row_c1($table_name, 'cost_sheet_id', $id);
	$response = array();

	if($update_status)
	{
		$response = array('status'=>1);
	}
	else
	{
		$response = array('status'=>0);
	}

	echo json_encode($response);
}

public function logout()
{			
	$this->session->unset_userdata('is_admin_logged');	
	$this->session->unset_userdata('is_sales_logged');
	$this->session->unset_userdata('is_finance_logged');	
	$this->session->unset_userdata('is_project_manage_logged');	
	$this->session->unset_userdata('userid');
	$this->session->unset_userdata('userfname');
	redirect('admin/app/login','refresh');
}

public function summery_Pdf()
{
	$pdata = $this->input->post();
	$user_id = $this->session->userdata('userid');
	$cost_sheet_id = ($this->input->post('costsheet_id') ? $this->input->post('costsheet_id') : $this->uri->segment(4));
	
	$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

	$data['costSheetTotal'] = $this->db->query($query)->result();
	$costSheetData = $data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
    $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
	$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
	$data['product']		= $this->site_model->get_rows('products');
	$data['customers']		= $this->site_model->get_rows('customer');
	
	$data['copyrights']		= $this->site_model->get_rows('copyright');
	$data['terms']		= $this->site_model->get_rows('terms_conditions');
	$data['validity']		= $this->site_model->get_rows('validity');
	$data['coverletter']		= $this->site_model->get_rows('coverletter');
	if(@$data['coverletter'][0]) {
	    $cover = $data['coverletter'][0]['description'];
        $data['pdf_name'] = get_single_col_value('salesperson','id',$costSheetData->sales_person,'name');
	    $data['pdf_email'] = get_single_col_value('salesperson','id',$costSheetData->sales_person,'email');
	    $_str = str_replace('$salespersonName', $data['pdf_name'], $cover);
	    $data['cover'] = str_replace('$salespersonEmail', $data['pdf_email'], $_str);
	}else{
	    $data['cover'] = '';
	}
	
	$data['salesperson']	= $this->site_model->get_rows('salesperson');
	$data['venue']			= $this->site_model->get_rows('venue');
	$data['cost_type']		= $this->site_model->get_rows('cost_type');
	$data['units']			= $this->site_model->get_rows('units');
	$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);

	$dt = $data['costSheetData'];
	$exclusions = $dt->exclusions;

	if (@$exclusions) {
		$diff_data = explode(",", $exclusions);
		$arr = [];

		if (@$diff_data) {
			foreach ($diff_data as $key => $value) {
				$d = $this->site_model->get_row_c1('exclusions', 'id', $value);
				$arr[] = array(
					'id' => $d->id,
					'title' => $d->title,
					'description' => $d->description
				);
			}
		}
	}

	$data['exclusions'] = $arr;

    $date = getdate();
    $year = $date['year'];

	$mpdf = new \Mpdf\Mpdf();
    $html = $this->load->view('admin/costsheetpdf.php',$data,true);
    $mpdf->AddPage(); 
    $mpdf->WriteHTML($html);
    $mpdf->Output('QT/S-' . $costSheetData->quot_numb . '/'. $year .'.pdf','D');
}

public function job_summery_Pdf()
{
	$pdata = $this->input->post();
	$user_id = $this->session->userdata('userid');
	$cost_sheet_id = ($this->input->post('costsheet_id') ? $this->input->post('costsheet_id') : $this->uri->segment(4));
	
	$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

	$data['costSheetTotal'] = $this->db->query($query)->result();
	$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
    $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
	$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
	$data['product']		= $this->site_model->get_rows('products');
	$data['customers']		= $this->site_model->get_rows('customer');
	
	$data['copyrights']		= $this->site_model->get_rows('copyright');
	$data['terms']		= $this->site_model->get_rows('terms_conditions');
	$data['validity']		= $this->site_model->get_rows('validity');
	$data['coverletter']		= $this->site_model->get_rows('coverletter');
	
	$data['salesperson']	= $this->site_model->get_rows('salesperson');
	$data['venue']			= $this->site_model->get_rows('venue');
	$data['cost_type']		= $this->site_model->get_rows('cost_type');
	$data['units']			= $this->site_model->get_rows('units');
	$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);

	$dt = $data['costSheetData'];
	$exclusions = $dt->exclusions;

	if (@$exclusions) {
		$diff_data = explode(",", $exclusions);
		$arr = [];

		if (@$diff_data) {
			foreach ($diff_data as $key => $value) {
				$d = $this->site_model->get_row_c1('exclusions', 'id', $value);
				$arr[] = array(
					'id' => $d->id,
					'title' => $d->title,
					'description' => $d->description
				);
			}
		}
	}

	$data['exclusions'] = $arr;

	$mpdf = new \Mpdf\Mpdf();
    $html = $this->load->view('admin/jobsheetpdf.php',$data,true);
    $mpdf->AddPage(); 
    $mpdf->WriteHTML($html);
    $mpdf->Output('jobsheetpdf.pdf','D');
}

public function job_summery_details_Pdf()
{
	$pdata = $this->input->post();
	$user_id = $this->session->userdata('userid');
	$cost_sheet_id =$this->uri->segment(4);
	$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
	$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

	$data['costSheetTotal'] = $this->db->query($query)->result();
	$data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
    $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
	$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
	$data['product']		= $this->site_model->get_rows('products');
	$data['customers']		= $this->site_model->get_rows('customer');
	$data['salesperson']	= $this->site_model->get_rows('salesperson');
	$data['venue']			= $this->site_model->get_rows('venue');
	$data['cost_type']		= $this->site_model->get_rows('cost_type');
	$data['units']			= $this->site_model->get_rows('units');
	$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);

    $data['copyrights']		= $this->site_model->get_rows('copyright');
	$data['terms']		= $this->site_model->get_rows('terms_conditions');
	$data['validity']		= $this->site_model->get_rows('validity');
	$data['coverletter']		= $this->site_model->get_rows('coverletter');

	$dt = $data['costSheetData'];
	$exclusions = $dt->exclusions;

	if (@$exclusions) {
		$diff_data = explode(",", $exclusions);
		$arr = [];

		if (@$diff_data) {
			foreach ($diff_data as $key => $value) {
				$d = $this->site_model->get_row_c1('exclusions', 'id', $value);
				$arr[] = array(
					'id' => $d->id,
					'title' => $d->title,
					'description' => $d->description
				);
			}
		}
	}

	$data['exclusions'] = $arr;
	
	$mpdf = new \Mpdf\Mpdf();
    $html = $this->load->view('admin/jobsheetdetailpdf.php',$data,true);
    $mpdf->WriteHTML($html);
    $mpdf->Output('jobsheetdetailpdf.pdf','D');
}

public function summery_details_Pdf()
{
	$pdata = $this->input->post();
	$user_id = $this->session->userdata('userid');
	$cost_sheet_id =$this->uri->segment(4);
	$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
	$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

	$data['costSheetTotal'] = $this->db->query($query)->result();
	$costSheetData = $data['costSheetData']  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
    $data['cost_sheet_cat'] = $this->db->query($sql)->result_array();
	$data['categories']		= $this->site_model->get_rows_c1('categories','parent_id',0);
	$data['product']		= $this->site_model->get_rows('products');
	$data['customers']		= $this->site_model->get_rows('customer');
	$data['salesperson']	= $this->site_model->get_rows('salesperson');
	$data['venue']			= $this->site_model->get_rows('venue');
	$data['cost_type']		= $this->site_model->get_rows('cost_type');
	$data['units']			= $this->site_model->get_rows('units');
	$data['convertCost']	= $this->site_model->get_row_c1('convert_usd_to_aed','id',1);

    $data['copyrights']		= $this->site_model->get_rows('copyright');
	$data['terms']		= $this->site_model->get_rows('terms_conditions');
	$data['validity']		= $this->site_model->get_rows('validity');
	$data['coverletter']		= $this->site_model->get_rows('coverletter');
    
    if(@$data['coverletter'][0]) {
	    $cover = $data['coverletter'][0]['description'];
        $data['pdf_name'] = get_single_col_value('salesperson','id',$costSheetData->sales_person,'name');
	    $data['pdf_email'] = get_single_col_value('salesperson','id',$costSheetData->sales_person,'email');
	    
	    $_str = str_replace('$salespersonName', $data['pdf_name'], $cover);
	    $data['cover'] = str_replace('$salespersonEmail', $data['pdf_email'], $_str);
	}else{
	    $data['cover'] = '';
	}
	
	$dt = $data['costSheetData'];
	$exclusions = $dt->exclusions;

	if (@$exclusions) {
		$diff_data = explode(",", $exclusions);
		$arr = [];

		if (@$diff_data) {
			foreach ($diff_data as $key => $value) {
				$d = $this->site_model->get_row_c1('exclusions', 'id', $value);
				$arr[] = array(
					'id' => $d->id,
					'title' => $d->title,
					'description' => $d->description
				);
			}
		}
	}

	$data['exclusions'] = $arr;
	
	$date = getdate();
    $year = $date['year'];
	
	$mpdf = new \Mpdf\Mpdf();
    $html = $this->load->view('admin/costsheetDetailspdf.php',$data,true);
    $mpdf->WriteHTML($html);
    $mpdf->Output('QT/S-' . $costSheetData->quot_numb . '/'. $year .'.pdf','D');
}

	function summery_excel()
	{
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);
		$cost_sheet_id =$this->input->post('costsheet_id');
		$costSheetData  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";
		$costSheetTotal = $this->db->query($query)->result_array();
        $cost_sheet_cat= $this->db->query($sql)->result_array();

        $customerData = $this->db->query('SELECT (SELECT company_name FROM customer WHERE id=cost_sheet.customer) as customer, (SELECT address FROM customer WHERE id=cost_sheet.customer) as addreess, (SELECT name FROM contact_person WHERE id=cost_sheet.conatct_person) as contact_person, (SELECT title FROM payment_terms WHERE id=cost_sheet.payment_terms) as payment_terms, (SELECT title FROM venue WHERE id=cost_sheet.venue) as venue FROM `cost_sheet` WHERE id = '.$cost_sheet_id.'')->row();

        $tempalateData = array('Customer Name','Customer address','Contact person','Terms of payment','Venue');
        for ($i=0; $i < count($tempalateData); $i++) { 
        	$object->getActiveSheet()->setCellValueByColumnAndRow($i, 1, $tempalateData[$i]);
        }
        if($customerData)
        {
        	$object->getActiveSheet()->setCellValueByColumnAndRow(0, 2, $customerData->customer);
        	$object->getActiveSheet()->setCellValueByColumnAndRow(1, 2, $customerData->addreess);
        	$object->getActiveSheet()->setCellValueByColumnAndRow(2, 2, $customerData->contact_person);
        	$object->getActiveSheet()->setCellValueByColumnAndRow(3, 2, $customerData->payment_terms);
        	$object->getActiveSheet()->setCellValueByColumnAndRow(4, 2, $customerData->venue);
        }

		$i = 4; 
		foreach ($cost_sheet_cat as $value) {
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $value['title']);
			if(!empty($value['sumTotalCost'])) {
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $i, 'Price:'.$costSheetData->currency.' '.number_format(round($value['sumSellingCost'],0,PHP_ROUND_HALF_UP),2,'.',','));
			}
		 	$i++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Costsheet Summary Excel.xls"');
		$object_writer->save('php://output');
	}

	function summery_subcat_excel() {
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);
		$table_columns = array('Customer Name','Customer address','Contact person','Terms of payment','Venue');
		$column = 0;
	  	foreach($table_columns as $field) {
	   		$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
	   		$column++;
	  	}

		$cost_sheet_id =$this->input->post('costsheet_id');
		$costSheetData  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);

		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$cost_sheet_cat = $this->db->query($sql)->result_array();

		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$costSheetTotal = $this->db->query($query)->result_array();
	    $customerData = $this->db->query('SELECT (SELECT company_name FROM customer WHERE id=cost_sheet.customer) as customer, (SELECT address FROM customer WHERE id=cost_sheet.customer) as addreess, (SELECT name FROM contact_person WHERE id=cost_sheet.conatct_person) as contact_person, (SELECT title FROM payment_terms WHERE id=cost_sheet.payment_terms) as payment_terms, (SELECT title FROM venue WHERE id=cost_sheet.venue) as venue FROM `cost_sheet` WHERE id = '.$cost_sheet_id.'')->row();

	    if($customerData) {
	    	$object->getActiveSheet()->setCellValueByColumnAndRow(0, 2, $customerData->customer);
	    	$object->getActiveSheet()->setCellValueByColumnAndRow(1, 2, $customerData->addreess);
	    	$object->getActiveSheet()->setCellValueByColumnAndRow(2, 2, $customerData->contact_person);
	    	$object->getActiveSheet()->setCellValueByColumnAndRow(3, 2, $customerData->payment_terms);
	    	$object->getActiveSheet()->setCellValueByColumnAndRow(4, 2, $customerData->venue);
	    }
		$i=4; 
		foreach ($cost_sheet_cat as $value) {
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $value['title']);

			$query = "select cE.id, cE.title, cE.quantity, cE.unit, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$cost_sheet_id."' AND cE.cat_id = '".$value['id']."'";
	       	$subCategory= $this->db->query($query)->result_array();
	       	$j=$i+1; 
	       	foreach ($subCategory as $key => $subvalue) {  
	   	   		$lineItems = $this->site_model->get_rows_c2('cost_sheet_line_item','cost_sheet_id',$cost_sheet_id,'sub_cat_id',$subvalue['id']);
	   	   		$object->getActiveSheet()->setCellValueByColumnAndRow(1, $j, $subvalue['title']);

	   	   		$object->getActiveSheet()->setCellValueByColumnAndRow(3, $j, $subvalue['quantity']);
	   	   		$object->getActiveSheet()->setCellValueByColumnAndRow(4, $j, $subvalue['unit']);

	   	   		if($subvalue['sumTotalCost']) {
					$object->getActiveSheet()->setCellValueByColumnAndRow(6, $j, 'Price:'.$costSheetData->currency.' '.number_format(round($subvalue['sumSellingCost'],0,PHP_ROUND_HALF_UP),2,'.',','));
	   	   		}
				
				$i=$j+1;
				$j++;
			}
			$i++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
  		header('Content-Type: application/vnd.ms-excel');
  		header('Content-Disposition: attachment;filename="Data.xls"');
  		$object_writer->save('php://output');
	}

	function action()
	{
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);
		$cost_sheet_id =$this->input->post('costsheet_id');
		$costSheetData  = $this->site_model->get_row_c1('cost_sheet','id',$cost_sheet_id);
		$sql="SELECT *, cost_sheet_category.id as cat_ids, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE cat_id = cost_sheet_category.cat_id AND cost_sheet_line_item.cost_sheet_id = ".$cost_sheet_id.") as sumSellingCost FROM cost_sheet_category INNER JOIN categories ON cost_sheet_category.cat_id = categories.id WHERE cost_sheet_category.cost_sheet_id = '".$cost_sheet_id."' AND cost_sheet_category.sub_cat_id IS NULL";
		$query = "SELECT Sum(total_cost) as totalCostSum, SUM(selling_price) as sellingPriceSum from cost_sheet_line_item where cost_sheet_id='".$cost_sheet_id."'";

		$costSheetTotal = $this->db->query($query)->result_array();
        $cost_sheet_cat= $this->db->query($sql)->result_array();

        $customerData = $this->db->query('SELECT (SELECT company_name FROM customer WHERE id=cost_sheet.customer) as customer, (SELECT address FROM customer WHERE id=cost_sheet.customer) as addreess, (SELECT name FROM contact_person WHERE id=cost_sheet.conatct_person) as contact_person, (SELECT title FROM payment_terms WHERE id=cost_sheet.payment_terms) as payment_terms, (SELECT title FROM venue WHERE id=cost_sheet.venue) as venue FROM `cost_sheet` WHERE id = '.$cost_sheet_id.'')->row();

        $tempalateData = array('Customer Name','Customer address','Contact person','Terms of payment','Venue');
        for ($i=0; $i < count($tempalateData); $i++) { 
        	$object->getActiveSheet()->setCellValueByColumnAndRow($i, 1, $tempalateData[$i]);
        }
        if($customerData)
        {
        	$object->getActiveSheet()->setCellValueByColumnAndRow(0, 2, $customerData->customer);
        	$object->getActiveSheet()->setCellValueByColumnAndRow(1, 2, $customerData->addreess);
        	$object->getActiveSheet()->setCellValueByColumnAndRow(2, 2, $customerData->contact_person);
        	$object->getActiveSheet()->setCellValueByColumnAndRow(3, 2, $customerData->payment_terms);
        	$object->getActiveSheet()->setCellValueByColumnAndRow(4, 2, $customerData->venue);
        }
		foreach($costSheetTotal as $field)
		{
			if(!empty($field['totalCostSum']))
			{
				// $object->getActiveSheet()->setCellValueByColumnAndRow(4, 4, 'Cost:'.$costSheetData->currency.' '.$field['totalCostSum']);
				// $object->getActiveSheet()->setCellValueByColumnAndRow(5, 4, 'Average O/H:'.round($field['totalCostSum']/$field['sellingPriceSum'],2));
				$object->getActiveSheet()->setCellValueByColumnAndRow(6, 4, 'Price:'.$costSheetData->currency.' '.number_format(round($field['sellingPriceSum'],0,PHP_ROUND_HALF_UP),2,'.',','));
			}
			
		}
		$i=5; foreach ($cost_sheet_cat as $value) {
				$object->getActiveSheet()->setCellValueByColumnAndRow(0, $i, $value['title']);
				if(!empty($value['sumTotalCost']))
				{
			 //    $object->getActiveSheet()->setCellValueByColumnAndRow(4, $i, 'Cost:'.$costSheetData->currency.' '.$value['sumTotalCost']);
				// $object->getActiveSheet()->setCellValueByColumnAndRow(5, $i, 'Average O/H:'.round($value['sumTotalCost']/$value['sumSellingCost'],2));
				$object->getActiveSheet()->setCellValueByColumnAndRow(6, $i, 'Price:'.$costSheetData->currency.' '.number_format(round($value['sumSellingCost'],0,PHP_ROUND_HALF_UP),2,'.',','));
				}
				

				$query = "select cE.id, cE.title, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$cost_sheet_id."' AND cE.cat_id = '".$value['id']."'";
               $subCategory= $this->db->query($query)->result_array();
               $j=$i+1; foreach ($subCategory as $key => $subvalue) {  
           	   $lineItems = $this->site_model->get_rows_c2('cost_sheet_line_item','cost_sheet_id',$cost_sheet_id,'sub_cat_id',$subvalue['id']);
           	   	$object->getActiveSheet()->setCellValueByColumnAndRow(0, $j, $subvalue['title']);
           	   	if($subvalue['sumTotalCost'])
           	   	{
			 //    $object->getActiveSheet()->setCellValueByColumnAndRow(4, $j, 'Cost:'.$costSheetData->currency.' '.$subvalue['sumTotalCost']);
				// $object->getActiveSheet()->setCellValueByColumnAndRow(5, $j, 'Average O/H:'.round($subvalue['sumTotalCost']/$subvalue['sumSellingCost'],2));
				$object->getActiveSheet()->setCellValueByColumnAndRow(6, $j, 'Price:'.$costSheetData->currency.' '.number_format(round($subvalue['sumSellingCost'],0,PHP_ROUND_HALF_UP),2,'.',','));
           	   	}
                $j++;           	
				if(!empty($lineItems))
				{
					$object->getActiveSheet()->setCellValueByColumnAndRow(0, $j, 'DESCRIPTION');
					$object->getActiveSheet()->setCellValueByColumnAndRow(1, $j, 'QTY');
					$object->getActiveSheet()->setCellValueByColumnAndRow(2, $j, 'UNIT');
					$object->getActiveSheet()->setCellValueByColumnAndRow(3, $j, 'COST');
					$object->getActiveSheet()->setCellValueByColumnAndRow(4, $j, 'TOTAL COST');
					$object->getActiveSheet()->setCellValueByColumnAndRow(5, $j, 'O/H');
					$object->getActiveSheet()->setCellValueByColumnAndRow(6, $j, 'PRICE');
				}
				$k=$j+1; foreach($lineItems as $lineItem)
				{    
					


					$object->getActiveSheet()->setCellValueByColumnAndRow(0, $k, $lineItem['product_name']);
					$object->getActiveSheet()->setCellValueByColumnAndRow(1, $k, $lineItem['quantity']);
					$object->getActiveSheet()->setCellValueByColumnAndRow(2, $k, get_single_col_value('units','id',$lineItem['unit_id'],'name'));
					$object->getActiveSheet()->setCellValueByColumnAndRow(3, $k, $lineItem['unit_cost']);
					$object->getActiveSheet()->setCellValueByColumnAndRow(4, $k, $lineItem['total_cost']);
					$object->getActiveSheet()->setCellValueByColumnAndRow(5, $k, $lineItem['o/h']);
					$object->getActiveSheet()->setCellValueByColumnAndRow(6, $k, $lineItem['selling_price']);
				$k++; 				
				$j=$k+1; 
			}
			$i=$j+1;
		}
		 $i++;
		}
		

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Costsheet Data.xls"');
		$object_writer->save('php://output');
	}


	public function sendEmailNotification($costsheetid,$userData)
	{
		$this->load->library('email');
		$subject = 'Quotation genrated';
        $adminDate = $this->site_model->get_rows_c1('user','user_role_id',1);
        if(!empty($userData))
        {
        	$message = 'Dear '.$userData->name.',
			A quotation that you are assigned to has been generated. Please check the cost estimator application now. 
			To download the Summary, please https://projexcost.com/admin/app/summery_Pdf/'.$costsheetid.' click here.
			To download the Detailed Quotation, please https://projexcost.com/admin/app/summery_details_Pdf/'.$costsheetid.' click here.';
        	$result = $this->email
						    ->from('costestimate@projexuae.com')
						    ->reply_to('costestimate@projexuae.com')
						    ->to($userData->email)
						    ->subject($subject)
						    ->message($message)
						    ->send();
        }
            
            $message = 'Dear a,
			A quotation that you are assigned to has been generated. Please check the cost estimator application now. 
			To download the Summary, please https://projexcost.com/admin/app/summery_Pdf/'.$costsheetid.' click here.
			To download the Detailed Quotation, please https://projexcost.com/admin/app/summery_details_Pdf/'.$costsheetid.' click here.';
        	$result = $this->email
						    ->from('costestimate@projexuae.com')
						    ->reply_to('costestimate@projexuae.com')
						    ->to("kingfullstack@yandex.com")
						    ->subject($subject)
						    ->message($message)
						    ->send();
						    
        if(!empty($adminDate))
        {
        	$message = 'Dear Admin,
			A quotation that you are assigned to has been generated. Please check the cost estimator application now. 
			To download the Summary, please https://projexcost.com/admin/app/summery_Pdf/'.$costsheetid.' click here.
			To download the Detailed Quotation, please https://projexcost.com/admin/app/summery_details_Pdf/'.$costsheetid.' click here.';

        	foreach ($adminDate as $key => $value) {
        		$result = $this->email
						    ->from('costestimate@projexuae.com')
						    ->reply_to('costestimate@projexuae.com')
						    ->to($value['email'])
						    ->subject($subject)
						    ->message($message)
						    ->send();
        	}
       
        }
	}

	public function updateLineItemPostion()
	{
		$pdata = $this->input->post();
		$user_id = $this->session->userdata('userid');

		if(isset($pdata['update']))
		{
			$datas=array();

			foreach ($pdata['position'] as $positions) {

				if(!empty($positions[1]) && !empty($positions[0]))
				{
					$data['position']		= $positions[1];
					$data['updated_at']	= date('Y-m-d H:i:s');
					$updated = $this->site_model->update_row_c1('cost_sheet_line_item','id',$positions[0], $data);
				}

					
			}

			exit('sucess');
		}
	}

	public function sendEmailNotificationAccept($costsheetid)
	{
		$this->load->library('email');
		$subject = 'Quotation Accepted';
        $financeUser = $this->site_model->get_rows_c1('user','user_role_id',4);
        
        $message = 'A quotation has been accepted by the customer. Please approve the status and update the job code if you accept the terms. 
                    Quotaton Number:  '.$costsheetid.'
                    Please follow this link to update status:
                    https://projexcost.com/admin/app/genrated_view_cost_sheet/'.$costsheetid.'
                    ';

        if(!empty($financeUser))
        {
        	foreach ($financeUser as $key => $value) {

        		$result = $this->email
						    ->from('costestimate@projexuae.com')
						    ->reply_to('costestimate@projexuae.com')
						    ->to($value['email'])
						    ->subject($subject)
						    ->message($message)
						    ->send();
        	}
        }
		$result = $this->email
						    ->from('costestimate@projexuae.com')
						    ->reply_to('costestimate@projexuae.com')
						    ->to('nebiyu@gmail.com')
						    ->subject($subject)
						    ->message($message)
						    ->send();

		
		$result = $this->email
						    ->from('costestimate@projexuae.com')
						    ->reply_to('costestimate@projexuae.com')
						    ->to('kingfullstack@yandex.com')
						    ->subject($subject)
						    ->message($message)
						    ->send();

	}

    public function sendEmailNotificationApproval($costsheetid, $customer)
	{
		$this->load->library('email');
		$subject = 'Quotation approved';
        $financeUser = $this->site_model->get_rows_c1('user','user_role_id',4);
        
       $message = 'Quotation number '.$costsheetid.' for customer '.$customer[0]['name'].' has been approved.
                    Please click here and update actual costs 
                    https://projexcost.com/admin/app/genrated_view_job/'.$costsheetid.'
                    ';
		
		$result = $this->email
						    ->from('costestimate@projexuae.com')
						    ->reply_to('costestimate@projexuae.com')
						    ->to('nebiyu@solarisdubai.com')
						    ->subject($subject)
						    ->message($message)
						    ->send();

	}
	
	public function sendEmailNotificationsubmitJob($costsheetid)
	{
		$this->load->library('email');
		$subject = 'Job Sheet submitted';
        $financeUser = $this->site_model->get_rows_c1('user','user_role_id',4);
        
        $message = 'Job sheet with Job code number '.$costsheetid.' has been submitted with actual costs. Please click here to view the sheet. 
                    https://projexcost.com/admin/app/genrated_view_job/'.$costsheetid.'
                    ';
		
		$result = $this->email
						    ->from('costestimate@projexuae.com')
						    ->reply_to('costestimate@projexuae.com')
						    ->to('nebiyu@solarisdubai.com')
						    ->subject($subject)
						    ->message($message)
						    ->send();

	}
	
	function randomCode($length) {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < $length; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
 	}


 	/**
 	* @author Nemanja
 	* @since 2021-05-24
 	* @return resource view page
 	*/
 	public function surveyNew()
    {	
		$this->load->view('admin/surveyNew/index');
    }

    /**
    * save the survey count to database survey table
    * @param data array
 	* @author Nemanja
 	* @since 2021-05-24
 	* @return boolean true or false
 	*/
    public function addSurvey()
	{
		// print_r($_POST); exit;
		$pdata = $this->input->post();
		$this->load->helper('url');	
		$data = [];

		if (@$pdata['step1']) {
			switch ($pdata['step1']) {
				case '1':
					$data['smile'] = 1;
					break;

				case '2':
					$data['normal'] = 1;
					break;

				case '3':
					$data['sad'] = 1;
					break;

				default:
					break;
			}
		}
		if (@$pdata['step2']) {
			$difs = $pdata['step2'];

			for ($i=0; $i < count($difs); $i++) { 
				switch ($difs[$i]) {
					case '1':
						$data['happy_payment_gateway'] = 1;
						break;
					
					case '2':
						$data['happy_information'] = 1;
						break;

					case '3':
						$data['happy_products'] = 1;
						break;

					case '4':
						$data['happy_easeofuse'] = 1;
						break;

					case '5':
						$data['happy_support'] = 1;
						break;
					
					case '6':
						$data['happy_checkout'] = 1;
						break;

					default:
						break;
				}
			}
		}
		if (@$pdata['step3']) {
			$diffs = $pdata['step3'];

			for ($i=0; $i < count($diffs); $i++) { 
				switch ($diffs[$i]) {
					case '1':
						$data['unhappy_payment_gateway'] = 1;
						break;
					
					case '2':
						$data['unhappy_information'] = 1;
						break;

					case '3':
						$data['unhappy_products'] = 1;
						break;

					case '4':
						$data['unhappy_easeofuse'] = 1;
						break;

					case '5':
						$data['unhappy_support'] = 1;
						break;
					
					case '6':
						$data['unhappy_checkout'] = 1;
						break;

					default:
						break;
				}
			}
		}
		
		if(@$data)
		{
			$record = $this->site_model->get_rows('survey');
			$new = [];
			if (@$record) {
				$new['smile'] = @$record[0]['smile'] + @$data['smile'];
				$new['normal'] = @$record[0]['normal'] + @$data['normal'];
				$new['sad'] = @$record[0]['sad'] + @$data['sad'];
				$new['happy_payment_gateway'] = @$record[0]['happy_payment_gateway'] + @$data['happy_payment_gateway'];
				$new['happy_information'] = @$record[0]['happy_information'] + @$data['happy_information'];
				$new['happy_products'] = @$record[0]['happy_products'] + @$data['happy_products'];
				$new['happy_easeofuse'] = @$record[0]['happy_easeofuse'] + @$data['happy_easeofuse'];
				$new['happy_support'] = @$record[0]['happy_support'] + @$data['happy_support'];
				$new['happy_checkout'] = @$record[0]['happy_checkout'] + @$data['happy_checkout'];
				$new['unhappy_payment_gateway'] = @$record[0]['unhappy_payment_gateway'] + @$data['unhappy_payment_gateway'];
				$new['unhappy_information'] = @$record[0]['unhappy_information'] + @$data['unhappy_information'];
				$new['unhappy_products'] = @$record[0]['unhappy_products'] + @$data['unhappy_products'];
				$new['unhappy_easeofuse'] = @$record[0]['unhappy_easeofuse'] + @$data['unhappy_easeofuse'];
				$new['unhappy_support'] = @$record[0]['unhappy_support'] + @$data['unhappy_support'];
				$new['unhappy_checkout'] = @$record[0]['unhappy_checkout'] + @$data['unhappy_checkout'];

				$this->site_model->delete_row('survey', $record[0]['id']);
				$this->site_model->savedata('survey', $new);
			}else{
				$this->site_model->savedata('survey', $data);
			}

			$responce['err'] = 1;
			$responce['msg'] = "Successfully saved your survey data.";
			echo json_encode($responce); 
		}else{
			$responce['err'] = 2;
			$responce['msg'] = "Error.";
			echo json_encode($responce); 
		}
	}

	/**
 	* @author Nemanja
 	* @since 2021-05-24
 	* @return resource thank you survey view page
 	*/
 	public function thankyouSurvey()
    {	
		$this->load->view('admin/surveyNew/thankyou');
    }

    /**
 	* @author Nemanja
 	* @since 2021-05-25
 	* @return resource Survey report page
 	*/
 	public function surveyreport()
    {	
    	$data = $this->site_model->get_rows('survey');
    	$result = $data[0];

		$this->load->view('admin/surveyNew/report', $result);
    }
}