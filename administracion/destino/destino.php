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
	<link rel="stylesheet" href="../../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<title>TAC.com</title>
</head>
<body class="landing">
<header id="header" class="alt">
	<img src="../../img/logo.png">
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

    <a href="nd.php">Nuevo</a>

    <table class="tabla">
            <tr>
			    <th>Id</th>
				<th>Hora</td>
				<th>Fecha</th>
                <th>IdUDT</th>
                <th>Costo</th>
                <th></th>  
			</tr>
			
			<?PHP
								include_once '../../conexion.php';
								$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
								$consulta="SELECT R.Id,L.Nombre, D.Destino,R.Hora,R.Fecha,H.Costo,U.Numero FROM reserva as R INNER JOIN LDT as L on R.IdLDT=L.Id INNER JOIN horario as H on R.Idhorario=H.Id  INNER JOIN Destino as D on R.Iddestino=D.Id  JOIN UDT as U on R.IdUDT=U.Id;";
								$resultado=$mysqlConexion->query($consulta);
								while($registro=$resultado->fetch_assoc())
								{									
									?>
									<tr>
									    <td><?PHP echo $registro["Id"];?></td>
										<td><?PHP echo $registro["Hora"];?></td>
										<td><?PHP echo $registro["Fecha"];?></td>
										<td><?PHP echo $registro["Costo"];?></td>

                                        <td>
                                        <a href="recibo.php?id=<?PHP echo $registro["Id"];?>"><img src="../../img/editar.png" alt=""> </a>
                                        <a href="recibo.php?id=<?PHP echo $registro["Id"];?>"><img src="../../img/eliminar.png" alt=""> </a>
                                        </td>
									</tr>
									<?PHP
								}
								
							?>

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