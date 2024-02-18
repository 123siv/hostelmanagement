<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
	public function index()
	{
		$this->load->view('layout/index');
	}
	public function login()
    {
        $passArr=array();

        $this->load->helper(array("form","url"));
        $this->load->library("form_validation");
        $this->form_validation->set_rules("email","Email","required|min_length[2]|valid_email");
        $this->form_validation->set_rules("psw","Password","required|min_length[5]|differs[email]");
        if($this->form_validation->run())
        {
            $this->load->database();
            $this->db->where("log_email",$_POST["email"]);
            $res=$this->db->get("login");
            if($res->num_rows())
            {
                $row=$res->row_array();
                if($_POST["psw"]==$row["log_pwd"])
                {
                    session_start();
                    if($row["log_utype"]=="hostel")
                    {
                        $this->load->model("hostel"); 
                        $_SESSION["hostelid"]=$this->hostel->getIdByEmail($_POST["email"]);
                        redirect("hostelmanager/viewhostel");
                    }
                    else if($row["log_utype"]=="admin")
                    {
                        $_SESSION["admin"]=$_POST["email"];
                        redirect("admin/listhostel");
                    }
                }
                else 
                {
                    $passArr["msg"]="invalid username or password1";
                }
            }
            else
            {
                $passArr["msg"]="invalid username or password";
            }
        }         
        $this->load->view("guest/loginpage",$passArr);
    }
    public function Hostelregistration()
	{
        $passArr=array();
        //var_dump($_POST);
        $this->load->model("area");
        $passArr["data"]=$this->area->listarea();

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
        
        $this->form_validation->set_rules("psw","Password","required|min_length[5]|differs[email]");
        $this->form_validation->set_rules("psw2","Password","required|min_length[5]|differs[email]|matches[psw]");
        
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
                //var_dump($data);
                $filename = $data["file_name"];
                $this->load->model("hostel");
                if($this->hostel->add($_POST,$filename))
                {
                    $passArr["msg"]="HOSTEL has been successfully registerd";
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
    
		$this->load->view("guest/Hostelregistration",$passArr);
    }
    public function listhostels()
    {
        $passArr=array();
        $this->load->model("hostel"); 
        $passArr["hostels"]= $this->hostel->listhostel();
        $this->load->view("guest/listhostel",$passArr);
    } 
    public function search()
    {
        $passArr=array();
       // var_dump($_POST);
        $this->load->helper(array("form","url"));
        $this->load->model("area");
        $passArr["area"]=$this->area->listarea();
        $this->load->library("form_validation");
        $this->form_validation->set_rules("location","location","required");
        $this->form_validation->set_rules("type","type","required");
        if($this->form_validation->run())
        {
            
            
            $this->load->model("hostel");
            $passArr["hostels"]= $this->hostel->search($_POST["location"],$_POST["type"]);
              
        }
        $this->load->view("guest/search",$passArr);

    }
    public function viewhostel($hid)
    {
        $passArr=array();
       
        
        $this->load->model("room");
        $passArr["rooms"]= $this->room->listroom($hid);
        $this->load->model("hostel");
        $passArr["hostels"]= $this->hostel->viewhostel($hid);
        $this->load->view("guest/viewhostel",$passArr);
    }
    public function advsearch()
    {
        $passArr=array();
        //var_dump($_POST);
        $this->load->helper(array("form","url"));
        $this->load->model("area");
        $passArr["area"]=$this->area->listarea();
        $this->load->library("form_validation");
        $this->form_validation->set_rules("location","location","required");
        $this->form_validation->set_rules("type","type","required");
       
        if($this->form_validation->run())
        {
            
            
            $this->load->model("hostel");
            $passArr["hostels"]= $this->hostel->advsearch($_POST);
              
        }
        //var_dump($passArr);
      
        $this->load->view("guest/advsearch",$passArr);

    }
   
   
}
   

