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
               <Button type="button" class="btn btn-primary navbar-btn pull-left" data-toggle="modal" data-target="#loginModal" role="login">Sign In</Button> 
              <p class="navbar-text">or <a href="signup.php">Sign up today!</a></p>
          </div>
          </div>
        </div>
        </nav>
        <div class="container">
            <h1>Your Food!</h1>
            <Button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModalFood"><i class ="glyphicon glyphicon-plus"></i>Add Food!</Button>
            <Button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delModalFood"><i class ="glyphicon glyphicon-trash"></i> Delete Food!</Button>
            <table class="table table-striped table-hover">
 			<thead>
 				<tr>
                  <th>Food</th>
                  <th>Calories</th>
                  <th>Fat (g)</th>
                  <th>Carbs (g)</th>
                  <th>Fiber (g)</th>
                  <th>Time</th>
                </tr>
 			</thead>
 			<tbody>
 				<tr>
 				    <th>Name</th>
 				    <th>cals</th>
 				    <th>fat</th>
 				    <th>carbs</th>
 				    <th>fiber</th>
 				    <th>date</th>
 				</tr>
 			</tbody>
		</table>
		<Button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModalEx"><i class ="glyphicon glyphicon-plus"></i>Add Exercise!</Button>
        <Button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delModalEx"><i class ="glyphicon glyphicon-trash"></i> Delete Exercise!</Button>
		<table class="table table-striped table-hover">
 			<thead>
 				<tr>
                  <th>Type of Exercise</th>
                  <th>Calories Burned </th>
                  <th>Date</th>
                </tr>
 			</thead>
 			<tbody>
 				<tr>
 				    <th>Walking</th>
 				    <th>100</th>
 				    <th>9/19/15</th>
 				</tr>
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
    <!--MODAL ADD Food-->
     <div class="modal fade" id="addModalFood" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Food!</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
            <div class="form-group">
            <label for="inputFood" class="col-sm-2 control-label">Food Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtFood" placeholder="Food Name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCals" class="col-sm-2 control-label">Calories:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtCals" placeholder="Calories">
            </div>
          </div>
          <div class="form-group">
            <label for="inputFat" class="col-sm-2 control-label">Fat(g):</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtFat" placeholder="Fat">
            </div>
          </div>
          <div class="form-group">
            <label for="inputCarbs" class="col-sm-2 control-label">Carbohydrates(g):</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtCarbs" placeholder="Carbohydrates">
            </div>
          </div>
          <div class="form-group">
            <label for="inputFiber" class="col-sm-2 control-label">Fiber(g):</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtFiber" placeholder="Fiber">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTime" class="col-sm-2 control-label">Date and time:</label>
            <div class="col-sm-10">
              <input type="Date" class="form-control" id="txtDT" placeholder="Date and Time">
            </div>
          </div>
        </form>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <Button type="button" class="btn btn-success"><i class ="glyphicon glyphicon-plus"></i> Add</Button>
              </div>
        </div>
      </div>
    </div>
    <!--MODAL ADD Food-->
    <!--MODAL RM Food-->
    <div class="modal fade" id="delModalFood" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Delete item</h4>
          </div>
          <div class="modal-body">
            ...
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </div>
      </div>
    </div>
     <!--MODAL RM Food-->
     <!--MODAL ADD Food-->
     <div class="modal fade" id="addModalEx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Exercise!</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
          <div class="form-group">
            <label for="inputTime" class="col-sm-2 control-label">Date and time:</label>
            <div class="col-sm-10">
              <input type="Date" class="form-control" id="txtDT" placeholder="Date and Time">
            </div>
          </div>
          <div class="form-group">
            <label for="inputType" class="col-sm-2 control-label">Type of Exercise:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtTp" placeholder="Type of Exercise">
            </div>
          </div>
          <div class="form-group">
            <label for="inputType" class="col-sm-2 control-label">Calories Burned:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtCalBurn" placeholder="Calories Burned">
            </div>
          </div>
        </form>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <Button type="button" class="btn btn-success"><i class ="glyphicon glyphicon-plus"></i> Add</Button>
              </div>
        </div>
      </div>
    </div>
    <!--MODAL ADD Food-->
         <!--MODAL RM Food-->
    <div class="modal fade" id="delModalEx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Delete item</h4>
          </div>
          <div class="modal-body">
            ...
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </div>
      </div>
    </div>
     <!--MODAL RM Food-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <footer>
            <div class="text-center containter">
                <h5>©2015 Andrew Haaland All rights reserved.</h5>
            </div>
        </footer>
    </body>
</html>