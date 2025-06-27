<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class District_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('District_model');
        $this->load->helper('url');
        $this->load->database();
    }

    public function index() {
        $data['states'] = $this->District_model->get_all_states();
        $this->load->view('world/district_view', $data);
    }

    public function insert() {
        $state_id = $this->input->post('state_id');
        $dname = $this->input->post('dname');
        if (!empty($state_id) && !empty($dname)) {
            $data = ['dname' => $dname, 'state_id' => $state_id];
            $this->District_model->insert_district($data);
        }
        redirect('District_controller');
    }

    public function get_by_state() {
        $state_id = $this->input->get('state_id');
        $data['districts'] = $this->District_model->get_districts_by_state($state_id);
        $this->load->view('world/show_districts', $data);
    }
}
