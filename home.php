<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])){

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
            <a class="nav-item nav-link active" href="home.php">Accueil<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="showlist.php">Liste des produits</a>
            <a class="nav-item nav-link" style="background-color: #DBF3CC; color:#228B22;" href="addproduct.php">Ajouter un produit</a>
            </div>
        </div>
    </nav>
    <body>
        <div class="background-img"></div>
        <h1 class="welcome">Bonjour, <?php echo $_SESSION['name']; ?></h1>
        <h4 class="welcome">Bienvenue sur votre panneau d'administrateur.</h4>
        <a class="logout" href="logout.php">Déconnexion</a>
    </body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>
