<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>tac.com</title>
</head>

    <body >
	<header id="header" >
	<img src="img/logo.png">
	</header>

<div class="log">
	<div class="contenedor">
		<form action="validarUsuario.php" method="post">
		
				<label>Usuario</label>
				<input type="text" name="usuario" placeholder="Ingresar correo" required>
				<label >Contraseña</label>
				<input type="password" name="password" placeholder="Ingresar contraseña" required>
				<input  type="submit" class="button speacial big" value="Log in">
		</form>					
			<br>
			<br>
				<span>Olvido su <A href="recuperar.php">Contraseña?</A></span>
				<br>
				<a href="registrar.php">No tienes una cuenta?</a>
	</div>
</div>

	<footer id="footer">
			<div class="container">
				<ul class="copyright">
					<li>&copy; UNACH</li>
					<li>Design: LSC</li>		
				</ul>
			</div>
		</footer>
	</body>
</body>
</html>