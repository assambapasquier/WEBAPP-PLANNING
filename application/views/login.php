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
                    
                    <?php 
                        if($resp=='responsable'){
                            echo '<form method="POST" action="'; echo base_url(); echo 'responsable/connexion">';
                        }
                        else{
                           echo '<form method="POST" action="<?php echo base_url(); ?>admin/connexion">'; 
                        }
                    ?>
                    
                        <i class="fa fa-key fa-5x"></i><h1 style="color:rgb(0,132,232);">VEUILLEZ VOUS AUTHENTIFIER</h1>
                        <?php 
                            
                            if($error==1){
                              echo '<p style="color:red;"><strong>Verifiez votre login et/ou votre mot de passe!</strong></p>';  
                            }
                            else{
                                if($error==2){
                                    echo '<p style="color:red;"><strong>Vous n\'êtes pas responsable d\'un service!</strong></p>';  
                                }
                            }
                        ?>
                        
                        <div>
                            <input type="text" class="form-control" name="matricule" placeholder="votre matricule"/>
                        </div>
                        <?php echo form_error('login'); ?>
                        
                        <div>
                            <input type="password" class="form-control" name="mdp" placeholder="votre mot de passe"/>
                        </div>
                        <?php echo form_error('mdp'); ?>

			
                        <div class="separator">
                        
                        <div>
                            <button class="btn btn-primary" type="submit">S'authentifier</button>
                            <a class="reset_pass" href="#">Mot de passe oublié?</a>
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

</body>

</html>