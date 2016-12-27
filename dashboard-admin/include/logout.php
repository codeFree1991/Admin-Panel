<?php  
    session_start();

    if(!isset($_SESSION["sess_user"])){
        header("location:../user-login.php");
    }else{

    }
?>