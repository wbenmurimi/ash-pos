<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Admin</title>

  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div class="container" >
        <div class="row" id="admintop">
          <div class="col-md-4">            
            <div class="well">
              <div id="admintop-style">
              <h4>Home</h4>
            </div>
          </div>
          </div>
          <div class="col-md-6">
            <div class="well" >
              <div id="admintop-style">
              <h4>Welcome Admin</h4>
            </div>
          </div>
          </div>
          <div class="col-md-2">
            <div class="well">
              <div id="logoutbtn">
              <p><a class="btn btn-large btn-info" >Logout </a>
              </a></p>
          </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" id="breadcrumb">
        <div id="breadcrumbs">
          <h5>Dashboard &raquo;</h5><hr>
        </div>
      </div>
      <div class="container">
        <div class="row" id="admincontent">
          <div class="col-md-3 tabbable" id="leftnavlinks">
            <div class="well">
              <div>
                <ul class="nav nav-tabs nav-stacked" id="left-nav">
                  <li class="active">
                    <a href="#home" data-toggle="tab">Home</a> 
                  </li>
                  <li >
                    <a href="#addfood" data-toggle="tab"> Add Food</a> 
                  </li>
                  <li >
                    <a href="#viewfood" data-toggle="tab">View Food</a> 
                  </li>
                  <li >
                    <a href="#employee" data-toggle="tab">Employee</a> 
                  </li>
                  <li >
                    <a href="#reports" data-toggle="tab">Reports</a>
                  </li>
                  <li >
                    <a href="#logout" data-toggle="tab">Logout</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-9">
            <div class="well">
              <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="well" id="adminview">
                        <h3>Reversed Transactions</h3><hr>
                        <h3>4</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="well" id="adminview">
                        <h3>Today's Transactions</h3><hr>
                        <h3>200</h3>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="well" id="adminview">
                        <h3>Total Food</h3><hr>
                        <h3>40</h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="well" id="adminview">
                        <h3>Total Sales</h3><hr>
                        <h3>20,000</h3>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade in active" id="addfood">              
                  <form id="addform">
                    <div class="form-group">
                      <label for="name">Food Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Food name">
                    </div>
                    <div class="form-group">
                      <label for="price">Food Price</label>
                      <input type="text" class="form-control" id="price" placeholder="Food price">
                    </div>
                    <div class="form-group">
                      <label for="price">Category</label>
                      <select class="form-control">
                        <option value="Fast Food">Fast Food</option>
                        <option value="Local Food">Local Food</option>
                        <option value="Beverage">Beverage</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="picture">Food Picture</label>
                      <input id="picture"type="file" title="Browse">
                    </div>

                    <button type="submit" class="btn btn-primary span12">Add Food</button>
                  </form>
                </div>
                <div class="tab-pane fade in active" id="viewfood">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Food id</th>
                        <th>Food Name</th>
                        <th>Food Price</th>
                        <th>Food Picture</th>
                        <th>Edit Food</th>
                        <th>Delete Food</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                      </tr>
                    </tbody>

                  </table>

                </div>
                <div class="tab-pane fade in active" id="employee">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Emp id</th>
                        <th>Emp Name</th>
                        <th>Emp Email</th>
                        <th>Permission</th>
                        <th>Function</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                      </tr>
                    </tbody>

                  </table>

                </div>
                <div class="tab-pane fade in active" id="reports">
                  <form id="reportform">
                    <div class="form-group">
                      <label for="type">Report Type</label>
                      <select class="form-control">
                        <option value="Sales">Sales</option>
                        <option value="Food">Food</option>
                        <option value="Employee">Employee</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="range">Range</label>
                      <select class="form-control">
                        <option value="Today">Today</option>
                        <option value="Yesterday">Yesterday</option>
                        <option value="Last 7 days">Last 7 days</option>
                        <option value="This Month">This Month</option>
                        <option value="Last Month">Last Month</option>
                        <option value="This Year">This Year</option>
                        <option value="Last Year">Last Year</option>
                        <option value="All">All</option>
                      </select>
                    </div>
                    <div id="form-group">
                      <label for="export">Export to Excel</label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio">No
                      </label>

                    </div>
                    <button type="submit" class="btn btn-primary span12">Generate Report</button>
                  </form>

                </div>
                <div class="tab-pane fade in active" id="logout">
                  Logout

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Ofline JQuery-->
      <script src="jquery-2.1.3.js"></script>
      <script type="text/javascript">
      $('input[type=file]').bootstrapFileInput();
      $('.file-inputs').bootstrapFileInput();
      </script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
    </html>