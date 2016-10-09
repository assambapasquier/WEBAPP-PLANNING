<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of the CRUD Class
 *
 * @author pasquierase
 */
class MY_Model extends CI_Model{
    //put your code here
    protected $table = ''; //le nom des tables (dynamiquement générés)
    
    /**
    * Créer un nouvel enregistrement avec les valeurs passées en paramètre et retourne son id
    **/
    public function creer($values) {
            if($this->db->set($values)->insert($this->table)) return $this->db->insert_id();
            return null;
    }


    /**
    * Met à jour les enregistrements en fonction des condiditions passées en paramètres
    **/
    public function maj($where, $value) {
            return (bool) $this->db->where($where)->update($this->table, $value);
    }

    /**
    * Supprime les enregistrements en fonction des condiditions passées en paramètres
    **/
    public function supprimer($where) {
            return (bool) $this->db->where($where)->delete($this->table);
    }
    
    /**
    * Recherche les enregistrements correspondants aux condiditions passées en paramètres.
    **/
    public function get($where = array()) {
        $req = $this->db->get_where($this->table, $where);
        return $req->result();
    }
    
    /**
    * select * from WHERE.....
    **/
    public function getAll() {
        
        $req = $this->db->get($this->table);  // Produces: SELECT * FROM mytable (without where)
        return $req->result();
    }
    
    /**
     * count 
     */
    
    public function count($where = array()){
        //si le paramettre est null (count()) alors la totalité sera retournée
        return (int) $this->db->where($where)->count_all_results($this->table);
    }
    
    
    public function ligne_perm($idperm){
        $this->db->select('LignePerms.id AS idlp, date_perm, nom, prenom, tel1, email, heure_deb, heure_fin, Permanences.libelle AS libperm');
        $this->db->from('Permanences');
        $this->db->join('LignePerms', 'Ligneperms.Permanences = Permanences.id');
        $this->db->join('LignePerms_Utilisateurs', 'Ligneperms.id = LignePerms_Utilisateurs.LignePerms');
        $this->db->join('Utilisateurs', 'Utilisateurs.matricule = LignePerms_Utilisateurs.matricule');
        $this->db->where('LignePerms.Permanences', $idperm);
        $req = $this->db->get();
        return $req->result();
    }
    
    public function AllLigne_perm(){
        $this->db->select('date_perm, nom, prenom, tel1, email, heure_deb, heure_fin');
        $this->db->from('LignePerms');
        $this->db->join('LignePerms_Utilisateurs', 'Ligneperms.id = LignePerms_Utilisateurs.LignePerms');
        $this->db->join('Utilisateurs', 'Utilisateurs.matricule = LignePerms_Utilisateurs.matricule');
        //$this->db->where('LignePerms.id', $idperm);
        $req = $this->db->get();
        return $req->result();
    }
    
    public function permanencesDept_ville($dept, $vil, $start, $end, $service){
        $this->db->select('date_perm, nom, prenom, tel1, email, heure_deb, heure_fin');
        $this->db->from('Permanences');
        $this->db->join('LignePerms', 'Ligneperms.Permanences = Permanences.id');
        $this->db->join('LignePerms_Utilisateurs', 'Ligneperms.id = LignePerms_Utilisateurs.LignePerms');
        $this->db->join('Utilisateurs', 'Utilisateurs.matricule = LignePerms_Utilisateurs.matricule');
        $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
        $this->db->where(array('Permanences.Departements'=>$dept,'Villes.id'=>$vil));
        $this->db->where(array('LignePerms.date_perm >='=>$start));
        $this->db->where(array('LignePerms.date_perm <='=>$end));
        
        if($service!=null){
           $this->db->where(array('Utilisateurs.Services'=>$service)); 
        }
        
        $req = $this->db->get();
        return $req->result();
    }
    
