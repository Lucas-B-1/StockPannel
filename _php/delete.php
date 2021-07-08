<?php
if(isset($_GET['id'])){
    include "../db_conn.php";

    function validate($datas){
        $datas = trim($datas);
        $datas = stripslashes($datas);
        $datas = htmlspecialchars($datas);
        return $datas;
    }

    $id = validate($_GET['id']);

    $sql = "DELETE FROM `produits` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<h4 style=\"background-color: #DBF3CC; color:#228B22; font-family: 'Roboto', sans-serif;\">Votre produit a bien été supprimé! <br> <a href=\"../showlist.php\">Retour</a></h4>";
    }else{
        echo "<h4 style=\"background-color: #F2DEDE; color:#A94442; font-family: 'Roboto', sans-serif;\">ATTENTION! Le produit n'a pas été supprimé! <br> <a href=\"../showlist.php\">Retour</a></h4> ";
    }

}else{
    header("Location: ../read.php");
}
?>