<?php
  class Mod extends CI_Model
  {
  	public function insert_data($value)
  	{
  		$this->db->insert('user_details',$value);
  	}
  	public function select_data()
  	{
  	  $result= $this->db->select('*')
  		         ->from('user_details')
  		         ->get();

        $res=$result->result_array();
  		return $res;         
  	}
  	public function delete_data($value1)
  	{
  		$this->db->where('id', $value1['id']);
        $this->db->delete('user_details'); 
        return;
  	}
    public function edit_data($value1)
    {
      $result = $this->db->select('*')
               ->from('user_details') 
               ->where('id', $value1['id'])
               ->get();
      $res=$result->result_array();
      return $res;
        
    }
  }	