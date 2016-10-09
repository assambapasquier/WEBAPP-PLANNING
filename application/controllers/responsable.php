<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of responsable
 *
 * @author pasquierase
 */
class responsable extends CI_Controller{
   
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
        
    }
    
    public function index(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->accueil();
        }
    }
    
    public function connexion(){
        $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
        $this->load->library('form_validation'); //pour la validation du formulaire
        $this->form_validation->set_rules('matricule','"Matricule"','trim|required|encode_php_tags');
        $this->form_validation->set_rules('mdp','"Password"','trim|required|encode_php_tags');
        
        if($this->form_validation->run()){
            $matricule = $this->input->post('matricule');
            $password = $this->input->post('mdp');
            //echo $password;
            $result = $this->responsables_model->get(array('matricule' => $matricule, 'mot_de_passe' => $password));
            if(is_array($result) && count($result) == 1){
                $this->data = array(
                    'matricule' => $result[0]->matricule,
                    'mot_de_passe' => $result[0]->mot_de_passe,
                    'idrole' => $result[0]->Roles,
                    'service' => $result[0]->Services,
                    'departement' => $result[0]->Departements,
                    'direction' => $result[0]->Directions,
                    'isLoggedIn'=>TRUE
                );
                $this->session->set_userdata($this->data);
                redirect('responsable/accueil', 'refrech');
            }
            else{
                //echo'<div class="alert alert-dismissable alert-danger"><small>Vos parametres d\'authentification sont inconrrects </small></div>';
                $type = array('error' => 1, 'resp'=>'responsable');
                $this->load->view('login', $type);
            }
        }
        else{
            //echo 'hey';
            $type = array('error' => 0, 'resp'=>'responsable');
            $this->load->view('login', $type);
        }
    }
    
    public function accueil(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
           //$this->chargerSession();
           //$this->load->view('accueil_r', $this->data);
           redirect('responsable/accueil_r', 'refresh');
        }
    }
    
    public function deconnexion(){
        $this->session->sess_destroy();
        $this->data['isLoggedIn'] = FALSE;
        redirect('utilisateur', 'refresh');
        exit;
    }
    
    public function accueil_r(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->chargerSession();
            $this->chargerContext($this->data['service'], $this->data['departement'], $this->data['direction'], $this->data['matricule'], $this->data['mot_de_passe']);
            
            $this->chargerPersonnels($this->data['service'], $this->data['departement'], $this->data['direction']);
            $this->chargerPerm($this->data['service'], $this->data['departement'], $this->data['direction']);
            $this->chargerServices($this->data['service'], $this->data['departement'], $this->data['direction']);
            $this->chargerDepartements($this->data['service'], $this->data['departement'], $this->data['direction']);
            $this->data['size_perso'] = sizeof($this->data['perso']);
            //$this->data['perm'] = $permanences;
            $this->data['size_perm'] = sizeof($this->data['perm']);
        
            $this->load->view('accueil_r', $this->data);
           
        }     
    }
    
    public function permanences($idperm = ''){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            
            $this->chargerSession();
            $this->chargerContext($this->data['service'], $this->data['departement'], $this->data['direction'], $this->data['matricule'], $this->data['mot_de_passe']);
           
            $this->chargerLignePerm($idperm);
            //var_dump($this->data['ligne_perm']);
            $this->load->view('permanences_r', $this->data);
        }
    }
    
    
    public function astreintes(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->chargerSession();
            $this->chargerContext($this->data['service'], $this->data['departement'], $this->data['direction'], $this->data['matricule'], $this->data['mot_de_passe']);
            $this->chargerPersonnels($this->data['service'], $this->data['departement'], $this->data['direction']);
            
            $this->chargerLieux();
            
            $result = $this->ligneAstrs_model->get(array('Services'=>$this->session->userdata('service'),
            'Departements'=>$this->session->userdata('departement'), 'Directions'=>$this->session->userdata('direction')));
            //var_dump($result);
            $astreintes[] = array();
            $taille = 0;
            foreach ($result as $row){
               //echo $row->nom;
               $user = $this->utilisateurs_model->get(array('matricule'=>$row->Utilisateurs));
               if(is_array($user) && count($user) == 1){
                   $astreintes[$taille] = array('id'=>$row->id, 'date_deb'=>$row->date_deb, 'date_fin'=>$row->date_fin, 'Lieu'=>$row->Lieu, 'Utilisateurs'=>$row->Utilisateurs,
                       'nom'=>$user[0]->nom, 'prenom'=>$user[0]->prenom,'tel1'=>$user[0]->tel1,'email'=>$user[0]->email);
                   $taille = $taille+1;  
               }
               
            }
            $this->data['astr'] = $astreintes;
            $this->load->view('astreintes_r', $this->data);
            //var_dump($astreintes);
        }
    }
    
    public function creer_perm(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->chargerSession();
            $this->chargerContext($this->data['service'], $this->data['departement'], $this->data['direction'], $this->data['matricule'], $this->data['mot_de_passe']);

            $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
            $this->load->library('form_validation'); //pour la validation du formulaire
            $this->form_validation->set_rules('libelle','"Libelle"','trim|required|encode_php_tags');
        
            if($this->form_validation->run()){
                $libelle = $this->input->post('libelle');
                
                $result = $this->permanences_model->creer(array('libelle'=>$libelle, 'Services'=>$this->data['service'], 'Departements'=>$this->data['departement'], 'Directions'=>$this->data['direction']));
                if($result){
                    redirect('responsable/accueil_r', 'refresh');
                }
                else{
                    redirect('responsable/accueil_r', 'refresh');
                }
                
                
            }
            else{
                redirect('responsable/accueil_r', 'refresh');
            }
           
        }
    }
    
    public function creer_astr(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->chargerSession();
            $this->chargerContext($this->data['service'], $this->data['departement'], $this->data['direction'], $this->data['matricule'], $this->data['mot_de_passe']);
           
            $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
            $this->load->library('form_validation'); //pour la validation du formulaire
            $this->form_validation->set_rules('personnel','"Personnel"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('debut','"Debut"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('fin','"Fin"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('lieu','"Lieu"','trim|required|encode_php_tags');
        
            if($this->form_validation->run()){
                $matricule = $this->input->post('personnel');
                $date_deb = $this->input->post('debut');
                $date_fin = $this->input->post('fin');
                $lieu = $this->input->post('lieu');
                $result = $this->ligneAstrs_model->creer(array('date_deb'=>$date_deb, 'date_fin'=>$date_fin,
                    'Lieu'=>$lieu, 'Utilisateurs'=>$matricule, 'Services'=>$this->data['service'], 
                    'Departements'=>$this->data['departement'], 'Directions'=>$this->data['direction']));
                
                 redirect('responsable/astreintes', 'refresh');
            }
            else{
                redirect('responsable/astreintes', 'refresh');
            }
        }
    }
    
    public function modif_perm(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
            $this->load->library('form_validation'); //pour la validation du formulaire
            $this->form_validation->set_rules('libelle','"Libelle"','trim|required|encode_php_tags');
            if($this->form_validation->run()){
                $libelle = $this->input->post('libelle');
                $id = $this->input->post('identifiant');
                $result = $this->permanences_model->maj(array('id'=>$id), array('libelle'=>$libelle));
                redirect('responsable/accueil_r', 'refresh');
            }
        }
    }
    
    public function modif_astr(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
            $this->chargerSession();
            $this->chargerContext($this->data['service'], $this->data['departement'], $this->data['direction'], $this->data['matricule'], $this->data['mot_de_passe']);
           
            $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
            $this->load->library('form_validation'); //pour la validation du formulaire
            $this->form_validation->set_rules('matricule','"Matricule"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('nom','"Nom"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('prenom','"Prenom"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('email','"Email"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('tel','"Telphone"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('debut','"Debut"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('fin','"Fin"','trim|required|encode_php_tags');
            $this->form_validation->set_rules('finC','"Fin"','trim|encode_php_tags');
            $this->form_validation->set_rules('debutC','"Fin"','trim|encode_php_tags');
        
            if($this->form_validation->run()){
                $matricule = $this->input->post('matricule');
                $date_debC = $this->input->post('debutC');
                $date_finC = $this->input->post('finC');
                $date_deb = $this->input->post('debut');
                $date_fin = $this->input->post('fin');
                
                $dd = date("Y-m-d", strtotime($date_deb));
                $df = date("Y-m-d", strtotime($date_fin));
                
                
                if($this->input->post('action') == 'upd'){
                    $result = $this->ligneAstrs_model->maj(array('Utilisateurs'=>$matricule, 'date_deb'=>$dd, 'date_fin'=>$df), array('date_deb'=>$date_debC, 'date_fin'=>$date_finC));
                    if($result){
                        redirect('responsable/astreintes', 'refresh');
                    }
                    else{
                        redirect('responsable/astreintes', 'refresh');
                    }
                }
                else{
                    $result = $this->ligneAstrs_model->supprimer(array('Utilisateurs'=>$matricule, 'date_deb'=>$dd, 'date_fin'=>$df));
                    if($result){
                        
                        redirect('responsable/astreintes', 'refresh');
                    }
                    else{
                        redirect('responsable/astreintes', 'refresh');
                       
                    }
                }
            }
            else{
                /*echo form_error('matricule');
                echo $this->input->post('matricule');
                echo $this->input->post('nom');*/
            }
        }
    }
    
    public function del_perm(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
           $this->form_validation->set_error_delimiters('<p style="color:red;">', '</p>');
            //$this->load->library('form_validation'); //pour la validation du formulaire
            //$this->form_validation->set_rules('libelle','"Libelle"','trim|required|encode_php_tags');
            
            $id = $this->input->post('identifiant');
            $result = $this->permanences_model->supprimer(array('id'=>$id));
            redirect('responsable/accueil_r', 'refresh');
        }
    }
    
    public function del_astr(){
        if(!$this->is_logged()){
            $this->sign_in();
        }
        else{
           /*$result = $this->utilisateurs_model->get(array('Services'=>$this->session->userdata('Services'),
            'Departements'=>$this->session->userdata('Departements'),'Directions'=>$this->session->userdata('Directions')));
            var_dump($result);*/
        }
    }
    
    
    private function sign_in(){
        $type = array('error' => 0, 'resp'=>'responsable');
        $this->load->view('login', $type);
        /* $services[] = array();
         $result = $this->services_model->getAll();
         $taille = 0;
         foreach ($result as $row){
            //echo $row->nom;
            $services[$taille] = array('id'=>$row->id, 'nom_service'=>$row->nom_service);
            $taille = $taille+1;   
        }
        $data['s'] = $services;
        $data['type'] = array('error' => 0, 'resp'=>'responsable');
        
         $this->load->view('choix', $data); */
         
        
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
    
    protected function chargerSession(){
        $this->data = array(
            'matricule' => $this->session->userdata('matricule'),
            'mot_de_passe' => $this->session->userdata('mot_de_passe'),
            'idrole' => $this->session->userdata('role'),
            'service' => $this->session->userdata('service'),
            'departement' => $this->session->userdata('departement'),
            'direction' => $this->session->userdata('direction'),
            'isLoggedIn'=>TRUE
        );
        
        //$this->data['departement'] = $this->chargerPersonnelsDepartements();
        //echo $this->data['departement'];
    }
    
    
    protected function chargerPersonnels($ser, $dept, $dir){
        $personnels[] = array();
        
        if($ser!=null){
            $result = $this->utilisateurs_model->get(array('Services'=>$ser, 'matricule !='=>$this->data['matricule']));
            $taille = 0;
            foreach ($result as $row){
                $personnels[$taille] = array('matricule'=>$row->matricule, 'nom'=>$row->nom,
                'prenom'=>$row->prenom, 'tel1'=>$row->tel1, 'email'=>$row->email);
                 $taille = $taille+1;  
            }
        }
        elseif($dept!=null){
            $result = $this->utilisateurs_model->get(array('Departements'=>$dept, 'matricule !='=>$this->data['matricule']));
            $taille = 0;
            foreach ($result as $row){
                $personnels[$taille] = array('matricule'=>$row->matricule, 'nom'=>$row->nom,
                'prenom'=>$row->prenom, 'tel1'=>$row->tel1, 'email'=>$row->email);
                 $taille = $taille+1;  
            }
        }
        elseif($dir!=null){
            $result = $this->utilisateurs_model->get(array('Directions'=>$dir, 'matricule !='=>$this->data['matricule']));
            $taille = 0;
            foreach ($result as $row){
                $personnels[$taille] = array('matricule'=>$row->matricule, 'nom'=>$row->nom,
                'prenom'=>$row->prenom, 'tel1'=>$row->tel1, 'email'=>$row->email);
                 $taille = $taille+1;  
            }
        }
        $this->data['perso'] = $personnels;
        //return $personnels;
    }
    
    protected function chargerServices($ser, $dept, $dir){
        $services[] = array();
        if($ser!=null){
            
        }
        elseif($dept!=null){
            $result = $this->services_model->get(array('Departements'=>$dept));
            $taille = 0;
            foreach ($result as $row){
                   $services[$taille] = array('id'=>$row->id, 'nom_service'=>$row->nom_service);
                    $taille = $taille+1;  
            }
        }
        elseif($dir!=null){
            $result = $this->services_model->get(array('Directions'=>$dir));
            $taille = 0;
            foreach ($result as $row){
                   $services[$taille] = array('id'=>$row->id, 'nom_service'=>$row->nom_service);
                    $taille = $taille+1;  
            }
        }
        
        $this->data['services'] = $services;
        //return $personnels;
    }
    
    protected function chargerDepartements($ser, $dept, $dir){
        $departements[] = array();
        if($ser!=null){
            
        }
        elseif($dept!=null){
            
        }
        elseif($dir!=null){
            $result = $this->departements_model->get(array('Directions'=>$dir));
            $taille = 0;
            foreach ($result as $row){
                   $departements[$taille] = array('id'=>$row->id, 'libelle'=>$row->libelle);
                   $taille = $taille+1;  
            }
        }
        
        $this->data['departements'] = $departements;
        //return $personnels;
    }
    
    
    protected function chargerLieux(){
        $lieux[] = array();
        $result2 = $this->lieu_model->getAll();
        $taille = 0;
        foreach ($result2 as $row2){
               $lieux[$taille] = array('id'=>$row2->id, 'libelle'=>$row2->libelle);
               $taille = $taille+1;  
        }
        $this->data['lieu'] = $lieux;
        
    }
    
    protected function chargerPerm($ser, $dept, $dir){
        $permanences[] = array();
        if($ser!=null){
            $result2 = $this->permanences_model->get(array('Services'=>$ser));
            $taille = 0;
            //var_dump($result2);
            foreach ($result2 as $row2){
                   $permanences[$taille] = array('id'=>$row2->id, 'libelle'=>$row2->libelle);
                   $taille = $taille+1;  
            }
        }
        elseif($dept!=null){
             $result2 = $this->permanences_model->get(array('Departements'=>$dept));
            $taille = 0;
            //var_dump($result2);
            foreach ($result2 as $row2){
                   $permanences[$taille] = array('id'=>$row2->id, 'libelle'=>$row2->libelle);
                   $taille = $taille+1;  
            }
        }
        elseif($dir!=null){
             $result2 = $this->permanences_model->get(array('Directions'=>$dir));
            $taille = 0;
            //var_dump($result2);
            foreach ($result2 as $row2){
                   $permanences[$taille] = array('id'=>$row2->id, 'libelle'=>$row2->libelle);
                   $taille = $taille+1;  
            }
        }
        
        $this->data['perm'] = $permanences;
        
    }
    
    public function chargerLignePerm($idperm){
        $lps[] = array();
        //$result2 = $this->lignePerms_model->get(array('Permanences'=>$idperm));
        $result2 = $this->lignePerms_model->ligne_perm($idperm);
        $taille = 0;
        //var_dump($result2);
        foreach ($result2 as $row2){
               $lps[$taille] = array('idlp'=>$row2->idlp, 'date_perm'=>$row2->date_perm, 'nom'=>$row2->nom, 'prenom'=>$row2->prenom,'tel1'=>$row2->tel1,
                   'email'=>$row2->email, 'heure_deb'=>$row2->heure_deb, 'heure_fin'=>$row2->heure_fin, 'libperm'=>$row2->libperm);
               //$lps[$taille] = array('id'=>$row2->id, 'date_perm'=>$row2->date_perm);
               $taille = $taille+1;  
        }
        $this->data['ligne_perm'] = $lps;
    }
    
    protected function chargerContext($ser, $dept, $dir, $matricule, $password){
        if(!($ser == null)){
            $this->chargerContextChefService($matricule, $password);
        }
        elseif(!($dept == null)){
            $this->chargerContextCD($matricule, $password);
        }
        elseif(!($dir == null)){
            $this->chargerContextDir($matricule, $password);
        }        
    }
    
    protected function chargerContextChefService($matr, $pass){
        $result = $this->services_model->ContexteResponsableCS($matr, $pass);
        $context = array(
                 'role' => $result[0]->libellerole,
                 'indicatif'=>"service",
                 'structure' => $result[0]->nom_service,
                 'idstructure' => $result[0]->idser,
                 'nom' => $result[0]->nom,
                 'prenom' => $result[0]->prenom,
                 'tel1' => $result[0]->tel1,
                 'email'=> $result[0]->email,
                 'idVille' => $result[0]->idville,
                 'ville' => $result[0]->nom_ville,
                 'isLoggedIn'=>TRUE
             );
        
        $this->data['context'] = $context;
    }
    
    protected function chargerContextCD($matr, $pass){
        $result = $this->services_model->ContexteResponsableCD($matr, $pass);
        $context = array(
            'role' => $result[0]->libellerole,
            'indicatif'=>"departement",
            'structure' => $result[0]->libelledept,
            'idstructure' => $result[0]->iddept,
            'nom' => $result[0]->nom,
            'prenom' => $result[0]->prenom,
            'tel1' => $result[0]->tel1,
            'email'=> $result[0]->email,
            'idVille' => $result[0]->idville,
            'ville' => $result[0]->nom_ville,
            'isLoggedIn'=>TRUE
        );
        
        $this->data['context'] = $context;
    }
    
    protected function chargerContextDir($matr, $pass){
        $result = $this->services_model->ContexteResponsableDir($matr, $pass);
        $context = array(
            'role' => $result[0]->libellerole,
            'indicatif'=>"direction",
            'structure' => $result[0]->libelledir,
            'idstructure' => $result[0]->iddir,
            'nom' => $result[0]->nom,
            'prenom' => $result[0]->prenom,
            'tel1' => $result[0]->tel1,
            'email'=> $result[0]->email,
            'idVille' => $result[0]->idville,
            'ville' => $result[0]->nom_ville,
            'isLoggedIn'=>TRUE
        );
        
        $this->data['context'] = $context;
    }
}
