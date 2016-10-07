<table id="example" class="table table-striped responsive-utilities jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" class="tableflat">
            </th>
            <th style="display:none;">id </th>
            <th>Date</th>
            <th> Noms & Prenoms </th>
            <th> tel </th>
            <th>Heure Debut</th>
            <th>Heure Fin</th>
           
            <th class="no-link last"><span class="nobr">Action</span>
            </th>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach ($ligne_perm as $v1){
                if($v1!==array()){
                    echo '<tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="tableflat">
                            </td>
                            <td style="display:none; class=" ">'.$v1['idlp'].'</td>'
                            . '<td class=" ">'.$v1['date_perm'].'</td>'
                           . '<td class=" ">'.$v1['nom'].' '.$v1['prenom'].'</td>'
                            . '<td class=" ">'.$v1['tel1'].'</td>'
                            . '<td class=" ">'.$v1['heure_deb'].'</td>'
                            . '<td class=" ">'.$v1['heure_fin'].'</td>'
                            . '<td class="last">
                        <a class="btn btn-link" title="ajouter un personnel"><i class="fa fa-plus"></i></a>
                        <a class="btn btn-link" title="modifier"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-link" title="supprimer"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>';
                }
            }
        ?>

    </tbody>

</table>