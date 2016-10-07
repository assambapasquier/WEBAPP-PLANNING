<table id="example" class="table table-striped responsive-utilities jambo_table">
    <thead>
        <tr class="headings">
            <th>
                <input type="checkbox" class="tableflat">
            </th>
            <th>Id </th>
            <th>Libelles </th>
            
            <th class="no-link last"><span class="nobr">Action</span>
            </th>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach ($perm as $v1){
                if($v1!==array()){
                    echo '<tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="tableflat">
                            </td>
                            <td class=" ">'.$v1['id'].'</td>'
                            . '<td class=" ">'.$v1['libelle'].'</td>'

                            . '<td class="last">
                        <a href="'.base_url().'responsable/permanences/1" class="btn btn-link voir" title="consulter"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-link edition" title="modifier"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-link suppr" title="supprimer"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>';
                }
            }
        ?>

    </tbody>

</table>