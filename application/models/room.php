<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class room extends CI_Model {
    
    public $error;

    public function add($hid,$input,$filename)
    {
        $this->load->database();
            $data=array("room_name"=>$input["roomname"],"room_rent_food"=>$input["rentwithfood"],
                        "room_rent_notfood"=>$input["rentwithoutfood"],"room_vacancy"=>$input["vacancy"],"room_capacity	"=>$input["capacity"],"room_cond"=>$_POST["air"],
                        "room_bath_type"=>$input["bath"],
                        "room_desc"=>$input["roomdesc"],"room_photo"=>$filename,"room_hostel_id"=>$hid);
             if($this->db->insert("rooms",$data))
            {
               return true;
            }
            else
            {
               return false;
            }
    }
   public function listroom($id)
    {
        $this->load->database();
        $this->db->where("room_hostel_id",$id);
        $this->db->where("room_status","a");        
        $res=$this->db->get("rooms");
        return $res->result_array();
    }
    public function viewroom($id)
    {
        $this->load->database();
        $this->db->where("room_id",$id);
        
        $res=$this->db->get("rooms");
        return $res->row_array();
    }
    public function update($rid,$input)
    {
        $this->load->database();
        $data=array("room_name"=>$input["roomname"],"room_rent_food"=>$input["rentwithfood"],
                    "room_rent_notfood"=>$input["rentwithoutfood"],"room_vacancy"=>$input["vacancy"],"room_capacity	"=>$input["capacity"],"room_cond"=>$_POST["air"],
                    "room_bath_type"=>$input["bath"],"room_status"=>$input["status"],
                    "room_desc"=>$input["roomdesc"]);
         $this->db->where("room_id",$rid);
         if($this->db->update("rooms",$data))
        {
           return true;
        }
        else
        {
           return false;
        }
    }



}