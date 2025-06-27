<?php
class Employee_model extends CI_Model {

    public function insert_employee($data) {
        return $this->db->insert('emp', $data);
    }

    public function get_all_employees() {
        return $this->db->get('emp')->result();
    }
}
