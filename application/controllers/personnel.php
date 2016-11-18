<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personnel
 *
 * @author pasquierase
 */
class Personnel extends CI_Controller{
    //put your code here
    private $data = array();
    //put your code here
    function __construct() {  
        parent::__construct(); //obligatoire
        /*chargement des modèle utiles ici*/
        $this->load->model('utils/responsables_model');  
        $this->load->model('utils/roles_model');  
        $this->load->model('utils/utilisateurs_model');  
        $this->load->model('plannif/astreintes_model'); 
        $this->load->model('plannif/lieu_model'); 
        $this->load->model('plannif/ligneAstrs_model'); 
        $this->load->model('plannif/lignePerms_model'); 
        $this->load->model('plannif/lignePerms_Utilisateurs_model'); 
        $this->load->model('plannif/permanences_NumeroUtiles_model'); 
        $this->load->model('plannif/numeroUtiles_model'); 
        $this->load->model('plannif/permanences_model'); 
        $this->load->model('plannif/villes_model'); 
        $this->load->model('utils/services_model'); 
        $this->load->model('utils/departements_model');
        $this->load->model('utils/directions_model');
        $this->load->model('perso/connexions_model');
        $this->load->model('perso/taches_model');
        
    }
    
    public function index(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->accueil();
        }
    }
    
    public function accueil(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
           //$this->chargerSession();
           //$this->load->view('accueil_r', $this->data);
           redirect('personnel/dashboard_perso', 'refresh');
        }
    }
    
    public function dashboard_perso(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->chargerSession();
            
            $this->chargerTaches($this->data['matricule']);
            $this->chargerConnexions($this->data['matricule']);
            //$this->data['size_taches'] = sizeof($this->data['taches']);
            
            $this->load->view('dashboard_perso', $this->data);
           
        }     
    }
    
    public function ajouter_tache(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->chargerSession();
            
            $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
            $this->load->library('form_validation'); //pour la validation du formulaire
            $this->form_validation->set_rules('libelle','"Libelle"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('description','"Description"','trim|required|encode_php_tags');
        
            if($this->form_validation->run()){
                $libelle = $this->input->post('libelle');
                $description = $this->input->post('description');
                $now_date = date("Y-m-d");
                
                $result = $this->taches_model->creer(array('libelle'=>$libelle, 'description'=>$description, 'statut'=>0, 'date_tache'=>$now_date, 'matricule'=>$this->data['matricule']));
                redirect('personnel/dashboard_perso', 'refresh'); 
            }
            else{
                redirect('personnel/dashboard_perso', 'refresh'); 
            }
           
        }
    }
    
    public function achever_tache($id=''){
        $result = $this->taches_model->maj(array('id' => $id), array('statut'=>1));
        redirect('personnel/dashboard_perso', 'refresh');
    }
    
    /*********************************connexion***********************************************************************/
    public function connexion(){
        $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
        $this->load->library('form_validation'); //pour la validation du formulaire
        $this->form_validation->set_rules('matricule','"Matricule"','trim|required|encode_php_tags');
        $this->form_validation->set_rules('mdp','"Password"','trim|required|encode_php_tags');
        
        if($this->form_validation->run()){
            $matricule = $this->input->post('matricule');
            $password = $this->input->post('mdp');
            //echo $password;
            $result = $this->utilisateurs_model->get(array('matricule' => $matricule, 'passwd' => $password));
            //var_dump($result);
            if(is_array($result) && count($result) == 1){
                $this->data = array(
                    'matricule' => $result[0]->matricule,
                    'passwd' => $result[0]->passwd,
                    'nom' => $result[0]->nom,
                    'prenom' => $result[0]->prenom,
                    'service' => $result[0]->Services,
                    'departement' => $result[0]->Departements,
                    'direction' => $result[0]->Directions,
                    'isLoggedIn'=>TRUE
                );
                $this->session->set_userdata($this->data);
                $now_date = date("Y-m-d");
                $now_time = date("H:i:s");
                $this->connexions_model->creer(array('date_conn' => $now_date, 'heure' => $now_time, 'matricule'=>$matricule));
                redirect('personnel/accueil', 'refresh');
            }
            else{
                //echo'<div class="alert alert-dismissable alert-danger"><small>Vos parametres d\'authentification sont inconrrects </small></div>';
                $type = array('error' => 1, 'resp'=>'responsable');
                $this->load->view('login_personnel', $type);
            }
        }
        else{
            //echo 'hey';
            $type = array('error' => 0, 'resp'=>'responsable');
            echo validation_errors();
            //$this->load->view('login_personnel', $type);
        }
    }
    
    public function deconnexion(){
        $this->session->sess_destroy();
        $this->data['isLoggedIn'] = FALSE;
        redirect('personnel/accueil', 'refresh');
        exit;
    }
    
    
    private function sign_in(){
        $type = array('error' => 0, 'resp'=>'responsable');
        $this->load->view('login_personnel', $type);
    }
    
    private function is_logged(){
        if($this->session->userdata('isLoggedIn')!==null){
            if($this->session->userdata('isLoggedIn')){
                return TRUE;
            }
            else{
               return FALSE; 
            }
        }
        else{
            return FALSE;
        }
    }
    
    /********************************chargement des contexts************************************************/
    protected function chargerSession(){
        $this->data = array(
            'matricule' => $this->session->userdata('matricule'),
            'passwd' => $this->session->userdata('passwd'),
            'nom' => $this->session->userdata('nom'),
            'prenom' => $this->session->userdata('prenom'),
            'service' => $this->session->userdata('service'),
            'departement' => $this->session->userdata('departement'),
            'direction' => $this->session->userdata('direction'),
            'isLoggedIn'=>TRUE
        );
        
        //$this->data['departement'] = $this->chargerPersonnelsDepartements();
        //echo $this->data['departement'];
    }
    
    protected function chargerTaches($matricule){
        $taches[] = array();
        $result2 = $this->taches_model->get(array('matricule'=>$matricule));
        $taille = 0;
        foreach ($result2 as $row2){
               $taches[$taille] = array('id'=>$row2->id, 'libelle'=>$row2->libelle, 'description'=>$row2->description,
                      'statut'=>$row2->statut, 'date_tache'=>$row2->date_tache);
               $taille = $taille+1;  
        }
        $this->data['taches'] = $taches;
        
    }
    
    protected function chargerConnexions($matricule){
        $conn[] = array();
        $result2 = $this->connexions_model->get(array('matricule'=>$matricule));
        $taille = 0;
        foreach ($result2 as $row2){
               $conn[$taille] = array('date_conn'=>$row2->date_conn, 'heure'=>$row2->heure);
               $taille = $taille+1;  
        }
        $this->data['connexions'] = $conn;
        
    }
    
}
