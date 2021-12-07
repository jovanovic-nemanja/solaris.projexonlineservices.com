<?php	

if(!defined('BASEPATH')) exit('direct access not allowed');

class Site_model extends CI_Model
{

function __construct()
{
	parent::__construct();		
}

public function update_row_survey($row, $params) {

}

// login methods
public function do_login($table_name,$field1,$val1,$field2,$val2)
  {
    $this->db->select('*');
    $this->db->where($field1,$val1);
    $this->db->where($field2,$val2);
    //$this->db->where('a_active',1);
    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

public function get_id($table, $field, $value) {
    $this->db->where($field, $value);
    $query = $this->db->get($table);
    return $query->result_array();
}

public function saverecords($product_name, $product_unit, $product_categories, $product_cost, $product_description)
{
	$val = round(( $product_cost / 3.67 ), 1);
	$query="INSERT INTO products (product_name,product_cat, product_unit, product_desc, cost_in_aed, cost_in_usd) VALUES ('$product_name', '$product_categories', '$product_unit', '$product_description', '$product_cost', '$val')";
	$this->db->query($query);
}

public function Logoupload($filename, $device)
{
  $date = date('Y-m-d h:m:s');
  $query="INSERT INTO logo (name, device, active, created_at) VALUES ('$filename', '$device', 0, '$date')";
  $this->db->query($query);
}

public function change_pass($session_id, $new_pass) {
	$update_pass=$this->db->query("UPDATE user set password='$new_pass' where id='$session_id'");
	return true;
}

public function Logochange($id)
{
    $this->db->select('device, active');
    $this->db->where("id", $id);
    $query = $this->db->get("logo");
    $result = $query->result_array();

    if(@$result) {
      foreach ($result as $key => $value) {
        $device = $value['device'];
        $sql = $this->db->query("UPDATE logo set active = '0' where device = '$device'");
      }
      $sql1 = $this->db->query("UPDATE logo set active = '1' where id = '$id'");
    }
    else {
      return FALSE;
    }
}

public function Csschange($name, $color)
{
  if(@$name) {
    $delete_sql = $this->db->query("DELETE FROM css");
    $date = date('Y-m-d h:m:s');
    $query="INSERT INTO css (name, color, created_at) VALUES ('$name', '$color', '$date')";
    $this->db->query($query);
    return true;
  }
  else {
    return FALSE;
  }
}

public function do_login_c3($table_name,$field1,$val1,$field2,$val2,$field3,$val3)
{
    $this->db->select('*');
    $this->db->where($field1,$val1);
    //$this->db->or_where('mobile',$val1);
    $this->db->where($field2,$val2);
    $this->db->where($field3,$val3);

    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}
public function do_login_user($table_name,$field1,$val1,$field2,$val2,$field3,$val3)
{
    $this->db->select('*');
    $this->db->where($field1,$val1);
    $this->db->or_where('mobile',$val1);
    $this->db->where($field2,$val2);
    $this->db->where($field3,$val3);

    $query = $this->db->get($table_name);
   // return $this->db->last_query(); exit;
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}
public function do_login_admin($table_name,$field1,$val1,$field2,$val2,$field3,$val3)
{
    $this->db->select('*');
    $this->db->where($field1,$val1);
    $this->db->where($field2,$val2);
    $this->db->where($field3,$val3);

    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

public function do_login_c4($table_name,$field1,$val1,$field2,$val2,$field3,$val3,$field4,$val4)
{
    $this->db->select('*');
    $this->db->where($field1,$val1);
    $this->db->where($field2,$val2);
    $this->db->where($field3,$val3);
    $this->db->where($field4,$val4);

    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

// check if exist on one parameter

function is_exist_c1($table_name,$field1,$val1)
{
    $this->db->select('*');
    $this->db->where($field1,$val1);        
    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }  
}

// check if exist on one parameter

function is_exist_c2($table_name,$field1,$val1,$field2,$val2)
{
    $this->db->select('*');
    $this->db->where($field1,$val1);        
    $this->db->where($field2,$val2);        
    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }  
}

// check if exist on one parameter

function is_exist_c3($table_name,$field1,$val1,$field2,$val2,$field3,$val3)
{
    $this->db->select('*');
    $this->db->where($field1,$val1);        
    $this->db->where($field2,$val2);        
    $this->db->where($field3,$val3);        
    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }  
}

// check if exist on one parameter

function is_exist_c4($table_name,$c1,$v1,$c2,$v2,$c3,$v3,$c4,$v4)
{
    $this->db->select('*');
    $this->db->where($c1,$v1);        
    $this->db->where($c2,$v2);        
    $this->db->where($c3,$v3);        
    $this->db->where($c4,$v4);        
    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }  
}

function is_exist_c5($table_name,$c1,$v1,$c2,$v2,$c3,$v3,$c4,$v4)
{
    $this->db->select('*');
    $this->db->where($c1,$v1);        
    $this->db->where($c2,$v2);        
    $this->db->where($c3,$v3);        
    $this->db->where($c4,$v4);        
    $query = $this->db->get($table_name);
    
    if($query->num_rows() > 0)
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }  
}

// get single row based on 1 condition
function get_row_c1($table_name,$col1,$val1)
{ 
  $this->db->where($col1,$val1);
  $query = $this->db->get($table_name);
  return $query->row();
}

function get_job_comments($cost_sheet_id)
{ 
    $sql = "
		    SELECT A.*, B.username 
		    FROM comments A 
		    INNER JOIN user B
		    ON A.user_id = B.id
            WHERE A.cost_sheet_id = ".$cost_sheet_id;

    return $this->db->query($sql)->result_array();
}

function get_cost_comments($cost_sheet_id)
{ 
    $sql = "
		    SELECT A.*, B.username 
		    FROM cost_comments A 
		    INNER JOIN user B
		    ON A.user_id = B.id
            WHERE A.cost_sheet_id = ".$cost_sheet_id;

    return $this->db->query($sql)->result_array();
}

// get single row based on 2 condition
function get_row_c2($table_name,$col1,$val1,$col2,$val2)
{ 
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $query = $this->db->get($table_name);
  return $query->row();  
}

// get single row based on 2 condition
function get_row_c3($table_name,$col1,$val1,$col2,$val2,$col3,$val3)
{ 
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $this->db->where($col3,$val3);
  $query = $this->db->get($table_name);
  return $query->row();  
}

