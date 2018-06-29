<?php 

	session_start();
	if(empty($_SESSION['usuario'])):
	header('Location:../index.php');
	endif;
	?>
	<!DOCTYPE html>
	<html>
	<body>
	<div style="width:150px;margin:auto;height:500px;margin-top:300px">
	<?php	
	session_destroy();
	 echo'<progress max=100><strong>Progress: 60% done. </strong></progress><br>';
	 echo'<p class="itext"Cerrando la sesión por favor espere!...</p>';
	 echo '<meta http-equiv="refresh" content="2;../index.php">';
?>