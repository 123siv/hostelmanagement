<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
	public function index()
	{
		$this->load->view('layout/index');
	}
	public function selectall()
    {
        $passArr=array();
        $this->load->database();
        $res=$this->db->get("students");
        $passArr["data"]=$res->result_array();
        $this->load->view("dbase/ho",$passArr);
	} 
}