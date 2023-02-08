<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Histo extends CI_Model {
        public function listeHisto($id){

            $customer = array();

            $sql = "SELECT Utilisateur.nom ,Utilisateur.prenom , Echange.dateJ FROM Echange join Utilisateur on Echange.id_utilisateur = Utilisateur.id_utilisateur where Echange.id_Object_Utilisateur = %d and Echange.Confirmation = 1 ORDER BY Echange.dateJ";
            
            $sql = sprintf($sql,$id);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $customer [] = $row;
            }
            
            return $customer;

        }
  
    }

?>