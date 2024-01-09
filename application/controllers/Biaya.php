<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biaya extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view("layout/header");
        $this->load->view("biaya/vw_biaya");
        $this->load->view("layout/footer");
        
    }   
}