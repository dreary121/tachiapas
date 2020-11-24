<?php
session_start();
if(isset($_SESSION['nombreUsuario']))
{
	$usuarioSesion=$_SESSION['nombreUsuario'];
	$tipoSesion=$_SESSION['tipoUsuario'];
    $id=$_GET['id'];
    
    include_once '../conexion.php';
    $mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
    $consulta="SELECT R.Id, R.Hora,R.Fecha,L.Nombre ,H.Costo,U.Numero,D.Destino FROM reserva as R INNER JOIN LDT as L on R.IdLDT=L.Id INNER JOIN horario as H on R.Idhorario=H.Id  INNER JOIN Destino as D on R.Iddestino=D.Id  JOIN UDT as U on R.IdUDT=U.Id WHERE R.Id='".$id."'";
    $resultado=$mysqlConexion->query($consulta);
    if($registro=$resultado->fetch_array(MYSQLI_ASSOC))
    {
        $Nombre=$registro['Nombre'];
        $Destino=$registro['Destino'];
        $Hora=$registro['Hora'];
        $Fecha=$registro['Fecha'];
        $Costo=$registro['Costo'];
        $Numero=$registro['Numero'];
    }
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
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>tac.com</title>
</head>

    <body class="landing">

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

    <h1>RESERVA DE BOLETOS</h1>
    <form action="guardareserva.php" method="post">
                            <label>Id</label>
                            <input type="text" name="id" readonly value="<?php echo $id ?>">
                            <label>Destino</label>
                            <input type="text" name="Destino" readonly value="<?php echo $Destino ?>">
                            <label>Hora</label>
                            <input type="text" name="Hora" readonly value="<?php echo $Hora ?>">
                            <label>Fecha</label>
                            <input type="text" name="Fecha" readonly value="<?php echo $Fecha ?>">
                            <label>Costo</label>
                            <input type="text" name="Costo" readonly value="<?php echo $Costo?>">
                            <label>Numero</label>
                            <input type="text" name="Numero" readonly value="<?php echo $Numero?>">
                            <label>Cantidad</label>
                            <input type="text" name="cantidad" required>
                            <input type="submit" value="Comprar">
                        </form>



	
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