<?php
session_start();
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher la Base de données</title>
</head>
<body>
    <?php
    require ("db_conn.php");
    $conn = mysqli_connect($sname, $username, $password, $db_name);
    if(!$conn){
        echo "La connexion à la BDD a échoué";
        exit();
    }
    mysqli_select_db("produits");
    echo "La base de données est ouverte";
    $sql = "SELECT * FROM `produits`";
    $result = mysqli_query($conn, $sql);
    while ($ligne=mysqli_fetch_array($sql)){
        echo $ligne['name']; echo "<br>";
        echo $ligne['description']; echo "<br>";
        echo $ligne['price']; echo "<br>";
        echo $ligne['category']; echo "<br>";
        echo $ligne['quantity']; echo "<br>";
        echo "<br>";
    }
    mysql_close();
    ?>
</body>
</html>