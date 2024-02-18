<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hostel extends CI_Model {

    public $error;

    public function add($input,$filename)
    {
        //upload image
       
        $this->load->database();
        $data=array("hostel_name"=>$input["hostelname"],"hostel_email"=>$input["email"],"hostel_address"=>$input["address"],"hostel_floor"=>$input["floor"],
                "hostel_photo"=>$filename,"hostel_contact"=>$input["contact"],"hostel_loc_id"=>$input["location"],"hostel_type"=>$_POST["type"],
            "hostel_desc"=>$input["description"]);
        if($this->db->insert("hostel",$data))
        {
            $logdata=array("log_email"=>$input["email"],"log_pwd"=>$input["psw"],"log_utype"=>"hostel","log_status"=>'a');
            if($this->db->insert("login",$logdata))
            { 
                return true;
            }
            else
            {
                return false;
            }
            
        }
        else
        {
            return false;
        }
    }
    public function listhostel()
    {
        $this->load->database();
        $this->db->where("hostel_status","a");
        $res=$this->db->get("hostel");
        return $res->result_array();
    }
    public function getIdByEmail($email)
    {
        $this->load->database();
        $this->db->select("hostel_id");
        $this->db->where("hostel_email",$email);
        $this->db->where("hostel_status","a");       
        $res=$this->db->get("hostel");
        $data = $res->row_array();
        return $data["hostel_id"];
    }
    public function viewhostel($id)
    {
        $this->load->database();  
        $this->db->where("hostel_id",$id);
        $this->db->where("hostel_status","a");
        $res=$this->db->get("hostel");
        return $res->row_array();
    }
    public function search($location,$type)
    {
        $this->load->database();
        $this->db->where("hostel_status","a");
        $this->db->where("hostel_type",$type);
        $this->db->where("hostel_loc_id",$location);
        $res=$this->db->get("hostel");
        return $res->result_array();
    }
    public function update($hid,$input)
    {
        $this->load->database();
        $data=array("hostel_name"=>$input["hostelname"],"hostel_email"=>$input["email"],"hostel_address"=>$input["address"],"hostel_floor"=>$input["floor"],
        "hostel_contact"=>$input["contact"],"hostel_loc_id"=>$input["location"],"hostel_type"=>$input["type"],
        "hostel_desc"=>$input["description"]);
        $this->db->where("hostel_id",$hid);
        if($this->db->update("hostel",$data))
        {
            
            return true;
        }
        else
        {
           
            return false;
        }
        
    }
    public function updateadmin($hid,$input)
    {
            $this->load->database();
            $data=array("hostel_status"=>$input["status"]);
            $this->db->where("hostel_id",$hid);
            if($this->db->update("hostel",$data))
            {
                
                return true;
            }
            else
            {
                
                return false;
            }

    }
    public function advsearch($input)
    {
        $this->load->database();
        $this->db->select("*");
        $this->db->from("hostel");
        $this->db->join("rooms",'hostel.hostel_id=rooms.room_hostel_id');
    
        $this->db->where("hostel_status","a");
        $this->db->where("hostel_type",$input["type"]);
        $this->db->where("hostel_loc_id",$input["location"]);
        $this->db->where("room_vacancy >",0);
        if(isset($input["capacity"]))
        {
        $this->db->where("room_capacity",$input["capacity"]);
        }
        if(isset($input["bath"]))
        {
        $this->db->where("room_bath_type",$input["bath"]);
        }
        if(isset($input["air"]))
        {
        $this->db->where("room_cond",$input["air"]);
        }
      
        $res=$this->db->get("");
        return $res->result_array();
    }
    public function adminlisthostel()
    {
        $this->load->database();
        
        $res=$this->db->get("hostel");
        return $res->row_array();
    }
    public function adminviewhostel()
    {
        $this->load->database();
        
        $res=$this->db->get("hostel");
        return $res->result_array();
    }
    public function adminsearch($location,$type)
    {
        $this->load->database();
        
        $this->db->where("hostel_type",$type);
        $this->db->where("hostel_loc_id",$location);
        $res=$this->db->get("hostel");
        return $res->result_array();
        
    }
    public function admadvsearch($input)
    {
        $this->load->database();
        $this->db->select("*");
        $this->db->from("hostel");
        $this->db->join("rooms",'hostel.hostel_id=rooms.room_hostel_id');
    
        
        $this->db->where("hostel_type",$input["type"]);
        $this->db->where("hostel_loc_id",$input["location"]);
        $this->db->where("room_vacancy >",0);
        if(isset($input["capacity"]))
        {
        $this->db->where("room_capacity",$input["capacity"]);
        }
        if(isset($input["bath"]))
        {
        $this->db->where("room_bath_type",$input["bath"]);
        }
        if(isset($input["air"]))
        {
        $this->db->where("room_cond",$input["air"]);
        }
      
        $res=$this->db->get("");
        return $res->result_array();
    }
    


}