<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stud_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Stud_Model');
        $this->load->helper('url');
        $this->load->library('upload');
   }

public function index() {
        $data['students'] = $this->Stud_Model->get_students();
        $this->load->view('students/add', $data);

      

    
        
}

public function insert() {
    // Set upload config
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['max_size'] = 2048;

    // Load and initialize upload library
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    $photo_name = '';

    // Attempt to upload
    if ($this->upload->do_upload('sphoto')) {
        $upload_data = $this->upload->data();
        $photo_name = $upload_data['file_name'];
    } else {
        // Upload failed, show error and stop
        echo $this->upload->display_errors();
        return;
    }

    // Prepare data for DB insert
    $data = array(
        'sid'   => $this->input->post('sid'),
        'sname' => $this->input->post('sname'),
        'scont' => $this->input->post('scont'),
        'sadd'  => $this->input->post('sadd'),
        'sphoto' => $photo_name
    );

    // Load model and insert data
    $this->load->model('Stud_Model');
    $this->Stud_Model->insert_stud($data);

    // Redirect or show success message
    redirect('Stud_controller'); // Or replace with your desired route/view
}


// public function insert() {
   
//     $config['upload_path'] = './uploads/';
//     $config['allowed_types'] = 'jpg|jpeg|png|gif';
//     $config['max_size'] = 2048;

//     $this->load->library('upload', $config);
//      $this->upload->initialize($config);
    
//     $photo_name = '';


//     if ($this->upload->do_upload('sphoto')) {
//         $upload_data = $this->upload->data();
//         $photo_name = $upload_data['file_name'];

//         // print_r($photo_name);
//         die();
     
//     }
 
    // $data = array(
    //     'sid'   => $this->input->post('sid'),
    //     'sname' => $this->input->post('sname'),
    //     'scont' => $this->input->post('scont'),
    //     'sadd'  => $this->input->post('sadd'),
    //     'sphoto' => $photo_name
    // );

    // $this->Stud_model->insert_stud($data);

    // echo "Student inserted successfully!";
    // redirect('Stud_controller');
    
    // }

  public function delete($sid) {
        $this->Stud_Model->delete_student($sid);
        redirect('Stud_controller');
    }


    // edit function to get the data from the database and load the view to display the students list.

    public function edit($sid) {
            $data['student'] = $this->Stud_Model->get_student($sid);
            $this->load->view('Students/edit', $data);
        }
        

    
       

        public function update($sid) {
            $this->load->model('Stud_Model');
        
            // Fetch existing student
            $student = $this->Stud_Model->get_student($sid);
            $old_photo = $student->sphoto;
        
            // Upload config
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
        
            // $this->load->library('upload', $config);
            $this->load->library('form_validation');  // ✅ Correct

            $this->upload->initialize($config);
        
            $photo_name = $old_photo;
        
            if (!empty($_FILES['sphoto']['name'])) {
                if ($this->upload->do_upload('sphoto')) {
                    $upload_data = $this->upload->data();
                    $photo_name = $upload_data['file_name'];
        
                    // Delete old photo
                    if (!empty($old_photo) && file_exists('./uploads/' . $old_photo)) {
                        unlink('./uploads/' . $old_photo);
                    }
                } else {
                    echo $this->upload->display_errors();
                    return;
                }
            }
        
            // Corrected array with comma
            $data = array(
    'sname' => $this->input->post('sname'),
    'scont' => $this->input->post('scont'),
    'sadd'  => $this->input->post('sadd'),
    'sphoto' => $photo_name
);

        
            // Update DB
            $this->Stud_Model->update_student($sid, $data);
        
            // Redirect
            redirect('Stud_controller');
        }
        
         // 🔽 Place this before the last closing bracket of the class
public function cards() {
    $this->load->view('students/cards');
}

public function cards2() {
    $this->load->view('students/cards2');
}
public function cards3() {
    $this->load->view('students/cards3');
}
public function cards4() {
    $this->load->view('students/cards4');
}
public function cards5() {
    $this->load->view('students/cards5');
}

   
    
}


?>