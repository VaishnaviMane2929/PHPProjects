<?php
defined('BASEPATH') OR exit('No direct script access allowed');


   class Stud_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
        public function get_students() {
             return $this->db->get('stud1')->result();
        }

        public function insert_stud($data) {
            return $this->db->insert('stud1', $data);
        }
        

        public function delete_student($sid) {
            return $this->db->delete('stud1', ['sid' => $sid]);
        }

        
   
        public function get_student($sid) {
            return $this->db->get_where('stud1', ['sid' => $sid])->row();
        }

        public function update_student($sid, $data) {
            $this->db->where('sid', $sid);
            return $this->db->update('stud1', $data);
        }


    

    }
?>