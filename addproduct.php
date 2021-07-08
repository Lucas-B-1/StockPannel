<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Panneau d'administration</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.php">Accueil</a>
            <a class="nav-item nav-link" href="showlist.php">Liste des produits</a>
            <a class="nav-item nav-link active" style="background-color: #DBF3CC; color:#228B22;" href="#">Ajouter un produit</a>
            </div>
        </div>
    </nav>
<body>
<h5 class="display-4 text-center">Ajouter un produit</h5><hr>
    <form method="POST" action="_php/send.php">
    <label>Catégorie</label>
        <select name="category" required>
            <option value="">-- Choisissez une catégorie de produit--</option>
            <option value="boisson">Boisson</option>
            <option value="dessert">Dessert</option>
            <option value="burger">Burger</option>
            <option value="poke">Pok&#233;-Bowl</option>
            <option value="enfant">Menu enfants</option>
            <option value="nouveauté">Nouveaut&#233;</option>
        </select>
        <br>
    <div class="form-group">
        <label>Nom du produit</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" name="description" required>
    </div>
    <div class="form-group">
        <label>Prix</label>
        <input type="number" min="0" step=".01" class="form-control" name="price" required>
    </div>
    <div class="form-group">
        <label>Quantité</label>
        <input type="number" min="0" class="form-control" name="quantity">
    </div>
        <input type="submit" name="submit" value="Soumettre" class="btn">
    </form>

<?php header("Content-Type: text/html;charset=UTF-8"); ?>

</body>
</html>
<style>
.btn{
    background-color: lightgrey;
    border : 1px solid grey;
    width:10%;
}
</style>