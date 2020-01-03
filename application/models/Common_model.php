<?php
class Common_model extends CI_Model{

 function fetch_country(){
    //$this->db->distinct("country");
    $this->db->order_by("id", "ASC");
    $query = $this->db->get("countries");
    return $query->result();
 }

 function fetch_state($country_id){
    $this->db->where('country_id', $country_id);
    $this->db->order_by('id', 'ASC');
    $query = $this->db->get('states');
    $output = '<option value="">Select State</option>';
    foreach($query->result() as $row){
      $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
    }
    return $output;
 }

 function fetch_city($state_id){
    $this->db->where('state_id', $state_id);
    $this->db->order_by('id', 'ASC');
    $query = $this->db->get('cities');
    $output = '<option value="">Select City</option>';
    foreach($query->result() as $row){
      $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
    }
    return $output;
    }
}

?>