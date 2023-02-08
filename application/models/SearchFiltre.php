<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class SearchFiltre extends CI_Model {

        public function rechercheParCategorie($idCategorie,$motCle,$id) {
            $customer = array();

            $sql = "SELECT * FROM Objects WHERE id_Categorie = %d AND Nom LIKE '%%%s%%' OR Descriptions LIKE '%%%s%%' AND id_utilisateur_proprietaire != %d ";
            
            $sql = sprintf($sql,$idCategorie,$motCle,$motCle,$id);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $customer [] = $row;
            }

            return $customer;
        }
    }
?>