<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // ✅ Load url helper here
    }

    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    
    }

    
}
