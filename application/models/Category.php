<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Category extends CI_Model {
        
        public function getAllCategory () {
            $customer = array();

            $query = $this->db->query('SELECT * FROM Categorie');

            foreach($query->result_array() as $row) {
                $customer [] = $row;
            }
            
            return $customer;
        }
    }

?>