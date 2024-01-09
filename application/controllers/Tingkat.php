<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tingkat extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view("layout/header");
        $this->load->view("tingkat/vw_tingkat");
        $this->load->view("layout/footer");
        
    }   
}