<?php
$sname = "localhost";
$username = "root";
$password = "root";
$db_name = "test_lpj";


$conn = mysqli_connect($sname, $username, $password, $db_name);

if(!$conn){
    echo "La connexion a echoué";
    exit();
}
?>