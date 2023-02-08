<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheFiltre extends CI_Controller {

    public function selectFiltre() {

        $idCategorie = $this->input->post('idCategorie');

        $motCle = $this->input->post('motCle');

        $tab = array();

        $id = $this->session->userdata('id');

        $allCategory['allcategory'] = $this->ctg->getAllCategory();

        $myObject['myObject'] = $this->filtre->rechercheParCategorie($idCategorie,$motCle,$id);

        $allEchange['allechange'] = $this->ch->listeDemande($id);

        $tab['allcategory'] = $allCategory;     

        $tab['myObject'] = $myObject;

        $tab['allechange'] = $allEchange;

        $this->load->view('header.php',$tab);

        $this->load->view('pages/filtre',$tab);

        $this->load->view('footer.php');

    }

}