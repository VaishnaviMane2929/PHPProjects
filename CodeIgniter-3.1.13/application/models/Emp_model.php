<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insert_emp($data) {
        return $this->db->insert('emp', $data);
    }

    public function emp_add() {
        return $this->db->get('emp')->result();
    }

    // Get employee by ID
public function get_employee($eid) {
    return $this->db->get_where('emp', array('eid' => $eid))->row();
}

// Update employee record
public function update_emp($eid, $data) {
    $this->db->where('eid', $eid);
    return $this->db->update('emp', $data);
}


   public function delete_emp($eid) {
    return $this->db->delete('emp', ['eid' => $eid]);
}

}
