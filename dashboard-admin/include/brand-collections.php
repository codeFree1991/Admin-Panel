<?php
session_start();
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web-app";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO brand_collections (code_id, brand_name, status)
        VALUES ('".$_POST['brand_code']."', '".$_POST['brand_name']."', '".$_POST['brand_status']."')";
        // use exec() because no results are returned
        if($conn->exec($sql)){
        echo "New record created successfully";
    $_SESSION["msg"]="success";}
        else
        echo "sorry";
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
}
$conn = null;

header("location:../ourbrands.php");


?>