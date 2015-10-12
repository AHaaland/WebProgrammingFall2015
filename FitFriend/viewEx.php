<?php
session_start();

  $exercise = $_SESSION['exercise'];
  if($_POST){
    $_SESSION['exercise'] = $exercise;
    header('Location: trackEx.php');
  }
  $workout = $exercise[$_REQUEST['id']];

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
        <br>
<div class="container">
    <div class="panel panel-success">
                <div class="panel-heading">Your Data</div>
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Name</dt>
                        <dd><?=$workout['Name']?></dd>
                        <dt>Calories Burned</dt>
                        <dd><?=$workout['Callories']?></dd>
                        <dt>When you worked out?</dt>
                        <dd><?=$workout['Time']?></dd>
                        <dt>Time you worked out?</dt>
                        <dd><?=$workout['Duration']?></dd>
                    </dl>
                </div>
            </div>
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