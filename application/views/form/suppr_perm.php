<div id="testmodal2" style="padding: 5px 20px;">
    <form id="antoform2" class="form-horizontal calender" role="form" method="POST" action="<?php echo base_url(); ?>responsable/del_perm">
        
        <div class="form-group">
            <label class="col-sm-3 control-label">ID: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control identifiant" name="identifiant" readonly="readonly">
                
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Libelle: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control lib" name="libelle">
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-danger" >Supprimer</button>
            <button type="submit" class="btn btn-warning" data-dismiss="modal">Annuler</button>
        </div>
        
    </form>
</div>