<?php
session_start();
if(isset($_SESSION['nombreUsuario']))
{
	$usuarioSesion=$_SESSION['nombreUsuario'];
	$tipoSesion=$_SESSION['tipoUsuario'];
}
else
{
	$usuarioSesion='';
	$tipoSesion='';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>tac.com</title>
</head>

    <body class="landing">

	<header id="header" class="alt">
	<img src="img/logo.png">
	<nav id="nav">
		<ul>
			<li><a href="index.php">Inicio</a></li>		
			<?php
				if($usuarioSesion<>'' && $tipoSesion==2)
					{
			?>
				<li><a href="reservaboleto/reservaboleto.php">Reservar boleto</a></li>
			<?php
				}
			?>
			<?php
				if($usuarioSesion<>'' && $tipoSesion==1)
					{
			?>
				<li><a href="Administracion/administracion.php">Administración</a></li>
			<?php
				}
			?>
			<li><a href="contactanos.php">Contáctanos</a></li>
			<li><a href="Nosotros/nosotros.php">Nosotros</a></li>
			<li>
				<a href="logout.php" class="button special big">
					<?php 
					if($usuarioSesion<>'')
					{
						echo $usuarioSesion;
					}
					else{
						echo "iniciar sesión";
					}
						
					?>
				</a>
			</li>			
		</ul>
	</nav>
	</header>


	<section id="banner">
	<div class="containerr">
					<center> <h1><span>T A C</span></h1> 
						<p><span class="des">Transporte de Autobúses Chiapas</span></p>
					</center> 
		<ul class="actions">
			<li><a href="login.php" class="button special big">Regístrate</a></li>
		</ul>
		</div>
	</section>
	
	<footer id="footer">
			<div class="container">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<ul class="copyright">
					<li>&copy; UNACH</li>
					<li>Design: LSC</li>		
				</ul>
			</div>
		</footer>
</body>
</html>