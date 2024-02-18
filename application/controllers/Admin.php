<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('layout/index');
	}
	public function addarea()
    {
        $passArr=array();

        $this->load->helper(array("form","url"));
        $this->load->library("form_validation");
        $this->form_validation->set_rules("addarea","Area","required|min_length[2]");
        if($this->form_validation->run())
        {
            $this->load->model("area");
            if($this->area->add($_POST))
            {
                $passArr["msg"]="success";
            }
            else
            {
                $passArr["msg"]="failed";
            }
        }         
        $this->load->view("admin/addarea",$passArr);
    
    }
    public function listhostel()
    {
        $passArr=array();
        $this->load->model("hostel"); 
        $passArr["hostels"]= $this->hostel->adminviewhostel();
        $this->load->view("admin/listhostel",$passArr);
    } 
    public function viewhostel($hid)
    {
        $passArr=array();
        $this->load->model("room");
        $passArr["rooms"]= $this->room->listroom($hid);
        $this->load->model("hostel");
        $passArr["hostels"]= $this->hostel->adminlisthostel($hid);
        $this->load->view("admin/viewhostel",$passArr);
    }
    public function updatehostel($hid)
    {
        $passArr=array();
        $this->load->model("hostel");
        $passArr["hostels"]= $this->hostel->adminlisthostel($hid);
        $this->load->library("form_validation");
        $this->form_validation->set_rules("status","status","required");

        if($this->form_validation->run())
        {
                    $this->load->model("hostel");
                    if($this->hostel->updateadmin( $hid,$_POST))
                    {
                        $passArr["msg"]="status changed";
                    }
                    else{

                    }
                   
                
                
        }       
    
        $this->load->view("admin/updatehostel",$passArr);
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
            $passArr["hostels"]= $this->hostel->adminsearch($_POST["location"],$_POST["type"]);
              
        }
        $this->load->view("admin/search",$passArr);

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
            $passArr["hostels"]= $this->hostel->admadvsearch($_POST);
              
        }
        //var_dump($passArr);
      
        $this->load->view("admin/adsearch",$passArr);

    }
   
}