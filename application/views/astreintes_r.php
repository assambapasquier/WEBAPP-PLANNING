<html lang="en" class=" "><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CAMPLAN | Astreinte_r </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>asset/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url(); ?>asset/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/icheck/flat/green.css" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="<?php echo base_url(); ?>asset/css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/switchery/switchery.min.css" />
    <link href="<?php echo base_url(); ?>asset/css/calendar/fullcalendar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/calendar/fullcalendar.print.css" rel="stylesheet" media="print">

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


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            
		
		<div class="row">
                
                <div id="my_carousel" class="carousel slide" data-ride="carousel">
                <!-- Bulles -->
                <ol class="carousel-indicators">
                <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#my_carousel" data-slide-to="1"></li>
                <li data-target="#my_carousel" data-slide-to="2"></li>
                </ol>
                <!-- Slides -->
                <div class="carousel-inner">
                <?php include('carousel.php'); ?> 
                <!-- Contr�les -->
                <a class="left carousel-control" href="#my_carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#my_carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                </div>
            </div>
			
    <nav class="navbar navbar-findcond navbar-fixed-top">
        
    <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <h4>GESTION DES PLANNINGS</h4>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                            <li>
                                    <a href="<?php echo base_url(); ?>responsable/accueil_r" aria-expanded="false"><i class="fa fa-fw fa-home"></i> Accueil <span class="badge"><?php //echo $size_perso; ?></span></a>
                                    <!--<ul class="dropdown-menu" role="menu">
                                            <li><a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Music</span> sayfasi <span class="badge">Video</span> sayfasinda etiketlendi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Music</span> sayfasinda iletiniz begenildi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Video</span> sayfasinda iletiniz begenildi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Game</span> sayfasinda iletiniz begenildi</a></li>
                                    </ul>-->
                            </li>
                            <li>
                                    <a href="<?php echo base_url(); ?>responsable/accueil_r" aria-expanded="false"><i class="fa fa-fw fa-users"></i> Personnel <span class="badge"></span></a>
                                    <!--<ul class="dropdown-menu" role="menu">
                                            <li><a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Music</span> sayfasi <span class="badge">Video</span> sayfasinda etiketlendi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Music</span> sayfasinda iletiniz begenildi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Video</span> sayfasinda iletiniz begenildi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Game</span> sayfasinda iletiniz begenildi</a></li>
                                    </ul>-->
                            </li>
                            <li class="active">
                                    <a href="<?php echo base_url(); ?>responsable/permanences" aria-expanded="false"><i class="fa fa-fw fa-calendar-o"></i> Permanences <span class="badge"><?php //echo $size_perm; ?></span></a>
                                    <!--<ul class="dropdown-menu" role="menu">
                                            <li><a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Music</span> sayfasi <span class="badge">Video</span> sayfasinda etiketlendi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Music</span> sayfasinda iletiniz begenildi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Video</span> sayfasinda iletiniz begenildi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Game</span> sayfasinda iletiniz begenildi</a></li>
                                    </ul>-->
                            </li>
                            <li>
                                    <a href="<?php echo base_url(); ?>responsable/astreintes" aria-expanded="false"><i class="fa fa-fw fa-calendar"></i> Astreintes <span class="badge">0</span></a>
                                    <!--<ul class="dropdown-menu" role="menu">
                                            <li><a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Music</span> sayfasi <span class="badge">Video</span> sayfasinda etiketlendi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Music</span> sayfasinda iletiniz begenildi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Video</span> sayfasinda iletiniz begenildi</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Game</span> sayfasinda iletiniz begenildi</a></li>
                                    </ul>-->
                            </li>
                            <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-users"></i> Bienvenu <?php echo 'M. '.$context['nom']; ?>! <span class="badge"><?php $context['role'].' '.$context['structure'];  ?> </span></a>
                                    <ul class="dropdown-menu" role="menu">
                                            <li><a href="<?php echo base_url(); ?>responsable/deconnexion"><i class="fa fa-fw fa-sign-out"></i> Deconnexion </a></li>
                                    </ul>
                            </li>
                            <!--<li class="active"><a href="#">Ana Sayfa <span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Geri bildirim</a></li>
                                            <li><a href="#">Yardim</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Ayarlar</a></li>
                                            <li><a href="#exit">�ikis yap</a></li>
                                    </ul>
                            </li>-->
                    </ul>

            </div>
                    </div>
            </div>
    </div>

