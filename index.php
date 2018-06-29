<!--
   Proyecto CRUD:
   Creador:Jonatán Alexander Camán Bustamante(JACB)
   Estudiante de Desarrollo de Software
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="login-box">
      	<img src="imagenes/logo.jpg" class="avatar" alt="Avatar Image">
      	<h1>Login</h1>
 	 	<form action="includes/validaciones/validar_login.php" method="POST">
	        <label for="usuario">Usuario</label>
	        <input type="text" name="usuario" autocomplete="off" autofocus placeholder="Ingrese su usuario">
	        <!-- PASSWORD INPUT -->
	        <label for="contraseña">Contraseña</label>
	        <input type="password" name="contraseña" placeholder="Ingrese su contraseña">
	        <input type="submit" name="login" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>