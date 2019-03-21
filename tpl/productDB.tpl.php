  
<div class="row">
    
    <h5>Bereits erstellte Marken</h5>
    <table class="table table-hover" border="1">
        <thead style="background-color: gray">
            <tr>
                <th>#</th>
                <th>Id</th>
                <th>Material</th>
                <th>Form</th>
                <th>Farbe</th>
                <th>Text</th>
                <th>Icon</th>
                <th>Schriftart</th>
                <th>Schriftgröße</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($results as $result) { ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $result->getId()?></td>
                <td><?= $result->getMaterial()?></td>
                <td><?= $result->getShape() ?></td>
                <td><?= $result->getColor() ?></td>
                <td><?= $result->getText() ?></td>
                <td><?= $result->getIcon() ?></td>
                <td><?= $result->getfFamily() ?></td>
                <td><?= $result->getfSize() ?></td>
                
</td>

            </tr>

            <?php $i++; } ?>
            
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
