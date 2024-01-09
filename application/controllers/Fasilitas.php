<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view("layout/header");
        $this->load->view("fasilitas/vw_fasilitas");
        $this->load->view("layout/footer");
        
    }   
}