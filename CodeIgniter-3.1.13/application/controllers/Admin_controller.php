<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Admin_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->database();
        $this->load->database();
        $this->load->model('Emp_model');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('layout/login');
       
    }
    public function index1(){
        $this->load->view('layout/header');
        // $this->load->view('layout/user');
        $this->load->view('layout/footer');
         // this
       
    }

    public function product(){
        $this->load->view('layout/display');
    }

    public function login() {
    $email = $this->input->post('egmail');  // match input name
    $password = $this->input->post('epass'); // match input name

    $this->load->model('Emp_model');
    $user = $this->Emp_model->login($email, $password);

    if ($user) {
        // Save user data in session
        $this->session->set_userdata('admin_id', $user->eid);
        $this->session->set_userdata('admin_name', $user->ename);

        // Redirect to dashboard or success page
        redirect('Admin_Controller/index1');
    } else {
        // Login failed
        $this->session->set_flashdata('error', 'Invalid email or password');
        redirect('Admin_Controller/index');
    }
}

    
    public function logout() {
        $this->session->unset_userdata('admin'); // or whatever your session key is
        $this->session->sess_destroy();
        // redirect('layout/login'); // change to your login route
        redirect('Admin_controller/index');
    }


    public function add_user() {
        $this->load->view('layout/header');
        $this->load->view('layout/emp_add');
        $this->load->view('layout/footer');
         // this will load views/layout/user.php
    }
    public function show_emp() {
        $this->load->model('Emp_model');
        $data['emp'] = $this->Emp_model->get_empdata(); // fetch employee list
    
        
        $this->load->view('layout/showuser', $data); // pass $emp to the view
    
    }

    

 public function insert_Emp() {
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['max_size'] = 2048;

    // Load and initialize upload library
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    $photo_name = '';

    // Attempt to upload
    if ($this->upload->do_upload('ephoto')) {
        $upload_data = $this->upload->data();
        $photo_name = $upload_data['file_name'];
    } else {
        // Upload failed, show error and stop
        echo $this->upload->display_errors();
        return;
    }
    // Prepare data for DB insert
    $data = array(
        'ename'    => $this->input->post('ename'),
        'econt' => $this->input->post('econt'),
        'eadds'    => $this->input->post('eadds'),
        'eroll'    => $this->input->post('eroll'),
        'epass'    => $this->input->post('epass'),
        'egmail'   => $this->input->post('egmail'),
        'ephoto' => $photo_name
    );

    // Load model and insert data
    $this->load->model('Emp_model');
    $this->Emp_model->insert_emp($data);

    // Redirect or show success message
     redirect('Admin_controller/show_emp');
}



public function delete($eid) {
    $this->Emp_model->delete_emp($eid);
   
    $this->load->model('Emp_model');
    $data['emp'] = $this->Emp_model->get_empdata(); // fetch employee list

   
   $this->load->view('layout/showuser', $data);  // pass $emp to the view
   
    
}





// edit function to get the data from the database and load the view to display the students list.

