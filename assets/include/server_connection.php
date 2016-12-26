<?php 

/* --------------------------------------------------- 
		1. User Login : method name : Procedural
		2. 
----------------------------------------------------- */

if (isset($_POST['submit'])) {
		$user = $_POST['s_user'];
		$pass = $_POST['s_pass'];
		// Data base Connection
		$con = mysqli_connect("localhost","root","","web-app");
		$query = mysqli_query($con,"SELECT * FROM super_admin_user WHERE super_user_name = '".$user."' AND super_passcode = '".$pass."'");
		$dbs_username = "";
		$dbs_passcode ="";
		$numrows = mysqli_num_rows($query);
		// echo "<pre>";
		// print_r($numrows);
		// echo "</pre>";
		while ($row = mysqli_fetch_assoc($query)) {
			$dbs_username = $row['super_user_name'];
			$dbs_passcode = $row['super_passcode'];
		}
		if ($user == $dbs_username && $pass == $dbs_passcode) {
			session_start();
			$_SESSION['sess_user'] = $user;
			/* Redirect the browser*/
			
			header("Location:../../dashboard-admin/dash-board.php");
		} else {
			echo "Invalid Login! Oops..";
	}
}

/* ---------------------------------------------------------------
 		1. Manual INSERT Query method
 -------------------------------------------------------------- */

// $con = mysql_connect("localhost","root","");
// $db=mysql_select_db("web-app",$con);
// $name='super-admin';
// $email='super-admin@test.com';
// $mobile='97000089';
// $pass='test@123';

// $sql="INSERT INTO `super_admin_user`( `super_user_name`, `super_user_email`, `super_user_mobile`, `super_passcode`) 
// VALUES ('".$name."','".$email."','".$mobile."','".$pass."')";

// mysql_query($sql); 

 ?>