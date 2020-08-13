<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetCity()
  {
    return $this->db->get('city')->result();
  }

  public function GetCitybyId($id)
  {
    $this->db->where('Id', $id);
  return  $this->db->get('City')->row();
  }

}
