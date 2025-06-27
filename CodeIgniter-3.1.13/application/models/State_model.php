<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Insert new state
    public function insert_state($data) {
        return $this->db->insert('state', $data);
    }

    // Get all states
    public function get_all_states() {
        return $this->db->get('state')->result();  // state table: id, sname
    }

    // Get districts for a selected state
    public function get_districts_by_state($state_id) {
        $this->db->where('state_id', $state_id);
        return $this->db->get('district')->result();  // district table: id, dname, state_id
    }

    // Get talukas for a selected district
    public function get_talukas_by_district($district_id) {
        $this->db->where('district_id', $district_id);
        return $this->db->get('taluka')->result();  // taluka table: id, tname, district_id
    }
}