public function edit($eid) {
        $data['emp'] = $this->Emp_model->get_emp($eid);
        
        $this->load->view('layout/header');
        $this->load->view('layout/edit_employee', $data); // pass $emp to the view
    $this->load->view('layout/footer');
    }


   
    public function update_employee() {
    $this->load->model('Emp_model');

    // ✅ Define $eid before using it
    $eid = $this->input->post('eid');

    // ✅ Now it's safe to fetch employee data
    $emp = $this->Emp_model->get_emp($eid);
    $old_photo = $emp->ephoto;

    // Upload config
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $config['max_size'] = 2048;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    $photo_name = $old_photo;

    if (!empty($_FILES['ephoto']['name'])) {
        if ($this->upload->do_upload('ephoto')) {
            $upload_data = $this->upload->data();
            $photo_name = $upload_data['file_name'];

            // Delete old photo if it exists
            if (!empty($old_photo) && file_exists('./uploads/' . $old_photo)) {
                unlink('./uploads/' . $old_photo);
            }
        } else {
            echo $this->upload->display_errors();
            return;
        }
    }

    // Prepare data to update
    $data = [
        'ename'  => $this->input->post('ename'),
        'econt'  => $this->input->post('econt'),
        'eadds'  => $this->input->post('eadds'),
        'egmail' => $this->input->post('egmail'),
        'ephoto' => $photo_name
    ];

    // Update employee record
    $this->Emp_model->update_employee($eid, $data);

    // Redirect to employee list
     redirect('Admin_controller/show_emp'); 
}


 public function dis_Product(){
        
        $this->load->view('layout/product');
        }


   public function addProduct() {
    $this->load->database();
    $this->load->helper('url');
    $this->load->model('Emp_model');

    $this->db->trans_start();

    // Insert product
    $prod = [
        'pname'       => $this->input->post('Name'),
        'pdate'       => $this->input->post('date'),
        'pinvoice_no' => $this->input->post('invoiceNumber'),
    ];
    $this->db->insert('product', $prod);
    $pid = $this->db->insert_id();

    // Insert items
    $names  = $this->input->post('productname[]');
    $qtys   = $this->input->post('qty[]');
    $prices = $this->input->post('price[]');

    for ($i = 0; $i < count($names); $i++) {
        $item = [
            'pid'         => $pid,
            'iname'       => $names[$i],
            'iquantity'   => $qtys[$i],
            'iprice'      => $prices[$i],
            'total_price' => $qtys[$i] * $prices[$i],
        ];
        $this->db->insert('item', $item);
    }

    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE) {
        show_error("Could not save product and items. Please try again.");
    } else {
        // ✅ Fetch all products + items and pass to view
        $data['products'] = $this->Emp_model->get_all_products_with_items();
        $this->load->view('layout/display', $data);
    }
}






// public function products(){
//         $this->load->model('Emp_model');
//             $data['products'] = $this->Emp_model->get_all_products();
//         $this->load->view('layout/display',$data);
//     }
      public function products() {
    $this->load->model('Emp_model');
    $data['products'] = $this->Emp_model->get_all_products_with_items(); // updated method
    $this->load->view('layout/display', $data);
}

        
         

         public function get_items_by_pid($pid) {
            $this->load->model('Emp_model');
            $items = $this->Emp_model->get_items_by_product($pid);
            echo json_encode($items);
        }
        
    


        public function delete_Product($id) {
            if ($this->Emp_model->delete_product_and_items($id)) {
                $this->session->set_flashdata('success', 'Product and its items deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete product.');
            }
    
            redirect('Admin_controller/product'); // adjust this as needed
        }



public function show_photo_form() {
    $this->load->view('layout/image'); // image.php = form
}


public function upload_photos() {
    $this->load->helper(['form', 'url']);
    $this->load->library('upload');
    $this->load->library('session');
    $this->load->model('Emp_model');

    $count = count($_FILES['photos']['name']);
    $files = $_FILES;
    $uploadPath = './uploads/';
    $upload_success = false;

    for ($i = 0; $i < $count; $i++) {
        $_FILES['photo']['name']     = $files['photos']['name'][$i];
        $_FILES['photo']['type']     = $files['photos']['type'][$i];
        $_FILES['photo']['tmp_name'] = $files['photos']['tmp_name'][$i];
        $_FILES['photo']['error']    = $files['photos']['error'][$i];
        $_FILES['photo']['size']     = $files['photos']['size'][$i];

        $config['upload_path']   = $uploadPath;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']      = 2048;
        $config['file_name']     = 'photo_' . time() . '_' . $i;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('photo')) {
            $data = $this->upload->data();
            $photoData = ['photos_name' => $data['file_name']];
            $this->Emp_model->insert_photo($photoData); // ✅ INSERT into DB
            $upload_success = true;
        }
    }

    if ($upload_success) {
        $this->session->set_flashdata('success', 'Photos uploaded and saved to database!');
    } else {
        $this->session->set_flashdata('error', 'No photos uploaded.');
    }

    redirect('Admin_controller/show_photo_form');
}
public function show_uploaded_images() {
    $this->load->model('Emp_model');
    $data['images'] = $this->Emp_model->get_all_photos();
    $this->load->view('layout/image_gallery', $data); // image_gallery.php = display
}


//  public function view_photos() {
//     $this->load->model('Emp_model');
//     $data['images'] = $this->Emp_model->get_all_photos();
//     $this->load->view('layout/image_gallery', $data); // ✅ You must create this view
// }


//     public function image() {
//         $this->load->view('layout/image');
//     }
}



   
    
    
