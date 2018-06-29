<?php

session_start();
include('../clases/conexion.php');
if(isset($_SESSION['usuario']))
{
	$id = $_GET['id'];
	$q="SELECT * FROM usuarios where id=$id";
  	$resul=mysqli_query($con,$q);
    while ($fila=mysqli_fetch_array($resul))
    {
    	$dato=$fila[9];
    }
    $dir = $_SERVER ['DOCUMENT_ROOT']."/CRUD/imagenes/usuarios/"; /*Ruta local donde se almacenan tu imagen*/
	$eliminar=unlink($dir.$dato);  /* Eliminas tu Imagen*/

	$query="delete from usuarios where id=$id";
	mysqli_query($con,$query);
	//echo "eliminado";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../paginas/home.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'>";
	}		 

?>