</nav>

           
		
            <!-- page content -->
            <div class="right_col" role="main">
			<div class="">
                    
                    <div class="clearfix"></div>

                    <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Calendrier des Astreintes <small>Cliquer pour ajouter</small></h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#"><button data-toggle="modal" data-target="#CalenderModalEdit" type="button" class="fa fa-plus fa-1x btn btn-warning">&nbsp;Nouvelle Astreinte</button></a>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div id='calendar'></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    
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
			
             <!-- Start Calender modal -->
                <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="myModalLabel"><span style="color:rgb(0,132,232);"> Informations</span></h4>
                                </div>
                            
                                <div class="modal-body">
                                    <?php include('form/form_infos_contact.php'); ?>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>
                                       
                                   </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"><span style="color:rgb(0,132,232);"> Ajout d'une astreinte</span></h4>
                            </div>
                            
                            <div class="modal-body">
                                    <?php include('form/form_ajout_astreinte.php'); ?>

                                <!----end modal body-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Fermer</button>
                                <button type="button" class="btn btn-primary antosubmit2">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalNew"></div>
                <div id="fc_create" data-toggle="modal" data-target="#CalenderModalEdit"></div>
                

                <!-- End Calender modal -->
            <!-- /page content -->
                        </div>
            </div>

    <!--<div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>-->

    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="<?php echo base_url(); ?>asset/js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="<?php echo base_url(); ?>asset/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo base_url(); ?>asset/js/icheck/icheck.min.js"></script>
        <!-- tags -->
        <script src="<?php echo base_url(); ?>asset/js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="<?php echo base_url(); ?>asset/js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/moment.min2.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="<?php echo base_url(); ?>asset/js/editor/bootstrap-wysiwyg.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/editor/external/jquery.hotkeys.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="<?php echo base_url(); ?>asset/js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="<?php echo base_url(); ?>asset/js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/autocomplete/countries.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/autocomplete/jquery.autocomplete.js"></script>
        <script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>asset/js/custom.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/calendar/fullcalendar.min.js"></script>


        <script>
            $(window).load(function () {

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var started;
                var categoryClass;

                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        $('#fc_create').click();

                        started = start;
                        ended = end

                        $(".antosubmit").on("click", function () {
                            var title = $("#title").val();
                            if (end) {
                                ended = end
                            }
                            categoryClass = $("#event_type").val();

                            if (title) {
                                calendar.fullCalendar('renderEvent', {
                                        title: title,
                                        start: started,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true // make the event "stick"
                                );
                            }
                            $('#title').val('');
                            calendar.fullCalendar('unselect');

                            $('.antoclose').click();

                            return false;
                        });
                    },
                    eventClick: function (calEvent, jsEvent, view) {
                        //alert(calEvent.title, jsEvent, view);

                        $('#fc_edit').click();
                        //$('#title2').val(calEvent.title);
                        //$('#matricule').val(calEvent.matricule);
                        document.getElementById("matricule").defaultValue = calEvent.matricule;
                        $('#nom').val(calEvent.nom);
                        $('#prenom').val(calEvent.prenom);
                        $('#email').val(calEvent.email);
                        $('#tel').val(calEvent.tel1);
                        $('#debut').val(calEvent.start);
                        $('#fin').val(calEvent.end);
                        categoryClass = $("#event_type").val();

                        $(".antosubmit2").on("click", function () {
                            calEvent.title = $("#title2").val();

                            calendar.fullCalendar('updateEvent', calEvent);
                            $('.antoclose2').click();
                        });
                        calendar.fullCalendar('unselect');
                    },
                    editable: true,
                    events: [
                        <?php
                                $taille = 0;
                                foreach($astr as $a){
                                    list($y,$m,$d) = explode('-', $a['date_deb']);
                                    list($y2,$m2,$d2) = explode('-', $a['date_fin']);
                                    echo '{title:"'.$a['nom'].' '.$a['prenom'].'", start: new Date('.$y.','.((int)$m-1).','.$d.'), end: new Date('.$y2.','.((int)$m2-1).','.($d2+1).'), matricule: "'.$a['Utilisateurs'].'", nom:"'.$a['nom'].
                                            '", prenom:"'.$a['prenom'].'", tel1:"'.$a['tel1'].'", email:"'.$a['email'].'"}';

                                    $taille = $taille+1;
                                    if($taille < sizeof($astr)){
                                        echo ',';
                                    }
                                }
                            ?>
                ]
                });
            });
        </script>
        
        <!--script ajax de changement des valeurs dans un formulaire en fonction du choix des autres select-->
        <script>
            $("#select1").change(function() {
                if ($(this).data('options') == undefined) {
                  /*Taking an array of all options-2 and kind of embedding it on the select1*/
                  $(this).data('options', $('#select2 option').clone());
                }
                var id = $(this).val();
                var options = $(this).data('options').filter('[value=' + id + ']');
                $('#select2').html(options);
              });
        </script>
    </body>
</html>