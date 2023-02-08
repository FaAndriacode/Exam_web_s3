<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function verifLogin(){
        $data = array();
        
        $email = $this->input->post('email');
        
        $pass = $this->input->post('password');
        
        $value = $this->lg->getUtilisateur($email , $pass);

        $value_sup = $this->lg->getSuperUtilisateur($email , $pass);
        

        if($value == null && $value_sup == null){
            redirect('Acceuil/login');
        }
        else if($value != null){
            
            $this->session->set_userdata('id',$value['id_utilisateur']);
            
            redirect('Acceuil/category');
        }
        else if($value_sup != null){
            
            $this->session->set_userdata('id',$value_sup['id_superUtilisateur']);
            
            redirect('Acceuil/pageAdmin');
        }
    }
    
    public function endSession(){
        $this->session->unset_userdata('id');

        redirect('Acceuil');
    }

    public function insertInscription(){

        $prenom = $this->input->post("prenom");

        $email =  $this->input->post("email");

        $nom  =  $this->input->post("nom");

        $password = $this->input->post("pass");

        $this->lg->insertUtilisateur($nom,$prenom,$email,$password);

        redirect('Acceuil/login');

    }
}
?>