<?php  ?>

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
        <div class="row">
            <div class="col-md-12">
                <table>
                    <caption><i class="ion-ios-folder-outline"></i> -----> Statement Summary</caption>
                            <thead>
                                <tr>
                                  <th scope="col">Account</th>
                                  <th scope="col">Due Date</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">Period</th>
                                </tr>
                            </thead>
                          <tbody>
                            <tr>
                              <td data-label="Account">Visa - 3412</td>
                              <td data-label="Due Date">04/01/2016</td>
                              <td data-label="Amount">$1,190</td>
                              <td data-label="Period">03/01/2016 - 03/31/2016</td>
                            </tr>
                            <tr>
                              <td scope="row" data-label="Account">Visa - 6076</td>
                              <td data-label="Due Date">03/01/2016</td>
                              <td data-label="Amount">$2,443</td>
                              <td data-label="Period">02/01/2016 - 02/29/2016</td>
                            </tr>
                            <tr>
                              <td scope="row" data-label="Account">Corporate AMEX</td>
                              <td data-label="Due Date">03/01/2016</td>
                              <td data-label="Amount">$1,181</td>
                              <td data-label="Period">02/01/2016 - 02/29/2016</td>
                            </tr>
                            <tr>
                              <td scope="row" data-label="Acount">Visa - 3412</td>
                              <td data-label="Due Date">02/01/2016</td>
                              <td data-label="Amount">$842</td>
                              <td data-label="Period">01/01/2016 - 01/31/2016</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
        <div class="row with-padding">
            <div class="col-md-12">
                <!-- <ul class="prograssbar">
                    <li class="active">Step 1</li>
                    <li>Step 2</li>
                    <li>Step 3</li>
                </ul> -->
                <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" id="sel" onchange="myFunction()">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                </div>

                <div class="col-md-6">
                <div id="content"></div>
                   <!--  <input type="Text" class="form-control" id="addText" placeholder="Text"> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6"><p id="textval"></p></div>
                <div class="col-md-6"><!-- <p id="countNumber"></p> --></div>
            
            </div>
        </div>
    </div>
    

    
    



<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery.lettering.js"></script>
</body>
</html>