<table id="example" class="table table-striped responsive-utilities jambo_table">
    <thead>
        <tr class="headings">
            <!--<th>
                <input type="checkbox" class="tableflat">
            </th>-->
            <th>Dates </th>
            <th>Noms et Prenoms</th>
            <th>Heure de debut</th>
            <th>Heure de fin</th>
            <th style="display:none;">Numero</th>
            <th style="display:none;">Email</th>
            
            <th class="no-link last"><span class="nobr">Action</span>
            </th>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach ($permChoisies as $v1){
                if($v1!==array()){
                    echo '<tr class="even pointer">
                            
                            <td class=" ">'.$v1['date_perm'].'</td>'
                            . '<td class=" ">'.$v1['nom'].' '.$v1['prenom'].'</td>'
                            . '<td class=" ">'.$v1['heure_deb'].'</td>'
                            . '<td class=" ">'.$v1['heure_fin'].'</td>'
                            . '<td style="display:none;">'.$v1['tel1'].'</td>'
                            . '<td style="display:none;">'.$v1['email'].'</td>'
                            
                            . '<td class="last">
                        <a class="btn btn-link viewbtn" title="consulter"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-link" title="appeler"><i class="fa fa-phone"></i></a>
                        <!--<a class="btn btn-link" title="supprimer"><i class="fa fa-times"></i></a>-->
                        </td>
                    </tr>';
                }
            }
        ?>

    </tbody>

</table>