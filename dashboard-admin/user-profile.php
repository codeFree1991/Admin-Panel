<?php include'include/logout.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
  </head>
  <body>
    <div class="container-fluid display-table">
      <div class="row display-table-row">
      <!-- Side Navigation -->
        <div class="col-md-2 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm">Navigation</h1>
          <ul>
            <li class="link active">
              <a href="user-profile.php">
                <span aria-hidden="true" class="span-icons"><i class="ion-ios-home-outline"></i></span>
               <span class="hidden-sm hidden-xs">Dashboard</span> 
              </a>
            </li>
            <li class="link">
              <a href="#">
                <span aria-hidden="true" class="span-icons"><i class="ion-ios-person-outline"></i></span>
                <span class="hidden-sm hidden-xs">Personal</span>
              </a>
            </li>
              <!-- collapse -->
              <li>
                <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
                <span aria-hidden="true" class="span-icons"><i class="ion-ios-person-outline"></i></span>
                <span class="hidden-sm hidden-xs">Blog</span>
                </a>
                <ul class="collapse collapseable" id="collapse-post">
                  <li><a href="new-blog.php">Create New</a></li>
                  <li><a href="#">View more</a></li>
                </ul>

              </li>
              <!-- collapse-end -->
            <li class="link">
              <a href="#">
                <span aria-hidden="true" class="span-icons"><i class="ion-ios-barcode-outline"></i></span>
                <span class="hidden-sm hidden-xs">Finance</span>
              </a>
            </li>
            <li class="link">
              <a href="#">
                <span aria-hidden="true" class="span-icons"><i class="ion-ios-calendar-outline"></i></span>
                <span class="hidden-sm hidden-xs">Daily schedule</span>
              </a>
            </li>
            <li class="link">
              <a href="data-table.php">
                <span aria-hidden="true" class="span-icons"><i class="ion-ios-paperplane-outline"></i></span>
                <span class="hidden-sm hidden-xs">Business</span>
              </a>
            </li>
            <li class="link">
              <a href="#">
                <span aria-hidden="true" class="span-icons"><i class="ion-ios-compose-outline"></i></span>
                <span class="hidden-sm hidden-xs">History</span>
              </a>
            </li>
            <li class="link settings-btn">
              <a href="#">
                <span aria-hidden="true" class="span-icons"><i class="ion-ios-gear-outline"></i></span>
                <span class="hidden-sm hidden-xs">Setting</span>
              </a>
            </li>
          </ul>
        </div>

      <!-- Main Content -->

        <div class="col-md-10 display-table-cell valign-top box">
          
          <div class="row">
            
            <header id="nav-header" class="clearfix">
              
              <div class="col-md-5">
                <nav class="navbar-default pull-left">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="true">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </nav>
                <input type="text" class="hidden-sm hidden-xs" id="header-search-field" placeholder="Search for something.......">
              </div>
              
              <div class="col-md-7">
                <ul class="pull-right">
                  <li id="welcome" class="hidden-xs"><b>Welcome to Admin Dashboard area</b></li>
                  <li class="fixed-width">
                    <a href="#">
                      <span aria-hidden="true" class="span-icons"><i class="ion-ios-bell-outline gray-color"></i></span>
                      <span class="label label-warning">5</span>
                    </a>
                  </li>
                  <li class="fixed-width">
                    <a href="#">
                      <span aria-hidden="true" class="span-icons"><i class="ion-ios-email-outline gray-color"></i></span>
                      <span class="label label-message">10</span>
                    </a>
                  </li>
                  <li>
                  <?=$_SESSION['sess_user'];?>
                    <a href="../assets/include/dash-board-log-out.php">
                      <span aria-hidden="true" class="span-icons"><i class="ion-ios-gear-outline gray-color"></i></span>
                      log out
                    </a>
                  </li>
                </ul>
              </div>
            </header>
          </div>
            

          <!-- content post -->
          <div id="content">
           <!--  <header>
              <h2 class="page_title">Profile Information</h2>
            </header> -->
            <div class="content-inner">
              <h3>General Information</h3>
              <hr>

              <div class="row">
                <div class="col-md-12">
                 <p>profile image</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row clearfix">
                    <label class="col-sm-3 control-label" for="inputFirstName">First Name</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="inputFirstName" placeholder="" type="text" value="Anastasiya">
                    </div>
                  </div>
                  <div class="form-group row clearfix">
                    <label class="col-sm-3 control-label" for="inputLastName">Last Name</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="inputLastName" placeholder="" type="text" value="">
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>













          <!-- footer row -->
          <div class="row">
            <footer id="admin-footer">
              <div class="pull-left"><b>Copyrights</b> &copy;2016</div>
              <div class="pull-right">admin panel</div>
            </footer>
          </div>
          <br>
         
        </div>

      </div>
    </div>

  











    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/default.js"></script>
  </body>
</html>