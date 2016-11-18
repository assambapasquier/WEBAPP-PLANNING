<div id="testmodal2" style="padding: 5px 20px;">
    <form id="antoform2" class="form-horizontal calender" role="form" method="POST" action="<?php echo base_url(); ?>responsable/creer_ligne_perm">
        <div class="form-group">
            <label class="col-sm-3 control-label"><span style="color:rgb(255,0,0);">Debut: </span></label>
            <div class="col-sm-9">
                <input type="date" class="form-control" id="date" name="date">
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
            <label class="col-sm-3 control-label"><span style="color:rgb(255,0,0);">Heure de fin: </span></label>
            <div class="col-sm-9">
                <input type="time" class="form-control" id="h_deb" name="h_deb">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label"><span style="color:rgb(255,0,0);">Heure debut: </span></label>
            <div class="col-sm-9">
                <input type="time" class="form-control" id="h_fin" name="h_fin">
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" >Ajouter</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        </div>

    </form>
</div>