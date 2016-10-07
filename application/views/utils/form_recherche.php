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


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    
                <div class="clearfix"></div>
		<!-- Home Section -->
                <section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2" style="height: 500px; background-position: 50% 0px;">
                        <div class="intro">
                        <div class="intro-sub">BIENVENU SUR LA RECHERCHE AVANCEE DE</div>
                        <h1><small>CAMTELPLAN<span> Planification des permanences et des astreintes</small> </span></h1>
                        <?php if($error!=null) echo'<div class="alert alert-dismissable alert-danger">Pour une bonne recherche, nous vous prions de renseigner les 4 champs ci-dessous. Merci</div>'; ?>
                        <form class="form-horizontal form-label-left input_mask" method="POST" action="<?php echo base_url(); ?>utilisateur/filtre2">

                            <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                <select class="select2_single form-control" name = "direction" tabindex="-1" id="select1">
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

                            <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                                <select class="select2_single form-control" name = "departement" tabindex="-1" id="select2">
                                    <option value="0">Departement</option>
                                    <?php
                                        foreach ($departements as $v1){
                                            if($v1!==array()){
                                                //echo '<option>'.$v1['Directions'].'</option>';
                                                echo '<option label= "'.$v1['Directions'].'" value="'.$v1['id'].'">'.$v1['libelle'].'</option>';
                                            }
                                        }
                                    ?> 
                                </select>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 form-group has-feedback" >
                                <select class="select2_single form-control" name = "service" tabindex="-1" id="select3">
                                   <option value="0">Service</option>
                                   <?php
                                        foreach ($services as $v1){
                                            if($v1!==array()){
                                                //echo '<option>'.$v1['Directions'].'</option>';
                                                echo '<option title ="'.$v1['Directions'].'" label = "'.$v1['Departements'].'" value="'.$v1['id'].'">'.$v1['nom_service'].'</option>';
                                            }
                                        }
                                    ?> 
                                </select>

                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 form-group has-feedback" >
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
                             
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
                                    <button type="submit" class="btn btn-success fa fa-search-plus fa-2x">Rechercher</button>
                                </div>
                            </div>
                         </form>

                        </div>
                 </section><!-- End Home Section -->
                </div>
                
                <!--row-->
                <div class="row">
                    <div class="clo-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-2">
                                    <img src="<?php echo base_url(); ?>asset/images/calendrier.jpg" class="img-circle img-responsive" alt="" /></div>
                                <div class="col-xs-10 col-md-10">
                                    <div>
                                        <a >
                                            Consultez le planning de permanence du personnel de CAMTEL</a>
                                        <div class="mic-info">
                                            Où que vous soyez, qui que vous soyez, consultez les calendriers de permanence
                                        </div>
                                    </div>
                                    
                                    <div class="action">
                                        <button type="button" class="btn btn-primary " title="en savoir plus">
                                            <span class="fa fa-eye"></span> En savoir plus
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-2">
                                    <img src="<?php echo base_url(); ?>asset/images/calendrier.jpg" class="img-circle img-responsive" alt="" /></div>
                                <div class="col-xs-10 col-md-10">
                                    <div>
                                        <a >
                                            Consulter le planning de permanence du personnel de CAMTEL</a>
                                        <div class="mic-info">
                                            Où que vous soyez, qui que vous soyez, consulter les calendriers de permanence
                                        </div>
                                    </div>
                                    
                                    <div class="action">
                                        <button type="button" class="btn btn-primary " title="en savoir plus">
                                            <span class="fa fa-eye"></span> En savoir plus
                                        </button>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>
                    
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-phone-alt"></span> Numéros urgents</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                        <div class="col-xs-12 col-md-6">
                                          <a href="#" class="btn btn-success btn-lg" role="button"><span class="fa fa-phone"></span> <br/>+237243568958</a>
                                          <a href="#" class="btn btn-info btn-lg" role="button"><span class="fa fa-phone"></span> <br/>+237222254589</a>
                                          <a href="#" class="btn btn-primary btn-lg" role="button"><span class="fa fa-phone"></span> <br/>+237243568596</a>
                                          
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <img src="<?php echo base_url(); ?>asset/images/urgence.jpg"/>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                <!--end row-->
                <!-- footer content -->
                <div class="row">
                    <footer>
                        <div class="">
                            <p class="pull-right">Gestion des planning et des astreintes. By <a>Cameroon telecommunications Sept 2016</a>. |
                                <span class="lead"> <i class="fa fa-phone"></i> CAMTEL</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->
                </div>
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
    
    <!--script ajax de changement des valeurs dans un formulaire en fonction du choix des autres select-->
    <script>
        
       //changement des directions-------------------------------------------------
        var $select2 = $('#select2'), $select3 = $('#select3');
        $("#select1").change(function () {
            var id = $(this).val();

            if ($select2.data('options') == undefined) {
                $select2.data('options', $select2.find('option').clone());
            }
            var options = $select2.data('options').filter('[label=' + id + ']');
            $select2.html(options);

            if ($select3.data('options') == undefined) {
                $select3.data('options', $select3.find('option').clone());
            }
            var options = $select3.data('options').filter('[title=' + id + ']');
            $select3.html(options);
        });
        
        //changement des departements-------------------------------------------------
        $("#select2").change(function () {
            var id = $(this).val();

            if ($select3.data('options') == undefined) {
                $select3.data('options', $select3.find('option').clone());
            }
            var options = $select3.data('options').filter('[label=' + id + ']');
            $select3.html(options);

        });
    </script>

</body>

</html>