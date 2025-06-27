<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends model {

    public function_construct() {
        parent::_construct();

    }
    public fuction get_all_users() {
        return $this->db->get('user1')->result();

    }

}


?>