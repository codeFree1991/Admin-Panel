<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Data table | Dashboard-admin</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="chosen_v1.6.2/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="summernote-master/dist/summernote.css">
    <link href="css/default.css" rel="stylesheet">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/new-blog.css">
    <link rel="stylesheet" type="text/css" href="data-tables/css/dataTables.bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid display-table">
      <div class="row display-table-row">
      <!-- Side Navigation -->
        <div class="col-md-2 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm">Navigation</h1>
          <ul>
            <li class="link">
              <a href="dash-board.php">
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
              <li class="link active">
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
                    <a href="#">
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
            <header>
              <h2 class="page_title"> Create new blog post</h2>
            </header>
            <div class="content-inner">
              <div class="panel panel-default">
                  <div class="panel-heading name-panel">
                    <h3>Our Brands</h3>
                  </div>
                  <div class="panel-body">
                    <table class="table table table-striped table-bordered table-hover" id="rankingTable">
                      <thead>
                        <tr>
                          <th>Code No</th>
                          <th>Brand Name</th>
                          <th>Satus</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
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
    <script src="chosen_v1.6.2/chosen.jquery.min.js"></script>
    <script src="summernote-master/dist/summernote.min.js"></script>
    <!-- data tables -->
    <script src="data-tables/js/jquery.dataTables.min.js"></script>
    <script src="data-tables/js/dataTables.bootstrap.min.js"></script>
    <script src="js/default.js"></script>

    <!-- <script type="text/javascript">
      var config{
        '.chosen-select': {},
        '.chosen-select-deselect': {allow_single_deselect:true},
        '.chosen-select-no-single': {disable_search_threshold:10},
        '.chosen-select-no-result': {no_result_text: 'Oops nothing found!'},
        '.chosen-select-width': {width:'95%'}
      }
      for (var selector in config){
        $(selector).chosen(config[selector]);
      }
    </script> -->
    
    <script type="text/javascript">
     $(rankingTable).dataTable();
    </script>
  </body>
</html>