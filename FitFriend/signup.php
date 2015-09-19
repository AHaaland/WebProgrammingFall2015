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
          </ul>
          <div class="navbar-right">
              <p class="navbar-text ">Hello, Guest!</p>
              <a href="#" class="btn btn-primary navbar-btn pull-left" role="button">Sign In</a>
              <p class="navbar-text">or <a href="signup.php">Sign up today!</a></p>
          </div>
          </div>
        </div>
        </nav>
        <div class="container">
        <div class="page-header">
          <h1>Sign up!</h1>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Your Name</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="txtName" placeholder="Name">
            </div>
          </div>  
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
          <div class="form-group">
            <label for="inputPassword1" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="txtPassword" placeholder="Confirm Password">
            </div>
          </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <footer>
            <div class="text-center containter">
                <h5>©2015 Andrew Haaland All rights reserved.</h5>
            </div>
        </footer>
    </body>
</html>