<!--<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Administration</title>

</head>


<body>
    <h1> Bienvenu M. <?php echo $nom; ?></h1>
    <a href="<?php echo base_url(); ?>admin/deconnexion"> se deconnecter </a>
    <hr>
    <a href="<?php echo base_url(); ?>admin/ajouterTypeUsers"> ajouter un type d'utilisateur</a>
    <a href="<?php echo base_url(); ?>admin/modifierTypeUsers"> modifier un type d'utilisateur</a>
    <a href="<?php echo base_url(); ?>admin/supprimerTypeUsers"> supprimer un type d'utilisateur</a>
    <a href="<?php echo base_url(); ?>admin/consulterTypeUsers"> liste des types d'utilisateurs</a>
    <hr>
    <a href="<?php echo base_url(); ?>admin/ajouterUsers"> ajouter un utilisateur </a>
    <a href="<?php echo base_url(); ?>admin/modifierUsers"> modifier un utilisateur </a>
    <a href="<?php echo base_url(); ?>admin/supprimerUsers"> supprimer un utiisateur </a>
    <a href="<?php echo base_url(); ?>admin/consulterUsers"> liste des utilisateurs </a>
    <hr>
    <a href="<?php echo base_url(); ?>admin/ajouterService"> ajouter un service </a>
    <a href="<?php echo base_url(); ?>admin/modifierService"> modifier un service </a>
    <a href="<?php echo base_url(); ?>admin/supprimerService"> supprimer un service </a>
    <a href="<?php echo base_url(); ?>admin/consulterService"> liste des services </a>
    <hr>
    <a href="<?php echo base_url(); ?>admin/consulterDepartement"> ajouter un département </a>
    <a href="<?php echo base_url(); ?>admin/consulterDepartement"> modifier un département </a>
    <a href="<?php echo base_url(); ?>admin/consulterDepartement"> supprimer un département </a>
    <a href="<?php echo base_url(); ?>admin/consulterDepartement"> liste des départements </a>
    <hr>
    <a href="<?php echo base_url(); ?>admin/consulterDirection"> ajouter une direction </a>
    <a href="<?php echo base_url(); ?>admin/consulterDirection"> modifier une direction </a>
    <a href="<?php echo base_url(); ?>admin/consulterDirection"> supprimer une direction </a>
    <a href="<?php echo base_url(); ?>admin/consulterDirection"> liste des directions </a>
    <hr> 
</body>

</html>-->

<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to the Dashboard</title>
</head>
<body>
 
<div id="container">
  <h1>Welcome to the Dashboard!</h1>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
 
</body>
</html>