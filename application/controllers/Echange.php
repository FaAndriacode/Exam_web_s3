<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Controller {

    public function ListeChange(){

        $tab = array();

        $id = $this->session->userdata('id');

        $allEchange['allechange'] = $this->ch->listeDemande($id);

        $tab['allechange'] = $allEchange;
        
        $this->load->view('header.php',$tab);

        $this->load->view('pages/listechange',$tab['allechange']);

        $this->load->view('footer.php');
    }

    public function RefuDemande($id_echange){

        $this->ch->RefusDemande($id_echange);
        
        redirect('Echange/ListeChange');

    }
    
    public function Confirme($id_echange,$id_object_prop_connecter,$id_utilisateur_connecter,$id_object_demader,$id_utilisateur_object_demander){

        $this->ch->Confirmation($id_echange);

        $this->ch->Echange_utilisateur_demander($id_object_demader,$id_utilisateur_object_demander);

        $this->ch->Echange_utlisateur_connecter($id_object_prop_connecter,$id_utilisateur_connecter);
        
        redirect('Echange/ListeChange');

    }

}
