<?php
if(!isset($_SESSION)) {
  session_start();
  if(!isset($_SESSION['userId']) || $_SESSION['userLevel'] != "admin") header("Location: cpanel.php?error=2");
}

include('conexion/conexionLocalhost.php');
include('includes/codigoComun.php');

// Obtenemos todos los usuarios de la base de datos
$queryGetComments = "SELECT id, correo, nombre, comentario, rating FROM comentarios";

// Ejecutamos el query
$resQueryGetComments = mysql_query($queryGetComments, $conexionLocalhost) or trigger_error("The query for obtaining all comments couldn't be executed.");

// Extraemos del recordset los datos del primer registro
$commentDetail = mysql_fetch_assoc($resQueryGetComments);

// Obtenemos el total de usuarios encontrados
$totalComments = mysql_num_rows($resQueryGetComments);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css_main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet"> 
  <link rel="icon" type="image/png" href="imgs/favicon.ico" />
	<title>Pass 'N Go - Consultar Comentarios</title>
</head>
<body>
<?php
include('includes/header.php');
include('includes/useroptions.php');
include('includes/categoriesbar.php');
include('includes/eventsnav.php');
?>
<div class="listuser">
  <h1>Comentarios</h1>
  <ul class="listadoComments">
  <?php
    do { ?>  
    <li>
      <p class="nombreUsuario"><?php echo $commentDetail['correo'].' - '.$commentDetail['nombre'].' : <br>'.$commentDetail['comentario'].' <br> Calificación:  '.$commentDetail['rating']; ?></p>
      <br>
    </li>
  <?php } while($commentDetail = mysql_fetch_assoc($resQueryGetComments)); ?>
  </ul>

</div>
</body>
	<?php
	include('includes/footer.php');
	?>
</html>
<?php
  if(isset($resQueryValidateEmail)) mysql_free_result($resQueryValidateEmail);
  if(isset($resQueryAddUsuario)) mysql_free_result($resQueryAddUsuario);
?>