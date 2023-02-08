<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LoginM extends CI_Model {
        
        public function getUtilisateur ($email , $password) {
            
            $sql = "SELECT * FROM Utilisateur WHERE addresse_Email = '%s' AND motsPasse = '%s' ";

            $sql = sprintf($sql, $email , $password);
            
            $query = $this->db->query($sql);
            
            $row = $query->row_array();

            return $row;
        }

        public function getSuperUtilisateur ($email , $password) {
            
            $sql = "SELECT * FROM superUtilisateur WHERE email = '%s' AND motsPasse = '%s' ";

            $sql = sprintf($sql, $email , $password);
            
            $query = $this->db->query($sql);
            
            $row = $query->row_array();

            return $row;
        }

        public function insertUtilisateur($nom,$prenom,$email,$password){

            $sql = "INSERT INTO Utilisateur(nom, prenom, addresse_Email, motsPasse) VALUES ('%s','%s','%s','%s')";

            $sql = sprintf($sql, $nom , $prenom, $email , $password);

            $this->db->query($sql);

            

        }

    }

?>