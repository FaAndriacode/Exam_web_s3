<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Change extends CI_Model {
        
        public function insertChange ($id_utilisateur,$id_objet_utilisateur,$id_recepteur,$id_object_recepteur) {
            
            $sql = "INSERT INTO Echange(id_utilisateur,id_Object_Utilisateur,id_Recepteur,id_Object_Recepteur,Confirmation,dateJ) VALUES (%d,%d,%d,%d,0,NULL)";

            $sql = sprintf($sql, $id_utilisateur, $id_objet_utilisateur, $id_recepteur, $id_object_recepteur);

            $this->db->query($sql);

        }

        public function listeDemande($id){

            $customer = array();

            $sql = "SELECT Objects.*,Objects.img as sary,Echange.id_Object_Utilisateur,Echange.id_Echange,Echange.id_utilisateur  FROM Echange join Objects on Echange.id_Object_Recepteur = Objects.id_Object where Echange.id_Recepteur=%d and Echange.Confirmation = 0";

            $sql = sprintf($sql,$id);

            $sql = "SELECT temp.*,Objects.Nom,Objects.Descriptions,Objects.img FROM Objects JOIN (".$sql.") as temp on Objects.id_Object = temp.id_Object_Utilisateur" ;

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $customer [] = $row;
            }
            
            return $customer;

        }
        public function RefusDemande($id_echange){

            $sql = "UPDATE Echange SET Confirmation = 2 WHERE id_Echange = %d";

            $sql = sprintf($sql,$id_echange);

            $this->db->query($sql);

        }

        public function Confirmation($id_echange){
            $sql = "UPDATE Echange SET Confirmation = 1 ,dateJ = NOW() WHERE id_Echange = %d";

            $sql = sprintf($sql,$id_echange);

            $this->db->query($sql);
        }
        /** 2*/ 
        public function Echange_utlisateur_connecter($id_object_prop_connecter,$id_utilisateur_connecter){

            $sql = "UPDATE Objects SET id_utilisateur_proprietaire = %d WHERE id_Object = %d";

            $sql = sprintf($sql,$id_utilisateur_connecter,$id_object_prop_connecter);

            $this->db->query($sql);
        }

        //** 1 */
        public function Echange_utilisateur_demander($id_object_demader,$id_utilisateur_object_demander){

            $sql = "UPDATE Objects SET id_utilisateur_proprietaire = %d WHERE id_Object = %d";

            $sql = sprintf($sql,$id_utilisateur_object_demander,$id_object_demader);

            $this->db->query($sql);
        }
    }

?>