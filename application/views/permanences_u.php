<html lang="en" class=" "><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CAMPLAN | Accueil_r </title>

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
                <?php //include('utils/carousel.php'); ?> 
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
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <h4>GESTION DES PLANNINGS</h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <form class="form-horizontal form-label-left input_mask" method="POST" action="<?php echo base_url(); ?>utilisateur/filtre1">

                                <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control" name="mc" id="autocomplete-custom-append" placeholder="Mot clé (Ex: Fibre Optique, réseau, internet)" style="float: left; height:60px;" required=""/>
                                    <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                                </div>

                                <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                                    <input type="text" class="form-control" name="ville" id="autocomplete-custom-append2" placeholder="Où? (Ex: Yaoundé)" style="height:60px;" required>
                                    <!--<span class="fa fa-user fa-5x form-control-feedback right" aria-hidden="true"></span>-->
                                    <div id="autocomplete-container2" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                                </div>

                                <div class="col-md-1 col-sm-6 col-xs-6 form-group has-feedback" >
                                <button type="submit" class="btn btn-warning fa fa-search fa-2x" style="height:60px; width:80px"></button>

                                </div>


                             </form>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="collapse navbar-collapse" id="navbar">

                        <ul class="nav navbar-nav navbar-right">

                                <li class="active">
                                        <a href="<?php echo base_url(); ?>utilisateur/resultat_recherche" aria-expanded="false"><i class="fa fa-fw fa-home fa-2x"></i> Accueil <span class="badge"><?php //echo $size_perm; ?></span></a> 
                                </li>

                        </ul>

                </div>
                        </div>
                </div>
        </div>
    </div>

