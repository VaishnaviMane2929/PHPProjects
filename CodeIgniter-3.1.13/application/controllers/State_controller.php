<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('State_model');
        $this->load->helper('url');
    }

    // Load the main view with states
    public function index() {
        $data['states'] = $this->State_model->get_all_states();
        $this->load->view('students/state_view', $data);  // Make sure this view exists
    }

    // Insert state (you can expand this to insert district and taluka too)
    public function insert() {
        $state_name = $this->input->post('sname');
        $district_name = $this->input->post('dname');
        $taluka_name = $this->input->post('tname');

        // Insert state
        if (!empty($state_name)) {
            $state_data = ['sname' => $state_name];
            $this->State_model->insert_state($state_data);
        }

        // Optional: Insert district and taluka
        // (requires getting state_id after insert, or using dropdown)

        redirect('State_controller');
    }

    // AJAX: Get districts for selected state
    public function get_districts() {
        $state_id = $this->input->post('state_id');
        $districts = $this->State_model->get_districts_by_state($state_id);

        echo '<option value="">Select District</option>';
        foreach ($districts as $d) {
            echo '<option value="'.$d->id.'">'.$d->dname.'</option>';
        }
    }

    // AJAX: Get talukas for selected district
    public function get_talukas() {
        $district_id = $this->input->post('district_id');
        $talukas = $this->State_model->get_talukas_by_district($district_id);

        echo '<option value="">Select Taluka</option>';
        foreach ($talukas as $t) {
            echo '<option value="'.$t->id.'">'.$t->tname.'</option>';
        }
    }
}
