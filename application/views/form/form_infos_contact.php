<div id="testmodal2" style="padding: 5px 20px;">
    <form id="antoform2" class="form-horizontal calender" role="form" method="POST" action="<?php echo base_url(); ?>responsable/modif_astr">
          <div class="form-group">
            <label class="col-sm-3 control-label">Matricule: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="matricule" name="matricule" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nom: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="nom" name="nom" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Prenom: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="prenom" name="prenom" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Telephone: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="tel" name="tel" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="email" name="email" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Debut astreinte: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="debut" name="debut" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Fin Astreinte: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="fin" name="fin" readonly="readonly" v>
            </div>
        </div>
        
        <div class="form-group">
            <input type="checkbox" id="changeAstr" onclick="document.getElementById('changeAstr').onchange = function() {
                document.getElementById('debutC').disabled = !this.checked; document.getElementById('finC').disabled = !this.checked;
                document.getElementById('update').disabled = !this.checked; 
            };"/> Changer l'astreinte? (cocher)
            
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><span style="color:rgb(255,0,0);">Debut: </span></label>
            <div class="col-sm-9">
                <input type="date" class="form-control" id="debutC" name="debutC" required disabled="">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label"><span style="color:rgb(255,0,0);">Fin:</span> </label>
            <div class="col-sm-9">
                <input type="date" class="form-control" id="finC" name="finC" required disabled="">
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="action"  value="upd" id="update" disabled>Mettre a jour</button>
            <button type="submit" class="btn btn-danger" name="action" value="supprimer">Supprimer l'astreinte</button>
        </div>

    </form>
</div>