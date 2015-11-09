<?php
    session_start();
  $food = $_SESSION['food'];
  if($_POST){
    if(isset($_GET['id'])){
      $food[$_GET['id']] = $_POST;
    }else{
      $food[] = $_POST;
    }
    
    $_SESSION['food'] = $food;
    header('Location: track.php');
  }
    
  if(isset($_GET['id'])){
    $meal = $food[$_GET['id']];
  }else{
    $meal = array();
  }
?>
            <a href="?action=create" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                Add Food
            </a>
            <a href="" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge"><?=count($model)?></span>
            </a>
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
                     <th scope="row">
                  <div class="btn-group" role="group" aria-label="...">
                    <a href="?action=view&id=<?=$row['id']?>" titile="View" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="?action=edit&id=<?=$row['id']?>" titile="Edit" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="?action=delete&id=<?=$row['id']?>" titile="Delete" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                  </div>
                  </th>
                    <td><?=$row['name']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>