<?php
include "_php/read.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panneau d'administration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.php">Accueil</a>
            <a class="nav-item nav-link active" href="#">Liste des produits</a>
            <a class="nav-item nav-link" style="background-color: #DBF3CC; color:#228B22;" href="addproduct.php">Ajouter un produit</a>
            </div>
        </div>
    </nav>
    <body>
        <div class="container">
            <div class="box">
                <h5 class="display-4 text-center">Liste des produits</h5><hr>

                <?php if(mysqli_num_rows($result)){ ?>
 
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du produit</th>
                        <th scope="col">Description</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 0 ;
                        while($rows = mysqli_fetch_assoc($result)){
                            $i++; 
                        ?>
                        <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['description']; ?></td>
                            <td><?php echo $rows['price']; ?></td>
                            <td><?php echo $rows['category']; ?></td>
                            <td><?php echo $rows['quantity']; ?></td>
                            <td><a href="update.php?id=<?=$rows['id']?>" 
                                    class="btn btn-success">Modifier</a>
                                <a href="_php/delete.php?id=<?=$rows['id']?>" 
                                    class="btn btn-danger">Supprimer</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } ?>
                <div class="link-right">
                    <a href="_php/read.php" class="link-primary"></a>
                </div>
            </div>
        </div>
    </body>
</html>

<style>
td{
    padding-right: 0;
}
a.btn{
    margin-right: 0;
    padding-right: 10;
    margin-left: 120px;

}
</style>
