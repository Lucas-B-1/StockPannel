<?php
if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['category']) && isset($_POST['quantity'])){

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

    if (empty($name) || empty($description) || empty($price) || empty($category)){
        header("Location: ./addproduct.php?error=Il manque un ou des champ(s)");
    }else{
        $sql = "INSERT INTO `produits`(`name`, `description`, `price`, `category`, `quantity`) VALUES('$name', '$description', '$price', '$category', '$quantity')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<h4 style=\"background-color: #DBF3CC; color:#228B22; font-family: 'Roboto', sans-serif;\">Votre produit a bien été ajouté à la base de données! <br> <a href=\"../addproduct.php\">Retour</a></h4>";
        }else{
            echo "<h4 style=\"background-color: #F2DEDE; color:#A94442; font-family: 'Roboto', sans-serif;\">ATTENTION! Le produit n'a pas été ajouté à la base de données! <br> <a href=\"../addproduct.php\">Retour</a></h4> ";
        }
    }    
}else{
    header("Location: ./addproduct.php");
}
?>