    /*public function permanences($dir, $dept, $ser, $vil){
        if($vil==null){
            if($ser==null){
                $this->db->select('date_perm, nom, prenom, tel1, email, heure_deb, heure_fin');
                $this->db->from('Permanences');
                $this->db->join('LignePerms', 'Ligneperms.Permanences = Permanences.id');
                $this->db->join('LignePerms_Utilisateurs', 'Ligneperms.id = LignePerms_Utilisateurs.LignePerms');
                $this->db->join('Utilisateurs', 'Utilisateurs.matricule = LignePerms_Utilisateurs.matricule');
                $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
                $this->db->where(array('Permanences.Services'=>$ser, 'Permanences.Departements'=>$dept,'Permanences.Directions'=>$dir));
            }
            else{
                $this->db->select('date_perm, nom, prenom, tel1, email, heure_deb, heure_fin');
                $this->db->from('Permanences');
                $this->db->join('LignePerms', 'Ligneperms.Permanences = Permanences.id');
                $this->db->join('LignePerms_Utilisateurs', 'Ligneperms.id = LignePerms_Utilisateurs.LignePerms');
                $this->db->join('Utilisateurs', 'Utilisateurs.matricule = LignePerms_Utilisateurs.matricule');
                $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
                $this->db->where(array('Permanences.Services'=>$ser, 'Permanences.Departements'=>$dept,'Permanences.Directions'=>$dir,'Utilisateurs.Services'=>$ser));
                //$this->db->where(array('Permanences.Departements'=>$dept,'Permanences.Directions'=>$dir,'Utilisateurs.Services'=>$ser));
            }
        }
        else{
            if($ser==null){
               $this->db->select('date_perm, nom, prenom, tel1, email, heure_deb, heure_fin');
                $this->db->from('Permanences');
                $this->db->join('LignePerms', 'Ligneperms.Permanences = Permanences.id');
                $this->db->join('LignePerms_Utilisateurs', 'Ligneperms.id = LignePerms_Utilisateurs.LignePerms');
                $this->db->join('Utilisateurs', 'Utilisateurs.matricule = LignePerms_Utilisateurs.matricule');
                $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
                $this->db->where(array('Permanences.Services'=>$ser, 'Permanences.Departements'=>$dept,'Permanences.Directions'=>$dir,'Utilisateurs.Villes'=>$vil)); 
            }
            else{
                $this->db->select('date_perm, nom, prenom, tel1, email, heure_deb, heure_fin');
                $this->db->from('Permanences');
                $this->db->join('LignePerms', 'Ligneperms.Permanences = Permanences.id');
                $this->db->join('LignePerms_Utilisateurs', 'Ligneperms.id = LignePerms_Utilisateurs.LignePerms');
                $this->db->join('Utilisateurs', 'Utilisateurs.matricule = LignePerms_Utilisateurs.matricule');
                $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
                $this->db->where(array('Permanences.Services'=>$ser, 'Permanences.Departements'=>$dept,'Permanences.Directions'=>$dir,'Utilisateurs.Villes'=>$vil, 'Utilisateurs.Services'=>$ser));
            }
            
        }
        
        $req = $this->db->get();
        return $req->result();
    }*/
    
    public function AllAstreintes(){
        $this->db->select('date_deb, date_fin, libelle, nom, prenom, tel1, email, matricule');
        $this->db->from('Utilisateurs');
        $this->db->join('LigneAstrs', 'LigneAstrs.Utilisateurs = Utilisateurs.matricule');
        $this->db->join('Lieu', 'LigneAstrs.Lieu = Lieu.id');
       
        $req = $this->db->get();
        return $req->result();
    }
    
    public function AstreintesDept_ville($dept, $vil, $start, $end, $service){
        $this->db->select('date_deb, date_fin, Lieu.libelle AS lieu, nom, prenom, tel1, email, matricule');
        $this->db->from('Utilisateurs');
        $this->db->join('LigneAstrs', 'LigneAstrs.Utilisateurs = Utilisateurs.matricule');
        $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
        $this->db->join('Lieu', 'LigneAstrs.Lieu = Lieu.id');
        $this->db->where(array('LigneAstrs.Departements'=>$dept,'Villes.id'=>$vil));
        $this->db->where(array('LigneAstrs.date_deb'=>$start));
        
        if($service!=null){
           $this->db->where(array('LigneAstrs.Services'=>$service)); 
        }

        $req = $this->db->get();
        return $req->result();
        
    }
   
