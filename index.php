<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="login">
<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
            <img class="logo-lpj" alt="logo Le p'tit Jeannot" src="./images/logo.png" />
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Connexion panneau d'administration</h2>
					</div>
					<div class="row">
						<form method="POST" action="login.php" control="" class="form-group">
                            <?php if(isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></div>
                            <?php } ?>
							<div class="row">
								<input type="text" name="uname" id="username" class="form__input" placeholder="Identifiant">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Mot de Passe">
							</div>
							<div class="row">
								<input type="submit" name="submit" value="Se Connecter" class="btn">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>   
</body>
</html>
?>
<style>
.login{
	width: 100%;
	margin: auto;
	padding-left: 200px;
}
.btn{
	border: solid 1px black;
}
input{
	min-width: 100%;
}
@media screen and (max-width: 650px) {
.login{
  padding-left: 50px;
}
}
</style>