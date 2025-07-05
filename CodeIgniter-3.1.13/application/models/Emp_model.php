<?php
defined('BASEPATH') OR exit('No direct script access allowed');


   class Emp_model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
            public function insert_emp($data) {
                return $this->db->insert('emp', $data);
            }

            public function get_empdata() {
    return $this->db->get('emp')->result(); // assuming your table is 'emp'
}


           public function delete_emp($eid) {
               return $this->db->delete('emp', ['eid' => $eid]);
           }
 
           public function get_emp($eid) {
               return $this->db->get_where('emp', ['eid' => $eid])->row();
           }
   
           public function get_employee_by_id($id) {
            return $this->db->get_where('emp', ['eid' => $id])->row();
        }
        
        public function update_employee($id, $data) {
            $this->db->where('eid', $id);
            return $this->db->update('emp', $data);
        }

        public function login($egmail, $epass) {
    $this->db->where('egmail', $egmail);
    $this->db->where('epass', $epass);
    $this->db->where('eroll', 'Admin'); 
    $query = $this->db->get('emp');

    if ($query->num_rows() == 1) {
        return $query->row(); // login success
    } else {
        return false; // login fail
    }
}

       

        public function addProduct($data) {
            return $this->db->insert('product', $data);
        }

        public function get_all_products_with_items() {
    $this->db->select('product.*, item.iname, item.iquantity, item.iprice, item.total_price');
    $this->db->from('product');
    $this->db->join('item', 'product.pid = item.pid');
    $this->db->order_by('product.pid', 'DESC');
    $query = $this->db->get();
    return $query->result();
}

        //   public function get_all_products() {
        //     return $this->db->get('product')->result_array(); // ✅ make sure table is correct
        // }
        
        public function get_items_by_product($pid) {
            return $this->db->get_where('item', ['pid' => $pid])->result_array();
        }


        public function delete_product_and_items($product_id) {
            // Delete items first (foreign key child)
            $this->db->where('pid', $product_id);
            $this->db->delete('item');
    
            // Then delete product (parent)
            $this->db->where('pid', $product_id);
            return $this->db->delete('product');
        }

        public function get_product_by_id($pid) {
            return $this->db->get_where('product', ['pid' => $pid])->row_array();
        }

        public function update_product($pid, $data) {
            $this->db->where('pid', $pid);
            return $this->db->update('product', $data);
        }

        public function delete_items_by_product($pid) {
            return $this->db->delete('item', ['pid' => $pid]);
        }
        public function get_item_by_id($item_id) {
            return $this->db->get_where('item', ['item_id' => $item_id])->row_array();
        }

        public function update_item($item_id, $data) {
            $this->db->where('item_id', $item_id);
            return $this->db->update('item', $data);
        }

        public function addProductItem($data) {
            return $this->db->insert('item', $data);
        } 
    public function insert_photo($data) {
        return $this->db->insert('photos', $data); // your table name
    }

    // Get all uploaded photos
    public function get_all_photos() {
        return $this->db->get('photos')->result_array();
    }

    // Get a single photo by its ID
  public function get_photo_by_id($id) {
    return $this->db->get_where('photos', ['photos_id' => $id])->row_array();
}


public function delete_photo($id) {
    return $this->db->delete('photos', ['photos_id' => $id]);
}

public function update_photo($id, $filename) {
    $this->db->where('photos_id', $id);
    return $this->db->update('photos', ['photos_name' => $filename]);
}






    
    }