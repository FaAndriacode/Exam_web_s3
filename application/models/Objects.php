<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Objects extends CI_Model {
        
        public function getAllObjects ($id) {
            $objects = array();

            $sql = "SELECT * FROM Objects WHERE id_utilisateur_proprietaire != %d ";
            
            $sql = sprintf($sql, $id);
            
            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $objects [] = $row;
            }

            return $objects;
        }
        public function getAllMyObjects ($id) {
            $objects = array();

            $sql = "SELECT * FROM Objects WHERE id_utilisateur_proprietaire = %d ";
            
            $sql = sprintf($sql, $id);
            
            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $objects [] = $row;
            }

            return $objects;
        }
    }

?>