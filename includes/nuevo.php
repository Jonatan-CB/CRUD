<?php
	session_start();
	include('../clases/conexion.php');

	$nombre = $_POST['nombre'];
	$apellido =  $_POST['apellido'];
	$usuario= $_POST['usuario'];
	$pass= $_POST['pass'];
	$telefono= $_POST['telefono'];
	$correo= $_POST['correo'];
	$fecha= $_POST['fecha'];
	$sexo= $_POST['sexo'];

	$nombre_img = $_FILES['foto']['name'];
	$tipo = $_FILES['foto']['type'];
	$tamaño = $_FILES['foto']['size'];
	$archivo = $_FILES['foto']['tmp_name'];
	$ruta = "../imagenes/usuarios/".$nombre_img;
	//print $nombre.", ".$apellido.", ".$usuario.", ".$pass.", ".$telefono.", ".$correo.", ".$fecha.", ".$sexo."</br>";
	//print $nombre_img.", ".$tipo.", ".$tamaño.", ".$archivo.", ".$ruta."</br>";
	move_uploaded_file($archivo, $ruta);

	$query="INSERT INTO usuarios VALUES(NULL,'$nombre','$apellido','$usuario','$pass',$telefono,'$correo','$fecha','$sexo','$nombre_img')";
	mysqli_query($con,$query);
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Insertado OK"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../paginas/home.php">