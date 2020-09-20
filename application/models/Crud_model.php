<?php
class Crud_model extends CI_Model 
{
	function saverecords($fname,$lname)
	{
		$query="insert into user values('$fname','$lname')";
		$this->db->query($query);
	}
	
}