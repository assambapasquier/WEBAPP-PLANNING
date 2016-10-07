<table id="example" class="table table-striped responsive-utilities jambo_table">
    <thead>
        <tr class="headings">
            <!--<th>
                <input type="checkbox" class="tableflat">
            </th>-->
            <th>
                Matricules
            </th>
            <th>Noms </th>
            <th>Prenoms </th>
            <th>tel1 </th>
            <th>Email</th>
            <!--<th class="no-link last"><span class="nobr">Action</span>
            </th>-->
        </tr>
    </thead>

    <tbody>
        <?php
            foreach ($perso as $v1){
                if($v1!==array()){
                    echo '<tr class="even pointer">
                            <td class="a-center ">
                                '.$v1['matricule'].'
                            </td>
                            <td class=" ">'.$v1['nom'].'</td>'
                            . '<td class=" ">'.$v1['prenom'].'</td>'
                            . '<td class=" ">'.$v1['tel1'].'</td>'
                            . '<td class="last">'.$v1['email'].'
                        <!--<a class="btn btn-link" title="consulter" data-toggle="modal" data-target=".info_perso"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-link" title="modifier"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-link" title="supprimer"><i class="fa fa-times"></i></a>-->
                        </td>
                    </tr>'; 
                }
            }
        ?>

    </tbody>

</table>