</nav>

           
		
            <!-- page content -->
            <div class="right_col" role="main">
			<div class="">
                    
                    <div class="clearfix"></div>

                    <div class="row" style="margin-top: 125px;">

                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <h2>Liste du personnel de "<?php //echo $context['structure']; ?>"</h2> 
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <form class="form-horizontal" method="POST" action="<?php echo base_url()?>utilisateur/traitement_filtre<?php echo '/'.$this->input->get('id');?>">
                                            <label style="color:rgb(0,132,232);">Intervalle</label>
                                            <fieldset>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="input-prepend input-group">
                                                            <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                            <input type="text" style="width: 200px; background:rgb(0,132,200); color:white" name="intervalle" id="intervalle" class="form-control" value="<?php echo $startdate; ?> => <?php echo $enddate; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-warning">GO</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                                
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <?php include('tableaux/tableau_perm_choisies.php'); ?>
                                </div>
                              </div>
                            </div>
                       
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="x_panel">
                               
                                    <div class="x_title">

                                        <h2>Numeros Utiles "<?php //echo $context['structure']; ?>"</h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                    <?php 
                                        //include('tableaux/tableau_permanences.php'); 
                                    ?>
                                    </div>
                                
                            </div>
                        </div>
                        
                        <br />
                        <br />

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
			
                <div class="modal fade info_perso" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">

                                <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                    <h4 class="modal-title" id="myModalLabel2"><span style="color:rgb(0,132,232);">Informations du personnel</span></h4>
                                </div>
                                <div class="modal-body">
                                        <?php include('utils/form_infos_contact_u.php'); ?>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                </div>

                        </div>
                    </div>
                </div>
                
                <div id="NewPerm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"><span style="color:rgb(0,132,232);"> Ajout d'une permanence</span></h4>
                            </div>

                            <div class="modal-body">
                                <?php 
                                    include('form/ajout_perm.php'); 
                                    /*switch($context['indicatif']){
                                        case "departement": include('form/ajout_perm_cd.php'); 
                                            break; 
                                        case "service": include('form/ajout_perm_cs.php'); 
                                            break; 
                                        case "direction": include('form/ajout_perm_dir.php'); 
                                            break; 
                                        default:echo 'error';
                                    }*/
                                ?>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>

                               </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div id="UpdatePerm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"><span style="color:rgb(0,132,232);"> Modification d'une permanence</span></h4>
                            </div>

                            <div class="modal-body">
                                <?php 
                                    include('form/update_perm.php');   
                                ?>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>

                               </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div id="SupprPerm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"><span style="color:rgb(0,132,232);"> Voulez-vous vraiment supprimer?</span></h4>
                            </div>

                            <div class="modal-body">
                                <?php 
                                    include('form/suppr_perm.php');   
                                ?>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fermer</button>

                               </div>
                            </div>

                        </div>
                    </div>
                </div>
            <!-- /page content -->

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
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/autocomplete/villes.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/autocomplete/keyword.js"></script>
        <!--<script type="text/javascript" src="<?php //echo base_url(); ?>asset/js/autocomplete/countries.js"></script>-->
        <script src="<?php echo base_url(); ?>asset/js/autocomplete/jquery.autocomplete.js"></script>
        <script type="text/javascript">
            $(function () {
                'use strict';
                var keywordArray = $.map(keywords, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: keywordArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        
        <script type="text/javascript">
            $(function () {
                'use strict';
                var villesArray = $.map(villes, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append2').autocomplete({
                    lookup: villesArray,
                    appendTo: '#autocomplete-container2'
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>asset/js/custom.js"></script>


        <!-- select2 -->
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
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
		
		<!-- Datatables -->
        <script src="<?php echo base_url(); ?>asset/js/datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Rechercher un nom:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip'
                    
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
        
        <!--script ajax de changement des valeurs dans un formulaire en fonction du choix des autres select-->
        <script>
            /*$("#select1").change(function() {
                if ($(this).data('options') == undefined) {
                  //Taking an array of all options-2 and kind of embedding it on the select1
                  $(this).data('options', $('#select2 option').clone());
                }
                var id = $(this).val();
                var options = $(this).data('options').filter('[value=' + id + ']');
                $('#select2').html(options);
              });*/
        </script>
        
        <!--------------------------------------COMMENT AVOIR LA VALEUR D'UNE LIGNE DE TABLE SELECTIONNEE---------------------->
        <script>
            $('.voir').click(function(){
            var row = $(this).closest('tr');
                cells = row.find('td');
                id = cells.eq(1).html();
                
                //j'appel la page en lui passant en parametre l'id de la permanence------------------------
                window.location = <?php echo base_url(); ?>'responsable/permanences/' + id;
            });
        </script>
        
        <script>
            $('.edition').click(function(){
            var row = $(this).closest('tr');
                cells = row.find('td');
                id = cells.eq(1).html();
                libelle = cells.eq(2).html();
                
                //$(e.currentTarget).find('input[name="bookId"]').val(bookId);
                $(".identifiant").val(id);
                $(".lib").val(libelle);
                
                $('#UpdatePerm').modal('show'); 
            });
        </script>
        
        <script>
            $('.suppr').click(function(){
            var row = $(this).closest('tr');
                cells = row.find('td');
                id = cells.eq(1).html();
                libelle = cells.eq(2).html();
                
                //$(e.currentTarget).find('input[name="bookId"]').val(bookId);
                $(".identifiant").val(id);
                $(".lib").val(libelle);
                
                $('#SupprPerm').modal('show'); 
            });
        </script>
        
        <!--------------------------------------COMMENT AVOIR LA VALEUR D'UNE LIGNE DE TABLE SELECTIONNEE---------------------->
        <script>
            $('.viewbtn').click(function(){
                var row = $(this).closest('tr');
                    cells = row.find('td');
                    nom = cells.eq(1).html();
                    tel = cells.eq(4).html();
                    email = cells.eq(5).html();
                    //$(e.currentTarget).find('input[name="bookId"]').val(bookId);
                    $("#nom").val(nom);
                    $("#tel").val(tel);
                    $("#email").val(email);
                    $('.info_perso').modal('show'); 
            });
        </script>
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#intervalle').daterangepicker(null, function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });
        </script>
        
    </body>
</html>