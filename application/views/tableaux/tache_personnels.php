<table id="example" class="table table-striped responsive-utilities jambo_table">
    <thead>
        <tr class="headings">
            <!--<th>
                <input type="checkbox" class="tableflat">
            </th>-->
            <th style="display:none">
                ID
            </th>
            <th>
                Libellés
            </th>
            <th>Statuts </th>
            <th class="no-link last"><span class="nobr">Actions</span>
            </th>
        </tr>
    </thead>

    <tbody>
        
        <?php
            foreach ($taches as $v1){
                
                if($v1!==array()){
                    
                    echo '<tr class="even pointer">
                           <td class="a-center" style="display:none">
                                '.$v1['id'].'
                            </td>
                        
                            <td class="a-center ">
                                '.$v1['libelle'].'
                            </td>
                            <td class=" ">';
                            if($v1['statut']==0){
                              echo '<span style="color:red;">Inachevée</span>';  
                            }
                            else{
                                echo '<span style="color:rgb(0,255,0);">Tâche achevée</span>';
                            }
                            echo '</td>'
                            . '<td class="last">';
                            if($v1['statut']==0){
                                
                              echo '<a href="'.base_url().'personnel/achever_tache/'.$v1['id'].'" class="fa fa-check btn btn-primary"><small>Achever la tâche</small></a>';
                              //echo '<a class="btn btn-link edition" title="achever la tâche"><i class="fa fa-edit"></i></a>';
                            }
                            else{
                                echo 'Tâche achevée';
                            }
                        //echo '<a class="btn btn-link" title="achever la tâche"><i class="fa fa-check"></i></a>';
                        echo '</td>
                    </tr>'; 
                }
            }
        ?>

    </tbody>

</table>