// get single row based on 4 condition
function get_row_c4($table_name,$col1,$val1,$col2,$val2,$col3,$val3,$col4,$val4)
{ 
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $this->db->where($col3,$val3);
  $this->db->where($col4,$val4);
  $query = $this->db->get($table_name);
  return $query->row();  
}

// get all rows
function get_rows($table_name)
{
	$query = $this->db->get($table_name);
    $this->db->order_by("id", "DESC");
	return $query->result_array();	
}
// get single row based on 3 condition
function get_rows_c3_order_by($table_name,$col1,$val1,$col2,$val2,$col3,$val3,$order_col,$order_val)
{ 
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $this->db->where($col3,$val3);
  $this->db->order_by($order_col,$order_val);
  $query = $this->db->get($table_name);
  return $query->result_array();  
}

// get all rows on condition 1
function get_rows_c1($table_name,$col1,$val1)
{ 
  $this->db->where($col1,$val1);
  $this->db->order_by("id", "DESC");
  $query = $this->db->get($table_name);
  return $query->result_array();
}
// get all rows on condition 1
function get_rows_B1($table_name)
{ 
  $this->db->select_max('quotation_number');
  $this->db->from($table_name);
  $this->db->where('quotation_number is NOT NULL', NULL, FALSE);
  $this->db->where('status', 'genrated');
  $query = $this->db->get();
  if($query->num_rows() > 0){
     return $query->row('quotation_number');        
  }else{
     return 0;
  }
}

function get_rows_d1($table_name, $col1, $val1, $col2, $val2)
{ 
  $this->db->where($col1, $val1);
  $this->db->where($col2, $val2);
  $this->db->order_by("id", "DESC");
  $query = $this->db->get($table_name);
  return $query->result_array();
}

function get_quotation($table_name,$col1,$val1)
{ 
  $this->db->where($col1,$val1);
  $this->db->where('(quotation_status = "Pending" or quotation_status = "Accepted")');
  $this->db->order_by("id", "DESC");
  $query = $this->db->get($table_name);
  return $query->result_array();
}
function get_quotation_c1($table_name,$col1,$val1)
{ 
  $this->db->where($col1,$val1);
  $this->db->where('(quotation_status = "Accepted")');
  $this->db->order_by("id", "DESC");
  $query = $this->db->get($table_name);
  return $query->result_array();
}

function get_quotation_c2($table_name,$col1,$val1)
{ 
    $sql="
    		    SELECT *, A.id as mid FROM cost_sheet A 
    		    INNER JOIN approval_status B
    		    ON A.id = B.costsheet_id
                WHERE B.approval_status = 'Approved'
                order by B.created_at desc";

    return $this->db->query($sql)->result_array();
}

function get_archived($table_name,$col1,$val1)
{ 
  $this->db->where($col1,$val1);
  $this->db->where('(quotation_status = "Not Accepted")');
  $this->db->order_by("id", "DESC");
  $query = $this->db->get($table_name);
  return $query->result_array();
}

// get all rows on condition 2
function get_rows_c2($table_name,$col1,$val1,$col2,$val2)
{ 
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $this->db->order_by("id", "DESC");
  $query = $this->db->get($table_name);
  return $query->result_array();
}

// get all rows on condition 3
function get_rows_c3($table_name,$col1,$val1,$col2,$val2,$col3,$val3)
{ 
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $this->db->where($col3,$val3);
   $this->db->order_by("position", "ASC");
  $query = $this->db->get($table_name);
  return $query->result_array();
}

// get all rows on condition 1 order by
function get_rows_c1_order_by($table,$col1,$val1,$order_col,$order_col_val)
{
  $this->db->select('*');
  $this->db->where($col1,$val1);
  $this->db->order_by($order_col,$order_col_val);
  $query=$this->db->get($table);
  return $query->result_array();

}

// get rows order by col_condition | col_value
function get_rows_order_by($table_name,$col,$val)
{ 
  $this->db->order_by($col,$val);  
  $query = $this->db->get($table_name);
  return $query->result_array();  
}

