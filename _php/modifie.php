<?php

if(isset($_GET['id'])){
    include "db_conn.php";

    function validate($datas){
        $datas = trim($datas);
        $datas = stripslashes($datas);
        $datas = htmlspecialchars($datas);
        return $datas;
    }

    $id = validate($_GET['id']);


    $sql = "SELECT * FROM `produits` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        header("Location: ./update.php");
    }

}else if (isset($_POST['update'])){
    include "../db_conn.php";
    function validate($datas){
        $datas = trim($datas);
        $datas = stripslashes($datas);
        $datas = htmlspecialchars($datas);
        return $datas;
    }

    $name = validate($_POST['name']);
    $description = validate($_POST['description']);
    $price = validate($_POST['price']);
    $category = validate($_POST['category']);
    $quantity = validate($_POST['quantity']);
    $id = validate($_POST['id']);

    if (empty($name) || empty($description) || empty($price)){
        header("Location: ../modifie.php?id=$id&error=Il manque un ou des champ(s)");
    }else if (empty($category)){
        header("Location: ../modifie.php?id=$id&error=Il manque la catégorie");
    }
    else{
        $sql = "UPDATE `produits` SET `name`='$name', `description`='$description', `price`='$price', `category`='$category', `quantity`='$quantity' WHERE `id`='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<h4 style=\"background-color: #DBF3CC; color:#228B22; font-family: 'Roboto', sans-serif;\">Votre produit a bien été modifié! <br> <a href=\"../showlist.php\">Retour</a></a></h4>";

        }else{
            echo "<h4 style=\"background-color: #F2DEDE; color:#A94442; font-family: 'Roboto', sans-serif;\">ATTENTION! Le produit n'a pas été modifié! <br> <a href=\"../showlist.php\">Retour</a></h4> ";
        }
    }
}else{
    header("Location: ./update.php");
}

?>