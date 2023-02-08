<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller {

    public function index () {

        $this->load->view('pages/index');

        $this->load->view('footer.php');

    }
    public function login(){

        $this->load->view('pages/login');
        
    }
    public function inscription(){

        $this->load->view('headerBeforLogin');

        $this->load->view('pages/inscription');

        $this->load->view('footer.php');

    }
    public function category(){
        
        $allCategory = array();

        $myObject = array();

        $allEchange = array();

        $tab = array();

        $id = $this->session->userdata('id');

        $myObject['myObject'] = $this->obj->getAllObjects($id);

        $allCategory['allcategory'] = $this->ctg->getAllCategory();

        $allEchange['allechange'] = $this->ch->listeDemande($id);

        $tab['myObject'] = $myObject;

        $tab['allcategory'] = $allCategory;      

        $tab['allechange'] = $allEchange;

        $this->load->view('header.php',$tab);
        
        $this->load->view('pages/category',$tab);

        $this->load->view('footer.php');
    }
    public function Mycategory(){
        
        $allCategory = array();

        $myObject = array();

        $tab = array();

        $id = $this->session->userdata('id');

        $myObject['myObject'] = $this->obj->getAllMyObjects($id);

        $allCategory['allcategory'] = $this->ctg->getAllCategory();

        $allEchange['allechange'] = $this->ch->listeDemande($id);

        $tab['myObject'] = $myObject;

        $tab['allcategory'] = $allCategory;  
        
        $tab['allechange'] = $allEchange;

        $this->load->view('header.php',$tab);
        
        $this->load->view('pages/mycategory',$tab);

        $this->load->view('footer.php');
        
    }
    public function Change($id_object,$id_prop){
        
        $allCategory = array();

        $myObject = array();

        $tab = array();

        $id = $this->session->userdata('id');

        $myObject['myObject'] = $this->obj->getAllMyObjects($id);

        $allCategory['allcategory'] = $this->ctg->getAllCategory();

        $tab['myObject'] = $myObject;

        $tab['allcategory'] = $allCategory;  
        
        $tab['id_Object'] = $id_object;

        $tab['id_Object_proprietaire'] = $id_prop;
        
        $this->load->view('pages/change',$tab);
    }
    public function ConfirmChanger($id_object,$id_proprietaire_object,$id_object_demande){
        
        $id = $this->session->userdata('id');

        //echo "moi".$id['id'];//echo "  id_objet_angatako-".$id_object_demande;

        //echo "  id_proprietaire_de_l'objets-".$id_proprietaire_object;//echo "mon_objet_Echange-".$id_object;
        
        $this->ch->insertChange($id,$id_object,$id_proprietaire_object,$id_object_demande);

        redirect('Acceuil/category');
    }

    public function pageAdmin(){
        $allCategory = array();

        $data = array();

        $allCategory['allcategory'] = $this->ctg->getAllCategory();

        $data['allcategory'] = $allCategory;

        $this->load->view('headerAdmin');

        $this->load->view('pages/gestionCategorie',$data);

        $this->load->view('footer');
        
    }

    public function statistique(){
        $data = array();

        $nbUser = $this->stat->getUserInscrit();

        $nbEchangeEffectue = $this->stat->getNbEchangeEffectue();

        $data['nbuser'] = $nbUser;

        $data['nbEchangeEffectue'] = $nbEchangeEffectue;

        $this->load->view('headerAdmin');

        $this->load->view('pages/statistique',$data);
        
        $this->load->view('footer');
    }
    
}
