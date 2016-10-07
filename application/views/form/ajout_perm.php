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
        
        <!--<select name="select1" id="select1">
            <option value="1">Fruit</option>
            <option value="2">Animal</option>
            <option value="3">Bird</option>
            <option value="4">Car</option>
          </select>


          <select name="select2" id="select2">
            <option value="1">Banana</option>
            <option value="1">Apple</option>
            <option value="1">Orange</option>
            <option value="2">Wolf</option>
            <option value="2">Fox</option>
            <option value="2">Bear</option>
            <option value="3">Eagle</option>
            <option value="3">Hawk</option>
            <option value="4">BWM<option>
        </select>-->
        
    </form>
</div>