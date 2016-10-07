<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Responsable</title>

</head>


<body>
    <h1> Bienvenu M. <?php //echo $nom; ?></h1>
    <a href="<?php echo base_url(); ?>responsable/personnels"> liste du personnel</a>
    <br/>
    <a href="<?php echo base_url(); ?>responsable/permanences"> voir les permanences</a>
    <br/>
    <a href="<?php echo base_url(); ?>responsable/astreintes"> voir les astreintes</a>
    <br/>
    <a href="<?php echo base_url(); ?>responsable/creer_perm"> créer une permanence</a>
    <br/>
    <a href="<?php echo base_url(); ?>responsable/creer_astr"> créer une astreinte</a>
    <br/>
    <a href="<?php echo base_url(); ?>responsable/modif_perm"> modifier une permanence </a>
    <br/>
    <a href="<?php echo base_url(); ?>responsable/modif_astr"> modifier une astreinte </a>
    <br/>
    <a href="<?php echo base_url(); ?>responsable/del_perm"> supprimer une permanence </a>
    <br/>
    <a href="<?php echo base_url(); ?>responsable/del_astr"> supprimer une astreinte </a>
    <br/>
    
</body>

</html>