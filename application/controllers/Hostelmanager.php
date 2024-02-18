<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hostelmanager extends CI_Controller {
	public function index()
	{
		$this->load->view('layout/index');
	}
	
    public function addroom()
	{
        session_start();
        if(!isset($_SESSION["hostelid"]))
        {
            redirect("guest/login");
        }
        $passArr=array();

        $this->load->helper(array("form","url"));
        $this->load->library("form_validation");
        $this->form_validation->set_rules("roomname","Hostel Room Name","required");
        $this->form_validation->set_rules("rentwithfood","Rent With Food","required");
        $this->form_validation->set_rules("rentwithoutfood","Rent Without Food","required");
        $this->form_validation->set_rules("capacity","Capacity","required");
        $this->form_validation->set_rules("vacancy","Vacancy","required");
        $this->form_validation->set_rules("air","Air","required");
        $this->form_validation->set_rules("bath","Bath","required");
        $this->form_validation->set_rules("roomdesc","Room Description","required|min_length[10]");

        
        if($this->form_validation->run())
        {
            
                //validate photo
                
                $config['upload_path']          = './photos/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1500;
                $config['max_width']            = 2000;
                $config['max_height']           = 1768;
                $config['encrypt_name']         = true;
                $this->load->library("upload",$config);
                if ( $this->upload->do_upload('photo'))
                {
                    $data = $this->upload->data();
                    var_dump($data);
                    $filename = $data["file_name"];
                    $this->load->model("room");
                    if($this->room->add( $_SESSION["hostelid"],$_POST,$filename))
                    {
                        $passArr["msg"]="room added successfully ";
                    }
                    else
                    {
                        $passArr["msg"]="Please check your enterd details  ";
                    }
                   
                }
                else
                {
                    $passArr["msg_photo"] = $this->upload->display_errors();
                }
               
        }       
    
		$this->load->view("hostelmanager/addroom",$passArr);
    }
    public function listroom()
    {
        session_start();
        if(!isset($_SESSION["hostelid"]))
        {
            redirect("guest/login");
        }
        $passArr=array();
        $this->load->model("room");
        $passArr["data"]= $this->room->listroom($_SESSION["hostelid"]);
        $this->load->view("hostelmanager/listroom",$passArr);
    } 
    public function viewhostel()
    {
        session_start();
        if(!isset($_SESSION["hostelid"]))
        {
            redirect("guest/login");
        }
        $passArr=array();
        $this->load->model("hostel");
        $passArr["data"]= $this->hostel->viewhostel($_SESSION["hostelid"]);
        $this->load->view("hostelmanager/viewhostel",$passArr);
    }
    public function updatehostel()
    {
        session_start();
        if(!isset($_SESSION["hostelid"]))
        {
            redirect("guest/login");
        }
        $passArr=array();
        
        $this->load->model("area");
        $passArr["locations"]=$this->area->listarea();
       
        $this->load->model("hostel");
        $passArr["data"]= $this->hostel->viewhostel($_SESSION["hostelid"]);

        
        $this->load->helper(array("form","url"));
        $this->load->library("form_validation");
        $this->form_validation->set_rules("hostelname","Name","required|min_length[2]");
        $this->form_validation->set_rules("address","adress","required|min_length[10]");
        $this->form_validation->set_rules("floor","floor","required");
        
        $this->form_validation->set_rules("contact","contact","required");
        $this->form_validation->set_rules("location","location","required");
        $this->form_validation->set_rules("type","type","required");
        $this->form_validation->set_rules("description","description","required|min_length[20]");

        $this->form_validation->set_rules("email","Email","required|min_length[2]|valid_email");
        
        if($this->form_validation->run())
        {
            //var_dump($_POST);
            $this->load->model("hostel");
                if($this->hostel->update($_SESSION["hostelid"],$_POST))
                {
                    $passArr["msg"]="HOSTEL has been successfully registerd";
                }
                else
                {
                    $passArr["msg"]="Please check your enterd details  ";
                }
               
            
           
        }
        $this->load->view("hostelmanager/updatehostel",$passArr);
    }
    public function updaterooms($rid)
    {
        session_start();
        if(!isset($_SESSION["hostelid"]))
        {
            redirect("guest/login");
        }
        $passArr=array();
        $this->load->model("room");
        $passArr["data"]= $this->room->viewroom($rid);
        $this->load->helper(array("form","url"));
        $this->load->library("form_validation");
        $this->form_validation->set_rules("roomname","Hostel Room Name","required");
        $this->form_validation->set_rules("rentwithfood","Rent With Food","required");
        $this->form_validation->set_rules("rentwithoutfood","Rent Without Food","required");
        $this->form_validation->set_rules("capacity","Capacity","required");
        $this->form_validation->set_rules("vacancy","Vacancy","required");
        $this->form_validation->set_rules("air","Air","required");
        $this->form_validation->set_rules("bath","Bath","required");
        $this->form_validation->set_rules("roomdesc","Room Description","required|min_length[10]");

        
        if($this->form_validation->run())
        {
                    $this->load->model("room");
                    if($this->room->update( $rid,$_POST))
                    {
                        $passArr["msg"]="room updated successfully ";
                    }
                    else
                    {
                        $passArr["msg"]="Please check your enterd details  ";
                    }
                   
                
                
        }       
    
		$this->load->view("hostelmanager/updaterooms",$passArr);
    }
    

  
}
   