// get rows by limit
function get_rows_by_limit($table_name,$col,$val,$limit,$offset)
{ 
  $this->db->order_by($col,$val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get($table_name);
  return $query->result_array();  
}

function get_rows_limit($table_name,$col,$val,$limit,$offset)
{   
  $this->db->order_by($col,$val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get($table_name);
  return $query->result_array();  
}

// pass parameter into this function (table_name, cond_col_name, cond_col_val, order_col_name, order_col_val, number_of_rows, page_no)
function get_rows_limit_c1($table_name,$col_c1,$col_c1_val,$col,$val,$limit,$offset)
{ 
  $this->db->where($col_c1,$col_c1_val);
  $this->db->order_by($col,$val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get($table_name);
  return $query->result_array();  
}

// get rows by limit on condition 2
function get_rows_limit_c2($table_name,$col_c1,$col_c1_val,$col_c2,$col_c2_val,$col,$val,$limit,$offset)
{ 
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $this->db->order_by($col,$val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get($table_name);
  return $query->result_array();  
}

// get rows by limit on condition 3
function get_rows_limit_c3($table_name,$col_c1,$col_c1_val,$col_c2,$col_c2_val,$col_c3,$col_c3_val,$col,$val,$limit,$offset)
{ 
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $this->db->where($col_c3,$col_c3_val);
  $this->db->order_by($col,$val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get($table_name);
  return $query->result_array();  
}

// get rows by limit on condition 3
function get_rows_limit_c4($table_name,$col_c1,$col_c1_val,$col_c2,$col_c2_val,$col_c3,$col_c3_val,$col_c4,$col_c4_val,$col,$val,$limit,$offset)
{ 
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $this->db->where($col_c3,$col_c3_val);
  $this->db->where($col_c4,$col_c4_val);
  $this->db->order_by($col,$val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get($table_name);
  return $query->result_array();  
}

// get rows using two condition with order by
function get_rows_c2_order_by($table,$col1,$val1,$col2,$val2,$order_col,$order_col_val)
{
  $this->db->select('*');
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $this->db->order_by($order_col,$order_col_val);
  $query=$this->db->get($table);
  return $query->result_array();
}

// rows count | return no of rows 
public function row_count($table_name) {       
  return $this->db->count_all($table_name);
}

// rows count on condition 1 column | return no of rows 
public function row_count_c1($table_name,$col1,$val1) 
{
      $this->db->where($col1,$val1);
      $query= $this->db->get($table_name);
      return $query->num_rows();
}

// save data and return TRUE|FALSE
function save_data($table_name,$data)
{
    $this->db->insert($table_name, $data);
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

// save data and return TRUE|FALSE
function save_data_c1($table_name,$col1,$val1,$data)
{
    $this->db->where($col1,$val1);
    $this->db->insert($table_name, $data);
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

// update row on 1 column condition
function update_row_c1($table_name, $col1, $val1, $data)
{  
    $this->db->where($col1,$val1);
    $this->db->update($table_name,$data);
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

// update row on 1 column condition
function saveJob($table_name, $col1, $val1, $col2, $val2, $data)
{  
    $this->db->where($col1, $val1);
    $this->db->where($col2, $val2);
    $this->db->update($table_name, $data);
    
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

function updateJob($table_name, $col1, $val1, $data) {  
    $this->db->where($col1, $val1);
    $this->db->update($table_name, $data);
    
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

// get all rows on condition 2
function get_rows_data($table_name, $col1, $val1)
{ 
  $this->db->where($col1, $val1);
  $query = $this->db->get($table_name);
  return $query->result_array();
}

function saveComment($table_name, $data) {
    $this->db->insert($table_name, $data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
}

// update row on 2 column condition
function update_row_c2($table_name,$col1,$val1,$col2,$val2,$data)
{  
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $this->db->update($table_name,$data);
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

/*
********************************************************
*   Join Query By Mithilesh Sah
********************************************************
*/

// get rows left join with c1
public function get_row_join_c1($table1,$table2,$common_col,$col_c1,$col_c1_val)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'left');    
  $this->db->where($col_c1,$col_c1_val);
  $query = $this->db->get();
  return $query->row();  
}

//get rows inner join single row on one column condition 

public function get_row_inner_join_c1()
{ 
  $sql = "SELECT cost_sheet.* FROM cost_sheet inner join costsheet_draft on cost_sheet.id= costsheet_draft.cost_sheet_id where costsheet_draft.status=1 order by costsheet_draft.id desc";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
  //print_r($this->db->last_query()); 
}

public function get_row_costsheet()
{ 
  $sql = "SELECT cost_sheet.* FROM cost_sheet where status='draft' OR status='genrated' order by id desc";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
  //print_r($this->db->last_query()); 
}

public function get_row_genrated_template_join()
{ 
  $sql = "SELECT cost_sheet.*, gerated_costsheet.template_name,gerated_costsheet.id as genId FROM cost_sheet inner join gerated_costsheet on cost_sheet.id= gerated_costsheet.cost_sheet_id where gerated_costsheet.status=1 order by gerated_costsheet.id desc";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
  //print_r($this->db->last_query()); 
}

// get rows inner join multiple row on two column condition 
public function get_row_inner_join_c2($table1,$table2,$common_col,$col_c1,$col_c1_val,$col_c2,$col_c2_val)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $query = $this->db->get();
  return $query->row();  
}

//get rows inner join multiple row on one column condition 

public function get_rows_inner_join_c1($table1,$table2,$common_col,$col_c1,$col_c1_val)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $query = $this->db->get();
  return $query->result_array();  
}
//get rows inner join multiple row on one column condition order by
public function get_rows_inner_join_c1_order($table1,$table2,$common_col,$col_c1,$col_c1_val,$order_col,$order_val)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $this->db->order_by($order_col,$order_val); 
  $query = $this->db->get();
  return $query->result_array();  
}



// get rows inner join multiple row on two column condition 
public function get_rows_inner_join_c2($table1,$table2,$common_col,$col_c1,$col_c1_val,$col_c2,$col_c2_val)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $query = $this->db->get();
  return $query->result_array();  
}


//get rows inner join multiple row on two column condition order by
public function get_rows_inner_join_c2_order($table1,$table2,$common_col,$col_c1,$col_c1_val,$col_c2,$col_c2_val,$order_col,$order_val)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $this->db->order_by($order_col,$order_val); 
  $query = $this->db->get();
  return $query->result_array();  
}

//get rows inner join multiple row on two column condition order by
public function get_rows_inner_join_c2_order_limit($table1,$table2,$common_col,$col_c1,$col_c1_val,$col_c2,$col_c2_val,$order_col,$order_val,$limit,$offset)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $this->db->order_by($order_col,$order_val); 
  $this->db->limit($limit, $offset);
  $query = $this->db->get();
  return $query->result_array();  
}
// get rows inner join multiple row on two column condition with limit, offset
public function get_rows_inner_limit_c2($table1,$table2,$common_col,$col_c1,$col_c1_val,$col_c2,$col_c2_val,$limit,$offset)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $this->db->order_by($col_c1,$col_c1_val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get();
  return $query->result_array();  
}

// get rows inner join multiple row on one column condition limit, order, offset
public function get_rows_inner_limit_order_c1($table1,$table2,$common_col,$col_c1,$col_c1_val,$order_col,$order,$limit,$offset)
{
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $this->db->order_by($order_col,$order);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get();
  return $query->result_array();
}

// get rows inner join multiple rows on three column condition order by, limit, offset
public function get_rows_inner_join_c3($table1,$table2,$common_col,$col_c1,$col_c1_val,$col_c2,$col_c2_val,$order_col,$order_col_val,$limit,$offset)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $this->db->where($col_c1,$col_c1_val);
  $this->db->where($col_c2,$col_c2_val);
  $this->db->order_by($order_col,$order_col_val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get();
  return $query->result_array();  
}


// get rows inner join without condition 

public function get_rows_inner_join($table1,$table2,$common_col)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $common_col,'inner');      
  $query = $this->db->get();
  return $query->result_array();  
}

// get rows join 2 tables 
public function get_rows_join_c1($table1,$table2,$col_val,$order_col,$order_col_val,$limit,$offset)
{ 
  $this->db->select('*');
  $this->db->from($table1);
  $this->db->join($table2, $col_val);  
  $this->db->order_by($order_col,$order_col_val);  
  $this->db->limit($limit, $offset);
  $query = $this->db->get();
  return $query->result_array();  
}

// delete one row on one column condition
function delete_row_c1( $table_name,$col1,$val1 )
{
  //delete record  
  $this->db->where($col1,$val1);
  $this->db->delete($table_name);
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

// delete one row on one column condition
function delete_row( $table_name, $id )
{
  //delete record  
  $this->db->where('id', $id);
  $this->db->delete($table_name);
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

// delete multiple rows on one column condition
function delete_rows_c1( $table_name,$col1,$val1,$col2,$val2 )
{ 
  $this->db->where($col1,$val1);
  $this->db->where($col2,$val2);
  $this->db->delete($table_name);
    if ($this->db->affected_rows() > 0) 
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
}

function get_model($id)
{
        $ci=& get_instance();
        $ci->load->database(); 
        $sql = "select title from model where id ='".$id."'"; 
        $query = $ci->db->query($sql);
        $data = $query->row();
        if($data){return $data->title;}
        else{return NULL;}
}

//$uman_get customer name
public function getcustomerName($customer_id)
{
  $this->db->where('id', $customer_id);
  $query = $this->db->get('user');
  $row = $query->row();  
  if($row){return $row->first_name." ".$row->last_name." (".$row->mobile.")";}
  else{return NULL;}
}

 public function get_booking_details($booking_id)
    {
    $this->db->select('booking.id as booking_id,booking.learner as learner_id, booking.schedule_date, booking.schedule_start_time,booking.address,lession.lession_name,lession.duration,lession.price,booking.status,booking.referred_from,user.additional_address');
     $this->db->join('lession', 'booking.lession_id = lession.id', 'left');
    $this->db->join('user', 'booking.learner = user.id', 'left');
    $this->db->where('user_role_id',3);
    $this->db->where('booking.status','open');
    $this->db->where('booking.id',$booking_id);
    $this->db->order_by("user.id", 'desc');
    $query=$this->db->get('booking');
    return $query->row();
    }

  public function get_booking_details_byid($booking_id, $userid)
    {
    $this->db->select('booking.id ,booking.unique_id as booking_id, booking.schedule_date, booking.schedule_start_time, booking.schedule_end_time,booking.address,booking.  latitude,booking.longitude,booking.zipcode,booking.status, lession.lession_name, lession.price, lession.duration,user.payment_method,user.car_make, user.car_type, user.model,user.type, user.id as learner_id,user.email,user.mobile, booking.accepted_trainer as trainer_id');
    $this->db->join('lession', 'booking.lession_id = lession.id', 'left');
    $this->db->join('user', 'booking.learner = user.id', 'left');
    $this->db->where('booking.id', $booking_id);
    $this->db->where('booking.learner', $userid);
    $this->db->order_by("booking.id", 'desc');
    $query=$this->db->get('booking');
    return $query->row();
    }

    public function get_booking_details_by_trainer($booking_id, $userid)
    {
    $this->db->select('booking.id ,booking.unique_id as booking_id,booking.learner as learner_id, booking.schedule_date, booking.schedule_start_time, booking.address,booking.schedule_end_time,booking.car_type,booking.status, booking.referred_from, lession.lession_name');
    $this->db->join('lession', 'booking.lession_id = lession.id', 'left');
    $this->db->where('booking.id', $booking_id);
    $this->db->where('booking.accepted_trainer', $userid);
    $this->db->order_by("booking.id", 'desc');
    $query=$this->db->get('booking');
    return $query->row();
    }   

//$uman_get site name
public function getsiteName($site_id)
{
  $this->db->where('id', $site_id);
  $query = $this->db->get('site');
  $row = $query->row();
  if($row){return $row->name;}
  else{return NULL;}
}

//$uman_get equipment name
public function getequipmentName($equipment_id)
{
  $this->db->where('id', $equipment_id);
  $query = $this->db->get('equipment');
  $row = $query->row();
  if($row){return $row->name;}
  else{return NULL;}
}

//$uman_get engineer name
public function getengineerName($engineer_id)
{
  $this->db->where('id', $engineer_id);
  $query = $this->db->get('user');
  $row = $query->row();
  if($row){return $row->first_name." ".$row->last_name." (".$row->mobile.")";}
  else{return NULL;}
}

//$uman_get job type
public function getjobtype($job_type)
{
  $this->db->where('id', $job_type);
  $query = $this->db->get('job_type');
  $row = $query->row();
  if($row){return $row->name;}
  else{return NULL;}
}

public function get_engineer($value='')
{
  $this->db->order_by("id", 'asc');
  $query=$this->db->get('engineer_schedules');
  return $query->result();
}

function count_all()
{
  $customer_id = $this->session->userdata('customer_id');
  $this->db->where("customer_id",$customer_id);
  $this->db->where("is_active",1);
  $query = $this->db->get("site");
  return $query->num_rows();
}

function fetch_all_details($limit, $start)
{
  $output = '';
  $customer_id = $this->session->userdata('customer_id');
  $this->db->select("*"); 
  $this->db->where("customer_id",$customer_id);
  $this->db->where("is_active",1);
  $this->db->from("site");  
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  $output .= '
      <table class="table table-striped">
              <thead>
                <tr>
                  <th>Site</th>
                   <th>Address</th>                                
                  <th>Customer</th>
                  <th>Equipment</th>
                  <th>Jobs</th>
                  <th>Contact</th>                  
                  <th>Phone</th>                 
                  <th>Tags</th>
                </tr>
              </thead>        
    ';
  foreach($query->result() as $row)
  {  
  
   $output .= '  
                 <tbody>              
                <tr class="record">
                  <td class="dropdown"><a href="#0" data-toggle="dropdown">'.$row->name.' <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                  <h5>Site</h5>
                    <li><a href=""><i class="fa fa-folder"></i> Details</a></li>
                  <li><a href=""><i class="fa fa-edit"></i> Edit</a></li>
                  <li><a href=""><i class="fa fa-plus"></i> Add Job</a></li>
                  <li><a href="#"><i class="fa fa-plus"></i> Add Recurrence</a></li>                  
                  <li><a href="#" data-original-title="Edit" value="" class="status_inactive_btn" data-info="0"><i class="fa fa-trash-o"></i> Delete</a></li>
            
                </ul>
                  </td>
                  <td> '.$row->address.'</td> 
                  <td> '.$this->site_model->getcustomerName($row->customer_id).' </td>
                  <td> '.get_num_rows_single_col('equipment','site_id',$row->id).'</td>                  
                  <td>  '.get_num_rows_single_col('job','site_id',$row->id).' </td>
                  <td>'.$row->first_name.' '.$row->last_name.' </td>                
                  <td>'.$row->telephone.' / '.$row->mobile.' </td>                 
                  <td> '.$tag_data_str = $row->tags.'
                  </td>
                </tr>                       
              </tbody> ';
  }
  $output .= '</table>';
  return $output;
}

function count_all_development()
{  
  $customer_id = $this->session->userdata('customer_id');
  $this->db->where("customer_id",$customer_id);
  $this->db->where("is_active",1);
  $query = $this->db->get("equipment");
  return $query->num_rows();
}

function fetch_equipment_details($limit, $start)
{
  $output = '';
  $customer_id = $this->session->userdata('customer_id');
  $this->db->select("*"); 
  $this->db->where("customer_id",$customer_id); 
  $this->db->where("is_active",1);
  $this->db->from("equipment");  
  $this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  $output .= '
          <table class="table table-striped">
              <thead>
                <tr>
                  <th>Equipment</th>
                   <th>Customer</th>
                   <th>Site</th>
                  <th>Jobs</th>
                  <th>Tags</th>
                 
                </tr>
              </thead>           
    ';
  foreach($query->result() as $row)
  { 
   $output .= '<tbody>              
                <tr class="record">
                  <td>'.$row->name.' </td>
                  <td> '.$this->site_model->getcustomerName($row->customer_id).' </td>
                  <td> '.$this->site_model->getsiteName($row->site_id).' </td>
                  <td> '.get_num_rows_single_col('job','equipment_id',$row->id).' </td>
                  <td> '.$tag_data_str = $row->tags.' </td>            
                
                </tr>                       
              </tbody>';
  }
  $output .= '</table>';
  return $output;
}

//-----------This function is created By saurabh ----------------
#   for insert update ,view and delete reocord
#
#
#//--------------------------------------------------------------//

  public function savedata($table,$args) {
  
       $this->db->insert($table, $args);
       $insert_id = $this->db->insert_id();
       return $insert_id;
    //return $this->db->last_query(); 
    } 
    
  public function getRow($table,$condition="",$orderBy="") {
    if(empty($condition)){
       $this->db->select("*")->from($table)->order_by($orderBy);
      
      $query = $this->db->get();

      if ($query->num_rows() > 0) {
        return $query->result_array();
      } else {
        return 0;
      } 
    }else{
       $this->db->select("*")->from($table)->where($condition)->order_by($orderBy);
        $query = $this->db->get();
    //return $this->db->last_query();
    
   if ($query->num_rows() > 0) {
        return $query->result_array();
      } else {
        return 0;
      } 
    } 
  }
  


  
  public function countResult($table,$condition=""){
    $this->db->select("*")->from($table)->where($condition);
    $query = $this->db->get();
      if ($query->num_rows() > 0) {
        return $query->num_rows();
      } else {
        return 0;
      } 
      
  }
  
  
 public function updateRow($table,$data,$condition) {
        $this->db->where($condition);
        $this->db->update($table,$data);
  //return $this->db->last_query();
         if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        } 
    }
  
  public function updateEmployeeDetails($con,$data)
   {  
       $sql="update empinfo 
      inner join document on empinfo.EmpID=document.EmpID
      inner join companydetails on empinfo.EmpID=companydetails.EmpID
      Inner join accountdetails ON empinfo.EmpID=accountdetails.EmpID set ";
      foreach ($data as $field => $value)
      $sql .=  $field."= '".$value."',";
      $sql = substr($sql,0,strlen($sql)-1);
      $sql .="where empinfo.EmpID='".$con."'";
      $query = $this->db->query($sql);
      //return $this->db->last_query();
         return TRUE;
   }


  
  public function deleteRecord($table,$cond) {
        $this->db->where($cond);
        $this->db->delete($table);
        //echo $this->db->last_query();
        return True;
    }

    public function getLearnerList($conditions){

          if(empty($conditions)){
              $sql = "select booking.*,user.first_name,user.last_name,user.address,user.email,user.mobile,user.language,booking.package,booking.package_type,booking.lession_id,package.price,package_type.package_name,lession.lession_name from booking inner join user on booking.learner=user.id inner join package on booking.package=package.id inner join package_type on booking.package_type=package_type.id inner join lession on booking.lession_id=lession.id";

              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "select booking.*,user.first_name,user.last_name,user.address,user.email,user.mobile,user.language,booking.package,booking.package_type,booking.lession_id,package.price,package_type.package_name,lession.lession_name from booking inner join user on booking.learner=user.id inner join package on booking.package=package.id inner join package_type on booking.package_type=package_type.id inner join lession on booking.lession_id=lession.id where $conditions";

              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }

        }

       public function getLearnerListForTrainer($conditions){

          if(empty($conditions)){
              $sql = "select booking.*,user.first_name,user.last_name,user.address,user.email,user.mobile,user.language,user.package_id,user.package,user.lesson,package.price,package_type.package_name,lession.lession_name from booking inner join user on booking.learner=user.id inner join package on user.package_id=package.id inner join package_type on user.package=package_type.id inner join lession on user.lesson=lession.id";

              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "select booking.*,user.first_name,user.last_name,user.address,user.email,user.mobile,user.language,user.package_id,user.package,user.lesson,package.price,package_type.package_name,lession.lession_name from booking inner join user on booking.learner=user.id inner join package on user.package_id=package.id inner join package_type on user.package=package_type.id inner join lession on user.lesson=lession.id where $conditions";

              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }

        } 

public function getTaskDetails($conditions){

          if(empty($conditions)){
            $sql = "select task_progress.*,task.task_name from task_progress inner join task on task_progress.task_id=task.id";

              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "select task_progress.*,task.task_name from task_progress inner join task on task_progress.task_id=task.id where $conditions";

              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }

        }
        

  public function bookingList($conditions=''){
        if(empty($conditions)){
              $sqlQuery = "SELECT user.id,CONCAT(user.first_name,' ',user.last_name) as name,user.email,user.mobile,user.driving_school,user.abn,user.dia_no,user.work_covering_area,user.car_type as lernerCarType,user.car_make,user.model,user.year,user.about,user.bank_name,user.bsb,user.account_no,user.type,user.dob,user.purchase_subscrip,user.address as learnerAddress,user.referred_by as referredBy,user.referral_from_id as referralFromId,user.referral_to_id as referredToId,user.referral_to_date as referredDate,booking.schedule_date,booking.schedule_start_time,booking.schedule_end_time,booking.id as bookingId,booking.package,booking.package_type,booking.lession_id,booking.booking_status as bookingStatus,booking.referred_from,booking.unique_id,booking.learner,booking.accepted_trainer,booking.booking_status as taskstatus,booking.car_type as bookingCarTyp,booking.is_accepted,if(booking.is_accepted='yes',booking.accepted_date_time,booking.created_at) as creatd_or_accepted_time,(select duration from lession where lession.id=booking.lession_id) as lessonDuration,CONCAT(booking.schedule_date,'<br>',booking.schedule_start_time,'<b> TO </b>',booking.schedule_end_time) as scheduleDateTime,booking.address as bookingAddress,booking.latitude as bookingLat,booking.suburb,booking.longitude as bookingLng,booking.zipcode as bookingZipcode,if(booking.status!='created',(select CONCAT(user.first_name,' ',user.last_name) from user where user.id=booking.accepted_trainer),'N/A') as trainerName,(select email from user where user.id=booking.accepted_trainer) as trainerEmail,(select mobile from user where user.id=booking.accepted_trainer) as trainerMobile,(select address from user where user.id=booking.accepted_trainer) as trainerAddress,(select zipcode from user where user.id=booking.accepted_trainer) as trainerZipCode,(select car_type from user where user.id=booking.accepted_trainer) as trainercar_type,(select language from user where user.id=booking.accepted_trainer) as trainerLanguage,(select user_role_id from user where user.id=booking.referred_from) as bookingReferredBy,booking.status,booking.comment,booking.test_duration,booking.test_price,booking.created_at as bookingCreatedDate,(select user.user_role_id from user where user.id=booking.created_by) as createdByRole,booking.package_type as packageTypeId,booking.lession_id  as lessonId,(select package_name from package_type where booking.package_type=package_type.id) as packageName,(select lession_name 
                from lession where lession.id=booking.lession_id) as lessonName,(select price from package where package.package_type_id=booking.package_type and package.lession_id=booking.lession_id) as packagePrice FROM user inner JOIN booking ON booking.learner=user.id order by bookingId desc";
              //echo $sqlQuery;
              $queryrest = $this->db->query($sqlQuery);
                if ($queryrest->num_rows() > 0) {
                return $queryrest->result_array();
              } else {
                return false;
              } 
      }else{
      $sqlQuery = "SELECT user.id,CONCAT(user.first_name,' ',user.last_name) as name,user.email,user.mobile,user.driving_school,user.abn,user.dia_no,user.work_covering_area,user.car_type as lernerCarType,user.car_make,user.model,user.year,user.about,user.bank_name,user.bsb,user.account_no,user.type,user.dob,user.purchase_subscrip,user.address as learnerAddress,user.referred_by as referredBy,user.referral_from_id as referralFromId,user.referral_to_id as referredToId,user.referral_to_date as referredDate,booking.schedule_date,booking.schedule_start_time,booking.schedule_end_time,booking.referred_from,booking.id as bookingId,booking.package,booking.package_type,booking.lession_id,booking.booking_status as bookingStatus,booking.unique_id,booking.learner,booking.accepted_trainer,booking.booking_status as taskstatus,booking.car_type as bookingCarTyp,booking.is_accepted,if(booking.is_accepted='yes',booking.accepted_date_time,booking.created_at) as creatd_or_accepted_time,(select duration from lession where lession.id=booking.lession_id) as lessonDuration,CONCAT(booking.schedule_date,'<br>',booking.schedule_start_time,'<b> TO </b>',booking.schedule_end_time) as scheduleDateTime,booking.address as bookingAddress,booking.latitude as bookingLat,booking.suburb,booking.longitude as bookingLng,booking.zipcode as bookingZipcode,if(booking.status!='created',(select CONCAT(user.first_name,' ',user.last_name) from user where user.id=booking.accepted_trainer),'N/A') as trainerName,(select email from user where user.id=booking.accepted_trainer) as trainerEmail,(select mobile from user where user.id=booking.accepted_trainer) as trainerMobile,(select address from user where user.id=booking.accepted_trainer) as trainerAddress,(select zipcode from user where user.id=booking.accepted_trainer) as trainerZipCode,(select car_type from user where user.id=booking.accepted_trainer) as trainercar_type,(select language from user where user.id=booking.accepted_trainer) as trainerLanguage,(select user_role_id from user where user.id=booking.referred_from) as bookingReferredBy,booking.status,booking.comment,booking.test_duration,booking.test_price,booking.created_at as bookingCreatedDate,(select user.user_role_id from user where user.id=booking.created_by) as createdByRole,booking.package_type as packageTypeId,booking.lession_id  as lessonId,(select package_name from package_type where booking.package_type=package_type.id) as packageName,(select lession_name from lession where lession.id=booking.lession_id) as lessonName,(select price from package where package.package_type_id=booking.package_type and package.lession_id=booking.lession_id) as packagePrice
       FROM user inner JOIN booking ON booking.learner=user.id where $conditions order by booking.id desc";

              $queryrest = $this->db->query($sqlQuery);
                if ($queryrest->num_rows() > 0) {
                  //return $this->db->last_query();
               return $queryrest->result_array();
              } else {
                return false;
              } 
            }
          
    }

public function getOrderedPositionList($conditions){
      if(empty($conditions)){
          $sql = "SELECT * FROM user inner join trainer_position on user.id= trainer_position.trainer_id";

          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
        }else{
          $sql = "SELECT * FROM user inner join trainer_position on user.id= trainer_position.trainer_id where $conditions order by trainer_position.position asc";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
        }
    }

    public function getOrderedPositionLists($conditions=''){
      if(empty($conditions)){
          $sql = "SELECT * FROM user WHERE user_role_id = 2 order by position = 0, position ASC";

          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
        }else{
          $sql = "SELECT * FROM user LEFT JOIN zip_codes ON find_in_set(user.id, zip_codes.trainer_id) WHERE $conditions order by user.position = 0, user.position asc";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
        }
    }
    public function viewNotes($conditions){
          if(empty($conditions)){
              $sql = "select notes.*,user.first_name as name FROM notes INNER JOIN user on user.id=notes.created_by order by note_id asc";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "select notes.*,user.first_name as name FROM notes INNER JOIN user on user.id=notes.created_by where $conditions order by note_id asc";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }
        }    

    public function getPackageList($conditions){
      if(empty($conditions)){
          $sql = "select package.*,lession.lession_name,lession.duration,package_type.package_name,package_type.id as packagTypeId from package inner join package_type ON package.package_type_id=package_type.id INNER JOIN lession ON package.lession_id=lession.id";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
        }else{
          $sql = "select package.*,lession.lession_name,lession.duration,package_type.package_name,package_type.id as packagTypeId from package inner join package_type ON package.package_type_id=package_type.id INNER JOIN lession ON package.lession_id=lession.id where $conditions";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
             //return $this->db->last_query(); exit;
          } else {
            return false;
          } 
        }
    }
        

public function getLession($conditions){


          if(empty($conditions)){
              $sql = "select package.*,lession.duration from package INNER JOIN lession ON package.lession_id=lession.id";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "select package.*,lession.duration from package INNER JOIN lession ON package.lession_id=lession.id where $conditions";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }
  }

  public function getActiveLearner($condition)
  {

   if(empty($condition)){
        $sql = "SELECT DISTINCT booking.learner as learner_id ,CONCAT(user.first_name,' ',user.last_name) as name from booking LEFT JOIN user on user.id = booking.learner";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
        else
        {
          return false;
        }
    }else{
        $sql = "SELECT DISTINCT booking.learner as learner_id ,CONCAT(user.first_name,' ',user.last_name) as name from booking LEFT JOIN user on user.id = booking.learner WHERE $condition";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
        else
        {
          return false;
        }

      }
  }

  public function getPrioritiesTrainer($condition)
  {
      $sql = "select trainer_position.*,user.* from trainer_position INNER JOIN user ON trainer_position.trainer_id=user.id WHERE $condition ORDER by trainer_position.position";
      $query = $this->db->query($sql);
    if($query->num_rows() > 0)
    {
      return $query->result_array();
    }
    else
    {
      return false;
    } 
  }

  public function getPackageLession($conditions){
      if(empty($conditions)){
          $sql = "select user.*,package_type.package_name,lession.lession_name,package.price from user inner join package_type on user.package=package_type.id INNER JOIN lession on user.lesson=lession.id INNER JOIN package ON user.package_id=package.id where user.user_role_id = 3 order by id desc";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
        }else{
          $sql = "select user.*,package_type.package_name,lession.lession_name,package.price from user inner join package_type on user.package=package_type.id INNER JOIN lession on user.lesson=lession.id INNER JOIN package ON user.package_id=package.id where $conditions";
          $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
            return $query->result_array();
          } else {
            return false;
          } 
      }  
  }


   public function getAcceptedBookingLearner($condition)
  {

   if(empty($condition)){
        $sql = "SELECT DISTINCT user.* from booking LEFT JOIN user on user.id = booking.learner";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
        else
        {
          return false;
        }
    }else{
        $sql = "SELECT DISTINCT user.* from booking LEFT JOIN user on user.id = booking.learner WHERE $condition";
        echo $sql; exit;
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
        else
        {
          return false;
        }

      }
  }
  public function getTaskByLearner(){
    if(empty($condition)){
        $sql = "SELECT (sum(percentage)/count(*)) as total_per FROM booking INNER JOIN task_progress ON booking.id=task_progress.booking_id";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
        else
        {
          return false;
        }
    }else{
      //booking.learner='39'
        $sql = "SELECT (sum(percentage)/count(*)) as total_per FROM booking INNER JOIN task_progress ON booking.id=task_progress.booking_id where $condition";
        echo $sql; exit;
        $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          return $query->result_array();
        }
        else
        {
          return false;
        }

      } 
  }


  public function getTaskDetailsByLearner($conditions){
          if(empty($conditions)){
              $sql = "select sum(task_progress.percentage) as percentage,task.task_name,task.id as task_id from task_progress inner join task on task_progress.task_id=task.id";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "select task_progress.percentage as percentage,task.task_name,task.id as task_id from task_progress inner join task on task_progress.task_id=task.id where $conditions";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }
        }
  /*public function getPackageDetails($conditions){


          if(empty($conditions)){
              $sql = "select package.*,lession.duration,lession.lession_name,package_type.package_name from package INNER JOIN lession ON package.lession_id=lession.id inner join package_type on package.package_type_id=package_type.id";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "select package.*,lession.duration,lession.lession_name,package_type.package_name from package INNER JOIN lession ON package.lession_id=lession.id inner join package_type on package.package_type_id=package_type.id where $conditions";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }



  }

  public function getLearner($conditions){
     if(empty($conditions)){
              $sql = "select user.*,package.*,lession.duration,lession.lession_name,lession.id as lessonId,package_type.package_name from user INNER JOIN package ON user.package_id=package.id INNER JOIN lession ON package.lession_id=lession.id INNER JOIN package_type on package.package_type_id=package_type.id";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "select user.*,package.*,lession.duration,lession.lession_name,lession.id as lessonId,package_type.package_name from user INNER JOIN package ON user.package_id=package.id INNER JOIN lession ON package.lession_id=lession.id INNER JOIN package_type on package.package_type_id=package_type.id where $conditions";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }
    
  }*/

  public function getTrainer(){
    $this->db->from($this->table);

    $i = 0;
  
    foreach ($this->column_search as $item) // loop column 
    {
      if($_POST['search']['value']) // if datatable send POST for search
      {
        
        if($i===0) // first loop
        {
          $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
          $this->db->like($item, $_POST['search']['value']);
        }
        else
        {
          $this->db->or_like($item, $_POST['search']['value']);
        }

        if(count($this->column_search) - 1 == $i) //last loop
          $this->db->group_end(); //close bracket
      }
      $i++;
    }
    
    if(isset($_POST['order'])) // here order processing
    {
      $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } 
    else if(isset($this->order))
    {
      $order = $this->order;
      $this->db->order_by(key($order), $order[key($order)]);
    }

  }

  	public function getInvoiceDetails($conditions){
   		if(empty($conditions)){
              $sql = "SELECT booking.id as bookingId,booking.learner as learner,booking.car_type,booking.package as bookingPackage,booking.package_type as bookingpackagetype,booking.lession_id as bookinglessionId,booking.schedule_date as bookingDate,booking.schedule_start_time as schedultTime,booking.address as address,booking.accepted_trainer as trainerId,booking.suburb as bookingsubrub,booking.referred_from as referredfrom,booking.driving_school as schoolname,booking.created_at as bookingCreatdDate, booking.created_by as bookingCreatedBy,invoice.id as invoiceId,invoice.package_id as invoicepackage,invoice.package as invoicepackagetype,invoice.lession_id as invoicelesson,invoice.amount,invoice.total,invoice.paid_y_n as paymentstatus,invoice.created_at,user.id as userid,CONCAT(user.first_name,' ',user.last_name) as leanrerName,user.email,user.mobile,if(booking.status!='created',(select CONCAT(user.first_name,' ',user.last_name) from user where user.id=booking.accepted_trainer),'N/A') as trainerName,(select lession_name from lession where lession.id=booking.lession_id) as lessonName,(select package_name from package_type where booking.package_type=package_type.id) as packageName,(select price from package where package.package_type_id=booking.package_type and package.lession_id=booking.lession_id) as packagePrice FROM booking INNER JOIN invoice on invoice.booking_id=booking.id INNER JOIN user ON booking.learner=user.id";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
        }else{
          $sql = "SELECT booking.id as bookingId,booking.learner as learner,booking.car_type,booking.package as bookingPackage,booking.package_type as bookingpackagetype,booking.lession_id as bookinglessionId,booking.schedule_date as bookingDate,booking.schedule_start_time as schedultTime,booking.address as address,booking.accepted_trainer as trainerId,booking.suburb as bookingsubrub,booking.referred_from as referredfrom,booking.driving_school as schoolname,booking.created_at as bookingCreatdDate, booking.created_by as bookingCreatedBy,invoice.id as invoiceId,invoice.package_id as invoicepackage,invoice.package as invoicepackagetype,invoice.lession_id as invoicelesson,invoice.amount,invoice.total,invoice.paid_y_n as paymentstatus,invoice.created_at,user.id as userid,CONCAT(user.first_name,' ',user.last_name) as leanrerName,user.email,user.mobile,if(booking.status!='created',(select CONCAT(user.first_name,' ',user.last_name) from user where user.id=booking.accepted_trainer),'N/A') as trainerName,(select lession_name from lession where lession.id=booking.lession_id) as lessonName,(select package_name from package_type where booking.package_type=package_type.id) as packageName,(select price from package where package.package_type_id=booking.package_type and package.lession_id=booking.lession_id) as packagePrice FROM booking INNER JOIN invoice on invoice.booking_id=booking.id INNER JOIN user ON booking.learner=user.id where $conditions";
          	$query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
           		return $query->result_array();
          	} else {
            	return false;
          	} 
        }
	 }
   public function getInvoiceSum($conditions){

          if(empty($conditions)){
              $sql = "SELECT count(id) as total,sum(total) as amount FROM invoic";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "SELECT count(id) as total,sum(total) as amount FROM invoice where $conditions";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }
   }

