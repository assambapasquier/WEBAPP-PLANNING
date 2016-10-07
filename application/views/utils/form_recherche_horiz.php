<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CAMPLAN-Login</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>asset/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url(); ?>asset/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
    <link href="<?php echo base_url(); ?>asset/css/select/select2.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
		
		
            <div id="login" class="animate form">
                <section class="login_content">
                    
                    <form method="POST" action="<?php echo base_url(); ?>utilisateur/filtre">
                        <i class="fa fa-search-plus fa-5x"></i><h1 style="color:rgb(0,132,232);">BIENVENU DANS CAMPLAN</h1>
                        <!--<p style="color:red;"><strong>Verifiez votre login et/ou votre mot de passe!</strong></p>-->
                       
                        <!--<div>
                            <input type="text" class="form-control" name="service" placeholder="entrez le service"/>
                        </div>-->
                        <div class="form-group">
                            <!--<label class="control-label col-md-3 col-sm-3 col-xs-12">Service</label>-->
                           <select class="select2_single form-control" name = "service" tabindex="-1">
                               <option value="0">Service</option>
                               <?php
                                    foreach ($services as $v1){
                                        if($v1!==array()){
                                            echo '<option value="'.$v1['id'].'">'.$v1['nom_service'].'</option>';
                                        }
                                    }
                                ?> 
                            </select>
                        </div>
                        <?php echo form_error('login'); ?>
                        
                        <div class="form-group">
                            <!--<label class="control-label col-md-3 col-sm-3 col-xs-12">Service</label>-->
                            <select class="select2_single form-control" name = "departement" tabindex="-1">
                                <option value="0">Departement</option>
                                <?php
                                    foreach ($departements as $v1){
                                        if($v1!==array()){
                                            echo '<option value="'.$v1['id'].'">'.$v1['libelle'].'</option>';
                                        }
                                    }
                                ?> 
                            </select>
                        </div>
                        <?php echo form_error('mdp'); ?>
                        
                        <div class="form-group">
                            <!--<label class="control-label col-md-3 col-sm-3 col-xs-12">Service</label>-->
                            <select class="select2_single form-control" name = "direction" tabindex="-1">
                                <option value="0">Direction</option>
                                <?php
                                    foreach ($directions as $v1){
                                        if($v1!==array()){
                                            echo '<option value="'.$v1['id'].'">'.$v1['libelle'].'</option>';
                                        }
                                    }
                                ?> 
                            </select>
                        </div>
                        <?php echo form_error('mdp'); ?>
                        
                        <div class="form-group">
                            <!--<label class="control-label col-md-3 col-sm-3 col-xs-12">Service</label>-->
                            <select class="select2_single form-control" name="ville" tabindex="-1">
                                <option value="0">Ville</option>
                                <?php
                                    foreach ($villes as $v1){
                                        if($v1!==array()){
                                            echo '<option value="'.$v1['id'].'">'.$v1['nom_ville'].'</option>';
                                        }
                                    }
                                ?> 
                            </select>
                        </div>
			
                        <div class="separator">
                        
                        <div>
                            <button class="btn btn-primary" type="submit">Entrer</button>
                            <!--<a class="reset_pass" href="#">Mot de passe oublié?</a>-->
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <div>
                                <h1><i class="fa fa-calendar-o" style="font-size: 26px;"></i> CAMTEL PLANNING</h1>

                                <p>©2016 All Rights Reserved.</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
           
        </div>
    </div>
        <script src="<?php echo base_url(); ?>asset/js/autocomplete/jquery.autocomplete.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/select/select2.full.js"></script>
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>

</body>

</html>