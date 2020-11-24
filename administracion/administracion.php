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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<title>TAC.com</title>
</head>
<body class="landing">
<header id="header" class="alt">
	<img src="../img/logo.png">
	<nav id="nav">
		<ul>
			<li><a href="../index.php">Inicio</a></li>		
			<?php
				if($usuarioSesion<>'' && $tipoSesion==2)
					{
			?>
				<li><a href="../reservaboleto/reservaboleto.php">Reservar boleto</a></li>
			<?php
				}
			?>
			<?php
				if($usuarioSesion<>'' && $tipoSesion==1)
					{
			?>
				<li><a href="../Administracion/administracion.php">Administración</a></li>
			<?php
				}
			?>
			<li><a href="../contactanos.php">Contáctanos</a></li>
			<li><a href="../Nosotros/nosotros.php">Nosotros</a></li>
			<li>
				<a href="../logout.php" class="button special big">
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

	<table class="reserva">
	<tr>
		<td > <img src="../img/destino.png" alt=""> </td>
		<td > <img src="../img/unidad.png" alt=""> </td>
		<td > <img src="../img/horario.png" alt=""> </td>
	</tr>

	<tr>
		<td> 
		<a href="destino/destino.php">destinos</a>
         </td>
            
		<td> 
		<a href="UDT/UDT.php">Unidad de transporte</a>
		</td>

		<td> 
		<a href="horario/horario.php">Horarios</a>
		</td>

	</tr>

	<tr>
		<td > <img src="../img/linea.png" alt=""> </td>
		<td > <img src="../img/venta.png" alt=""> </td>
	</tr>
	<tr>
		<td> 
		<a href="LDT/LDT.php">Linea de transporte</a>
         </td>
            
		<td> 
		<a href="venta/venta.php">Confirmacion de venta</a>
		</td>

	</tr>

		 </table>
	
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