<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Statistique extends CI_Model {

        public function getUserInscrit() {
            $user = array();

            $query = $this->db->query('SELECT * FROM Utilisateur');

            foreach($query->result_array() as $row) {
                $user [] = $row;
            }
            
            return count($user);
        }

        public function getNbEchangeEffectue() {
            $echange = array();

            $query = $this->db->query('SELECT * FROM Echange WHERE Confirmation = 1');

            foreach($query->result_array() as $row) {
                $echange [] = $row;
            }
            
            return count($echange);
        }
    }


?>