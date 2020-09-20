<?php	

if(!defined('BASEPATH')) exit('direct access not allowed');

class Job_model extends CI_Model
{

function __construct()
{
	parent::__construct();		
}

// get engineers
public function get_engineers()
  {      
    $this->db->where('user_role_id', 4);
    $query=$this->db->get('user');
    return $query->result();
  }

// tested ok
 public function get_engineer_schedules()
  {
    $this->db->select('engineer_availibility.*, user.first_name');
    $this->db->join('user', 'user.id = engineer_availibility.engineer_id', 'left');    
    $query= $this->db->get('engineer_availibility');
    return $query->result();
  }


  public function get_available_schedules($date, $table, $activity_type, $eng_id)
  {
    if($date!='')
      $this->db->where('start_date', $date);
    if($activity_type!='')
      $this->db->where('activity_type', $activity_type);   
    if($eng_id!='')
      $this->db->where('engineer_id', $eng_id);    

    $query=$this->db->get($table);
    return $query->result();
  }


  public function getBusySchedules($date,$activity_type,$engineer_id)
  {

    /*$this->db->where('status', "scheduled");
    $this->db->or_where('status', "completed");*/
    $this->db->where('start_date',$date);
    if($activity_type!='')
      $this->db->where('activity_type', $activity_type);  
    if($engineer_id!='')
      $this->db->where('engineer_id', $engineer_id);   

    $query = $this->db->get('job');

    $busy_slots = array();

    foreach ($query->result() as $key => $book_detail)
    {
      $busy_slots[]  = array(
        "begin"=>new DateTime($book_detail->start_time),
        "end"=>new DateTime($book_detail->end_time),
        "engineer_id"=>$book_detail->engineer_id,
        "customer_id"=>$book_detail->customer_id,
        "req_id"=>$book_detail->id,
        "status"=>$book_detail->status,
        );
    }
    return $busy_slots;
  }

}

?>