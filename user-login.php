<?php  
    // session_start();
    // if(!isset($_SESSION["sess_user"])){
    //     header("location:assets/include/server_connection.php");
    // }else{

    // }
?>

<!DOCTYPE html>
<html>
<head>
	<title>JSON Data | Table fetching and Testing</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

	<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    

</head>
<body>

	<section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="about-text">
                        <h3>JSON Array</h3>
                        <p>Difference between Json Array and Object with help of Javascript</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <header class="pagecontent">
    	 <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">About us</a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="products.php">Products</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">Gallery</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row user_login">
            <div class="col-md-4 col-md-offset-4">
              <h2><i class="ion-ios-camera-outline"></i> Login</h2>
            </div>
            <div class="col-md-12 ">
              <form class="col-md-4 col-md-offset-4 " method="POST" action="assets/include/server_connection.php">
                <label class="label-title">Name</label>
                    <input type="text" id="fname" name="s_user" required="">
                <label class="label-title">Password</label>
                    <input type="password" id="lname" name="s_pass" required="">
                <input class="button button4" type="submit" value="login" name="submit">
              </form>
            </div>
        </div>
    </div>
    

    
    



<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery.lettering.js"></script>
</body>
</html>