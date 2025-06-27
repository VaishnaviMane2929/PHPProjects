<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function_construct() {
        parent::_construct();
        $this->load->database();
        $this->load->model('user_model');
    }

    public function Index() {
        $date['users'] =
    }

}

?>