    public function Astreintes_ville($dir, $dept, $ser, $vil){
        $this->db->select('date_deb, date_fin, libelle, nom, prenom, tel1, email, matricule');
        $this->db->from('Utilisateurs');
        $this->db->join('LigneAstrs', 'LigneAstrs.Utilisateurs = Utilisateurs.matricule');
        //$this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
        $this->db->join('Lieu', 'LigneAstrs.Lieu = Lieu.id');
        $this->db->where(array('LigneAstrs.Services'=>$ser, 'LigneAstrs.Departements'=>$dept, 'LigneAstrs.Directions'=>$dir/*, 'Villes.id'=>$vil*/));
        $req = $this->db->get();
        return $req->result();
        
    }
    
    public function ContexteResponsableDir($matr, $pass){
        $this->db->select('Utilisateurs.matricule AS matr, mot_de_passe, Roles.libelle AS libellerole, Directions.libelle AS libelledir, nom, prenom, tel1, email, Villes.id AS idville, nom_ville, Directions.id AS iddir');
        $this->db->from('Directions');
        $this->db->join('Responsables', 'Directions.id = Responsables.Directions');
        $this->db->join('Roles', 'Responsables.Roles = Roles.id');
        $this->db->join('Utilisateurs', 'Responsables.matricule = Utilisateurs.matricule');
        $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
        $this->db->where(array('Utilisateurs.matricule'=>$matr, 'mot_de_passe'=>$pass));
       
        $req = $this->db->get();
        return $req->result();
    }
    
    public function ContexteResponsableCD($matr, $pass){
        $this->db->select('Utilisateurs.matricule, mot_de_passe, Roles.libelle AS libellerole, Departements.libelle AS libelledept, nom, prenom, tel1, email, Villes.id AS idville, nom_ville, Departements.id AS iddept');
        $this->db->from('Departements');
        $this->db->join('Responsables', 'Departements.id = Responsables.Departements');
        $this->db->join('Roles', 'Responsables.Roles = Roles.id');
        $this->db->join('Utilisateurs', 'Responsables.matricule = Utilisateurs.matricule');
        $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
        $this->db->where(array('Utilisateurs.matricule'=>$matr, 'mot_de_passe'=>$pass));
       
        $req = $this->db->get();
        return $req->result();
    }
    
    public function ContexteResponsableCS($matr, $pass){
        $this->db->select('Utilisateurs.matricule, mot_de_passe, Roles.libelle AS libellerole, nom_service, nom, prenom, tel1, email, Villes.id AS idville, nom_ville, idser');
        $this->db->from('Services');
        $this->db->join('Responsables', 'Services.id = Responsables.Services');
        $this->db->join('Roles', 'Responsables.Roles = Roles.id');
        $this->db->join('Utilisateurs', 'Responsables.matricule = Utilisateurs.matricule');
        $this->db->join('Villes', 'Utilisateurs.Villes = Villes.id');
        $this->db->where(array('Utilisateurs.matricule'=>$matr, 'mot_de_passe'=>$pass));
       
        $req = $this->db->get();
        return $req->result();
    }
    
    /*************************fonstions du filtre 1****************************************************/
    public function deptid($mc){
        $this->db->select('id, libelle, description');
        $this->db->from('Departements');
        $this->db->like('description', $mc);
        
        $req = $this->db->get();
        return $req->result();
    }
    
    public function villeid($ville){
        $this->db->select('id, nom_ville');
        $this->db->from('Villes');
        $this->db->like('nom_ville', $ville);
        
        $req = $this->db->get();
        return $req->result();
    }
}
