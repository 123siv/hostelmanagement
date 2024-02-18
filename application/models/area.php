<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class area extends CI_Model {
    public function add($input)
    {
        $this->load->database();
        $data=array("loc_name"=>$input["addarea"]);
             if($this->db->insert("location",$data))
            {
               return true;
            }
            else
            {
               return false;
            }
    }
    public function listarea()
    {
        $this->load->database();
        $res=$this->db->get("location");
        return $res->result_array();

    }
}