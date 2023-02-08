<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Historique extends CI_Controller {
        public function ListeHistorique($id_object_demander){

            $tab = array();

            $id = $this->session->userdata('id');

            $allEchange['allechange'] = $this->ch->listeDemande($id);           
    
            $historique['allhistorique'] = $this->ht->listeHisto($id_object_demander);
    
            $tab['allhistorique'] = $historique;

            $tab['allechange'] = $allEchange;
            
            $this->load->view('header.php',$tab);
    
            $this->load->view('pages/historique',$tab['allhistorique']);
    
            $this->load->view('footer.php');
        }
    }
?>
