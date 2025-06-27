<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class District_model extends CI_Model {

    public function insert_district($data) {
        return $this->db->insert('district', $data);
    }

    public function get_districts_by_state($state_id) {
        return $this->db->get_where('district', ['state_id' => $state_id])->result();
    }

    public function get_all_states() {
        return $this->db->get('state')->result();  // used for dropdown
    }
}
