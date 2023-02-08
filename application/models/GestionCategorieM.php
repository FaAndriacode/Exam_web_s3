<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class GestionCategorieM extends CI_Model {
        
        public function insertCategorie ($nomCategorie) {
            
            $sql = "INSERT INTO Categorie(Nom) values('%s')";

            $sql = sprintf($sql, $nomCategorie);
            
            $this->db->query($sql);
            
        }

        public function updateCategorie($id_Categorie,$new_nomCategorie) {
            $sql = "UPDATE Categorie set Nom = '%s' where id_Categorie = %d ";

            $sql = sprintf($sql, $new_nomCategorie, $id_Categorie);

            $this->db->query($sql);

        }
    }

?>