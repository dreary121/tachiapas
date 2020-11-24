<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<title>tac.com</title>
</head>
<body class="register">
<header id="header" class="alt">
<img src="img/logo.png">
			<div class="menu">
					
			<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="contactanos.php">Contáctanos</a></li>
					
			</ul>
	</nav>
	</div>	
</header>
				<div class="log">
			    <div class="contenedorr">
				<h1>Regístrate aquí</h1>
				<form action="guardarusuario.php" method="post">

					<label>Nombre</label>
					<input type="text" name="nombre" placeholder="Introduce nombre" required>

					<label type="text" >Direciión</label>
					<input type="text" name="direccion" placeholder="Introduce dirección" required>

					<label type="text" >Teléfono</label>
					<input type="text" placeholder="Introduce teléfono">

					<label type="username">Correo electrónico</label>
					<input type="text" name="correo" placeholder="Introduce correo electrónico"required>

					<label for="password">Contraseña</label>
					<input type="password" name="password" placeholder="Introduce contraseña">
						<br>
						<ul class="actions">
						<input type="submit" class="button special big" value="Regístrate">
					</ul>
				</form>

		    </div>
		</div>
			<footer id="footer">
						<div class="cont">
							<ul class="copyright">
							<li>&copy; UNACH</li>
							<li>Design: LSC</li>		
						</ul>
					</div>
        </div>
				</footer>
</body>
</html>