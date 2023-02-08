<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionCategorie extends CI_Controller {

    public function insertCategorie() {
        
        $nomCategorie = $this->input->post('nom');

        $this->gestCat->insertCategorie($nomCategorie);

        redirect('Acceuil/pageAdmin');
    }

    public function updateCategorie() {

        $nomCategorie = $this->input->post('newValue');

        $idCategorie = $this->input->post('idCat');

        $this->gestCat->updateCategorie($idCategorie,$nomCategorie);

        redirect('Acceuil/pageAdmin');
    }
}