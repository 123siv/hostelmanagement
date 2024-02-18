<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search extends CI_Model {

    public function search($search)
    {
        $this->load->database();

        $this->db->where("hostel_name",$search["search"]);
        $res=$this->db->get("hostel");
        return $res->row_array();
    }
}

