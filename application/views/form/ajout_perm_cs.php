<div id="testmodal2" style="padding: 5px 20px;">
    <form id="antoform2" class="form-horizontal calender" role="form" method="POST" action="<?php echo base_url(); ?>responsable/creer_perm">
        <div class="form-group">
            <label class="col-sm-3 control-label">Libelle: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="libelle" name="libelle">
                
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" >Ajouter</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        </div>
        
    </form>
</div>