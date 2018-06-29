<?php

	if (isset($_POST['login']))
	{
		include('../../clases/conexion.php');
		//echo "Conexion OK <br>";

		$usuario=$_POST["usuario"];
		$clave=$_POST["contraseña"];
		$user = mysqli_real_escape_string($con,$usuario);
		$pass = mysqli_real_escape_string($con,$clave);

		//echo "Usuario: ".$usuario."<br>";
		//echo "Constraseña: ".$clave;

		$cadenamysql="select * from usuarios where usuario='$user' and clave='$pass'";

		//print $cadenamysql;

		$datos=mysqli_query($con, $cadenamysql);

		if(mysqli_num_rows($datos)>0)
		{
			$_SESSION["autorizar"]="si";
			session_start();
			while($fila=mysqli_fetch_array($datos))
			{
				$cod=$fila[0];
				$nombre=$fila[1];
				$apellido=$fila[2];
				$usuario=$fila[3];
				$clave=$fila[4];
				$telf=$fila[5];
				$correo=$fila[6];
				$fecha=$fila[7];
				$sexo=$fila[8];
				$foto=$fila[9];
				$_SESSION['usuario']=$nombre." ".$apellido;
				$_SESSION['foto']=$foto;
			}
			//Redireccionar
			print "<meta http-equiv='refresh' content='0;../../paginas/home.php'>";
		}
		else
		{
			print '<script languaje="JavaScript">';
			print 'alert("Usuario y/o Contraseña incorrectas");';
			print '</script>';
			
			print "<meta http-equiv='refresh' content='0;../../index.php'>";
		}
	}
?>