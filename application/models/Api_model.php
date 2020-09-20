<?php	

if(!defined('BASEPATH')) exit('direct access not allowed');

class Api_model extends CI_Model
{

function __construct()
{
	parent::__construct();		
}

  public function get_engineers()
  {        
    $this->db->where('user_role_id',4);       
    $query=$this->db->get('user');
    return $query->result();
  }


  public function get_available_schedules($date, $table, $activity_type)
  {
    if($date!='')
      $this->db->where('start_date', $date);
    if($activity_type!='')
      $this->db->where('activity_type', $activity_type);       

    $query=$this->db->get($table);
    return $query->result();
  }


  public function getBusySchedules($date,$activity_type,$engineer_id)
  {

    // $this->db->where('status', "scheduled");
    $this->db->where('start_date',$date);    
    $this->db->where('activity_type', $activity_type);      
    //$this->db->where('engineer_id', $engineer_id);      

    $query = $this->db->get('job');

    $busy_slots = array();

    foreach ($query->result() as $key => $book_detail)
    {
      $busy_slots[]  = array(
        "begin"=>new DateTime($book_detail->start_time),
        "end"=>new DateTime($book_detail->end_time),          
        "req_id"=>$book_detail->id,
        );
    }
    return $busy_slots;
  }

// rows count on condition 1 column | return no of rows 
public function row_count_c1($table_name,$col1,$val1) 
{
      $this->db->where($col1,$val1);
      $query= $this->db->get($table_name);

      if($query->num_rows() > 0 )
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
}


// rows count on condition 1 column | return no of rows 
public function row_count_c2($table_name,$col1,$val1,$col2,$val2) 
{
      $this->db->where($col1,$val1);
      $this->db->where($col2,$val2);
      $query= $this->db->get($table_name);
      if($query->num_rows() > 0 )
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
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


}

?>