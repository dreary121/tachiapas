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

include '../conexion.php';
  $horario=mysqli_query($mysqli,"SELECT fecha FROM horario");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>tac.com</title>
</head>

    <body >
	<!-- Header -->
	<header id="header" >
	<img src="../img/logo.png">
	<nav id="nav">
	<ul>
			<li><a href="../index.php">Inicio</a></li>
						
			
			<?php
				if($usuarioSesion<>'' && $tipoSesion==1)
					{
			?>
				<li><a href="Administracion/administrar.php">Administración</a></li>
			<?php
				}
			?>
			<li><a href="../Nosotros/nosotros.php">Nosotros</a></li>
			<li><a href="../contactanos.php">Contáctanos</a></li>
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

		<div class="image">
				<table class="reserva">
                   <tr>
						<td > <img src="../img/destino.png" alt=""> </td>
						<td > <img src="../img/unidad.png" alt=""> </td>
						<td > <img src="../img/horario.png" alt=""> </td>
					</tr>
	<tr>
		<td> 
		 <select id="lista" >
                

                </select>
         </td>
            
		<td> 
			 <select id="lista" >


                </select>
		</td>

		<td> 
			<select id="lista" >
			 <?php 
                        while($datos = mysqli_fetch_array($horario))
                        {
                    ?>
                            <option value="<?php echo $datos['fecha']?>"> <?php echo $datos['fecha']?> </option>
                    <?php
                        }
                    ?> 

				</select>
			</td>

	             </tr>
		 </table>
		 <center>
		 <br>
		 <li><a href="boletos.php" class="button special big">Buscar</a></li>
		 </center>
</div>
                
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