<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

     public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session'); 
        $this->load->helper('form');
        $this->load->database();
        $this->load->model('Emp_model'); // Load the employee model
    }

    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/footer');
    
    }

    public function emp_add() {
    $this->load->view('layout/header');
    $this->load->view('layout/emp_add');  // ✅ Path to your form
   


    $this->load->view('layout/footer');
}


    // Insert employee data into database
    public function insert_employee() {
        $data = array(
            'ename'  => $this->input->post('ename'),
            'eadds'  => $this->input->post('eadds'),
            'econt'  => $this->input->post('econt'),
            'egmail' => $this->input->post('egmail'),
            'eroll'  => $this->input->post('eroll'),
        );

        $this->Emp_model->insert_emp($data);
        redirect('Admin_Controller/show_employee');
    }

    // Show all employees
   public function show_employee() {
    $this->load->model('Emp_model');
    $data['employee'] = $this->Emp_model->emp_add();
    
    // ✅ Get flashdata in controller
    $data['msg'] = $this->session->flashdata('msg');

    $this->load->view('layout/header');
    $this->load->view('layout/show_employee', $data);
    $this->load->view('layout/footer');
}


    // Show the edit form with existing employee data
public function edit_employee($eid) {
    $data['employee'] = $this->Emp_model->get_employee($eid);
    $this->load->view('layout/header');
    $this->load->view('layout/edit_employee', $data);  // View with pre-filled form
    $this->load->view('layout/footer');
}

// Update the employee data
public function update_employee() {
    $eid = $this->input->post('eid');

    $data = array(
        'ename'  => $this->input->post('ename'),
        'eadds'  => $this->input->post('eadds'),
        'econt'  => $this->input->post('econt'),
        'egmail' => $this->input->post('egmail'),
        'eroll'  => $this->input->post('eroll')
    );

    $this->Emp_model->update_emp($eid, $data);
    redirect('Admin_Controller/show_employee');
}


   // In Admin_Controller.php
public function delete_employee($eid) {
    $this->load->model('Emp_model');

    if ($this->Emp_model->delete_emp($eid)) {
        $this->session->set_flashdata('msg', 'Employee deleted successfully.');
    } else {
        $this->session->set_flashdata('msg', 'Failed to delete employee.');
    }

    redirect('Admin_Controller/show_employee');
}


}