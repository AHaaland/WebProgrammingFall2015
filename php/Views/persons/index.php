<?php
    
?>
<table class = "table table-striped">
    <thead>
        <tr>
            <th>Actions</th>
            <th>Name</th>
        </tr>
    </thead>
        <tbody>
            <?php foreach($model as $row): ?>
                <tr>
                    <td>
                    </td>
                    <td><?=$row['name']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>