public function getInvoiceList($conditions=""){
    if(empty($conditions)){
      $sql = "select payment_record.*,payment_record.payment_method as paymentMethod,user.*,(select accepted_trainer from booking where booking.learner=payment_record.learner_id limit 1) as trainerId,(select accepted_trainer from booking where booking.learner=payment_record.learner_id limit 1) as trainerId,(select package_name from package_type where user.package=package_type.id limit 1) as packageName,(select lession_name from lession where lession.id=user.lesson limit 1) as lessonName from payment_record INNER JOIN user ON payment_record.learner_id=user.id order by payment_id desc";
      $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        return $query->result_array();
      } else {
        return false;
      } 
    }else{
      $sql = "select payment_record.*,payment_record.payment_method as paymentMethod,user.*,(select accepted_trainer from booking where booking.learner=payment_record.learner_id limit 1) as trainerId,(select accepted_trainer from booking where booking.learner=payment_record.learner_id limit 1) as trainerId,(select package_name from package_type where user.package=package_type.id limit 1) as packageName,(select lession_name from lession where lession.id=user.lesson limit 1) as lessonName from payment_record INNER JOIN user ON payment_record.learner_id=user.id where $conditions order by payment_id desc";
      $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
        return $query->result_array();
      } else {
        return false;
      } 
    }
  }

   public function calculateInvoiceSum($conditions){

          if(empty($conditions)){
              $sql = "SELECT sum(total_amount) as total FROM payment_record";
              $query = $this->db->query($sql);
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              } 
            }else{
              $sql = "SELECT sum(total_amount) as total FROM payment_record WHERE $conditions";
              $query = $this->db->query($sql);
              //return $this->db->last_query();
                if ($query->num_rows() > 0) {
                return $query->result_array();
              } else {
                return false;
              }
            }
   }

 function fetch_country()
  {
  $this->db->order_by("name", "ASC");
  $query = $this->db->get("countries");
  return $query->result();
  }

 function fetch_state($country_id)
  {
  $this->db->where('country_id', $country_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('states');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
  }

 function fetch_city($state_id)
  {
  $this->db->where('state_id', $state_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('cities');
  $output = '<option value="">Select City</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
  }

  function fetch_state_edit($country_id,$selected)
  {
  $optionSelect='';
  $this->db->where('country_id', $country_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('states');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
    if($row->id == $selected){ 
      $optionSelect = 'selected'; 
    }

   $output .= '<option '.$optionSelect.' value="'.$row->id.'">'.$row->name.'</option>';
   $optionSelect = ''; 
  }
  return $output;
  }

  function fetch_city_edit($state_id,$selected)
  {
  $optionSelect='';
  $this->db->where('state_id', $state_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('cities');
  $output = '<option value="">Select City</option>';
  foreach($query->result() as $row)
  {
   if($row->id == $selected){ 
      $optionSelect = 'selected'; 
    }
   $output .= '<option '.$optionSelect.' value="'.$row->id.'">'.$row->name.'</option>';
   $optionSelect='';
  }
  return $output;
  }

  public function PostList($conditions=''){
        
      $sqlQuery = "SELECT (SELECT COUNT('*') FROM postOrArticalComment where post_id = postOrArtical.id) as comment_count, (SELECT COUNT('*') FROM profileFollow where profile_id = user.id) as follow_count, user.id,CONCAT(user.first_name,' ',user.last_name) as name, user.profile_image as userProfileImg, postOrArtical.postTitle, postOrArtical.description, postOrArtical.postImage, postOrArtical.postVideo, postOrArtical.created_at as postDate, CONCAT(postOrArticalLikes.count,' Likes') as likes,postOrArtical.id as post_id  FROM postOrArtical LEFT JOIN user ON postOrArtical.user_id = user.id LEFT JOIN postOrArticalLikes On postOrArtical.id = postOrArticalLikes.post_id where $conditions order by postOrArtical.id desc";
              $queryrest = $this->db->query($sqlQuery);
                if ($queryrest->num_rows() > 0) {
                  //return $this->db->last_query();
               return $queryrest->result_array();
              } else {
                return false;
              } 
            }
          
    
   

}
?>