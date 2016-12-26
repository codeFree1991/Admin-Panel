<?php
session_start();
//session_destroy('sess_user');
 session_unset('sess_user');
header("location:../../user-login.php");

?>