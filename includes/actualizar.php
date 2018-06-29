<?php

session_start();

	include('../clases/conexion.php');
	
	$cod = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido =  $_POST['apellido'];
	$usuario= $_POST['usuario'];
	$pass= $_POST['pass'];
	$telefono= $_POST['telefono'];
	$correo= $_POST['correo'];
	$fecha= $_POST['fecha'];
	$sexo= $_POST['sexo'];


	$q="SELECT * FROM usuarios where id=$cod";
  	$resul=mysqli_query($con,$q);
    while ($fila=mysqli_fetch_array($resul))
    {
    	$dato=$fila[9];
    }
    //print $dato."</br>";
	//Si existe imagen y tiene un tamaño correcto
	$nombre_img = $_FILES['foto']['name'];
	$tipo = $_FILES['foto']['type'];
	$tamaño = $_FILES['foto']['size'];
	$archivo = $_FILES['foto']['tmp_name'];
	$destino = "../imagenes/usuarios/";
	$ruta = $destino.$nombre_img;
	//print $nombre.", ".$apellido.", ".$usuario.", ".$pass.", ".$telefono.", ".$correo.", ".$fecha.", ".$sexo."</br>";
	//print $nombre_img.", ".$tipo.", ".$tamaño.", ".$archivo.", ".$ruta."</br>";
	move_uploaded_file($archivo, $ruta);
	//Eliminar la foto de la carpeta
	$dir = $_SERVER ['DOCUMENT_ROOT']."/CRUD/imagenes/usuarios/"; /*Ruta local donde se almacenan tu imagen*/
	$eliminar=unlink($dir.$dato);  /* Eliminas tu Imagen*/
	//var_dump($eliminar);
	//echo "</br>";

	$id = mysqli_real_escape_string($con,$cod);
	$nom = mysqli_real_escape_string($con,$nombre);
	$ape = mysqli_real_escape_string($con,$apellido);
	$usu = mysqli_real_escape_string($con,$usuario);
	$pas = mysqli_real_escape_string($con,$pass);
	$tel = mysqli_real_escape_string($con,$telefono);
	$cor = mysqli_real_escape_string($con,$correo);
	$fec = mysqli_real_escape_string($con,$fecha);
	$sex = mysqli_real_escape_string($con,$sexo);

	$query=("update usuarios set nombre='$nombre', apellidos='$ape', usuario='$usu', clave='$pas', telefono=$tel, correo='$cor', fechanac='$fec', sexo='$sex', foto='$nombre_img' where id=$id");
	//print $query;
	mysqli_query($con,$query);
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../paginas/home.php">