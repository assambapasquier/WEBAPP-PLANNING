<div id="testmodal2" style="padding: 5px 20px;">
    <form id="antoform2" class="form-horizontal calender" role="form" method="POST" action="<?php echo base_url(); ?>responsable/creer_astr">
        <div class="form-group">
            <label class="col-sm-3 control-label">Service: </label>
            <div class="col-sm-9">
                <!--<input type="text" class="form-control" id="nom" name="nom">-->
                <select id="service" name="service" class="form-control">
                    <?php
                        if(isset($services)){
                            foreach($services as $v){
                                echo '<option value="'.$v['id'].'">'; echo $v['nom_service'].'</option>';
                            }
                        }
                        else{
                            redirect('responsable/accueil_r', 'refresh');
                        } 
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Utilisateur: </label>
            <div class="col-sm-9">
                <!--<input type="text" class="form-control" id="nom" name="nom">-->
                <select id="personnel" name="personnel" class="form-control">
                    <?php
                        foreach($perso as $p){
                            echo '<option value="'.$p['matricule'].'">'; echo $p['nom'].' '.$p['prenom'].'  (Matr: '.$p['matricule'].' )'; echo '</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><span style="color:rgb(255,0,0);">Debut: </span></label>
            <div class="col-sm-9">
                <input type="date" class="form-control" id="debut" name="debut" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label"><span style="color:rgb(255,0,0);">Fin:</span> </label>
            <div class="col-sm-9">
                <input type="date" class="form-control" id="fin" name="fin" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">Lieu d'astreinte: </label>
            <div class="col-sm-9">
                <!--<input type="text" class="form-control" id="nom" name="nom">-->
                <select id="lieu" name="lieu" class="form-control">
                    <?php
                        foreach($lieu as $l){
                            echo '<option value="'.$l['id'].'">'; echo $l['libelle']; echo '</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" >Ajouter</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        </div>

    </form>
</div>