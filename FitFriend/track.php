<?php
session_start();
    $name = 'Andrew Haaland';
    $message = "Welcome $name";
    
    $person = array( 'Name' => $name, 'Age' => 20, CallorieGoal => 2000 );
    
    $food = $_SESSION['food'];
    if(!$food){
      $_SESSION['food']=$food = array(
        array( 'Name' => 'Breakfast', 'Time' => '10/11/15', 'Callories' => 400 ),
        array( 'Name' => 'Lunch', 'Time' => '10/11/15', 'Callories' => 800 ),
        array( 'Name' => 'Snack', 'Time' => '10/11/15', 'Callories' => 400 ),
        array( 'Name' => 'Dinner', 'Time' =>'10/11/15', 'Callories' => 400 ),
        );
    }

    $total = 0;
    foreach ($food as $meal) {
        $total += $meal['Callories'];
    }
    
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>FitFriend</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top nav-no-space">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">FitFriend <span class="glyphicon glyphicon-cutlery"></span> </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="track.php">Track Food</a></li>
             <li><a href="trackEx.php">Track Exercise</a></li>
          </ul>
          <div class="navbar-right">
              <p class="navbar-text ">Hello, Guest!</p>
               <Button type="button" class="btn btn-primary navbar-btn pull-left" data-toggle="modal" data-target="#loginModal" role="login">Sign In</Button> 
              <p class="navbar-text">or <a href="signup.php">Sign up today!</a></p>
          </div>
          </div>
        </div>
        </nav>
        <div class="container">
            <h1>Your Food!</h1>
            <div class="col-xs-12">
              <div>
            <a href="edit.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                Add Food
            </a>
           <!-- DEL ALL <a href="delete.php?id=<?=count($food)+1?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge"><?=count($food)?></span>
            </a>-->
            </div>
            <br>
      <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th>Name</th>
                  <th>Time</th>
                  <th>Calories</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($food as $i => $meal): ?>
                <tr>
                  <th scope="row">
                  <div class="btn-group" role="group" aria-label="...">
                    <a href="view.php?id=<?=$i?>" titile="View" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="edit.php?id=<?=$i?>" titile="Edit" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="delete.php?id=<?=$i?>" titile="Delete" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                  </div>
                  </th>
                  <td><?=$meal['Name']?></td>
                  <td><?=$meal['Time']?></td>
                  <td><?=$meal['Callories']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table> 
        </div>
        <!--MODAL LOGIN-->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
            <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="txtEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="txtPassword" placeholder="Password">
            </div>
          </div>
        </form>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Login</button>
              </div>
        </div>
      </div>
    </div>
    <!--MODAL LOGIN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <footer>
            <div class="text-center containter">
                <h5>©2015 Andrew Haaland All rights reserved.</h5>
            </div>
        </footer>
    </body>
</html>