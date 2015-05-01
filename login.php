<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>login</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/login.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div class="container" id="loginForm">
        <div class="row">
          <div class=" col-md-12 tabbable">
            <div class="well">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a href="#login" data-toggle="tab">Login</a>
                </li>
                <li>
                  <a href="#signup" data-toggle="tab">Register</a>
                </li>
              </ul>


              <div class="tab-content">
                <div class="tab-pane fade in active" id="login">
                  <form id="positioninputs">
                    <div class="form-group">
                      <label for"username">Username</label>
                      <input type="text" class="form-control " id="username">
                    </div>
                    <div class="form-group">
                      <label for"password">Password</label>
                      <input type="password" class="form-control" id="password">
                    </div>
                    <div class="pull">
                      <button type="submit" class="btn btn-primary">Login &raquo;</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade in active" id="signup">
                  <form id="positioninputs">
                    <div class="form-group">
                      <label for"username">Username</label>
                      <input type="text" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                      <label for"useremail">Email</label>
                      <input type="email" class="form-control" id="useremail">
                    </div>
                    <div class="form-group">
                      <label for"password">Password</label>
                      <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                      <label for"confirmP"> Confirm Password</label>
                      <input type="password" class="form-control" id="confirmP">
                    </div>
                    
                    <div class="pullright" id="signinbtn" href="#reset" data-toggle="modal">
                      <button type="submit" class="btn btn-primary">Register &raquo;</button>
                    </div>
                    <div class="pullleft" id="resetPass">
                      <a class="btn btn-large btn-success" href="#reset" data-toggle="modal" >Reset Password</a>
                      <!-- <button class="btn btn-success">Reset Password</button> -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class= "modal fade" id="reset" load="dialog">
        <div class ="modal-dialog">
          <div class="modal-content">
            <form class="form-horizontal">
              <div class="modal-header">
                <h3>Reset Password</h3>
              </div>
              <div class="modal-body">

                <div class="form-group" id="alignPopup">
                  <label for="email" class="col-lg-control-lable">Enter Email</label>
                  <div class="coll-lg-4" >
                    <input type="email" class="form-control" id="email">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div id="aligncancelbtn">
                <a class="btn btn-default" data-dismiss="modal">Cancel</a>
                </div>
                <a class="btn btn-primary" >Send</a>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script src="jquery-2.1.3.js"></script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
    </html>