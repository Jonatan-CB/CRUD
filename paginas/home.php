<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php include('../includes/title.php')?></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">	
	<script src="../js/metodos.js"></script>
	<script defer src="../js/all.js"></script>
</head>
<body>
	<?php include('../includes/header.php'); ?>
	<div class="container">
		<div class="row">	
			<a class="btn btn-success" data-toggle="modal" data-target="#nuevoUsu">Nuevo</a><br><br>
			<table class='table'>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Usuario</th>
						<th>Contraseña</th>
						<th>Teléfono</th>
						<th>Correo</th>
						<th>Fecha de Nacimiento</th>
						<th>Sexo</th>
						<th>Foto</th>
						<th><span class="glyphicon glyphicon-wrench"></span></th>
					</tr>
				</thead>
				<tbody>
					<?php
						include('../clases/conexion.php');
	                  	$q="select * from usuarios";
	                  	$resul=mysqli_query($con,$q);
	                    while ($fila=mysqli_fetch_array($resul))
	                    {
						echo "<tr>";
							echo "<td>$fila[0]</td>
								  <td>$fila[1]</td>
								  <td>$fila[2]</td>
								  <td>$fila[3]</td>
								  <td>$fila[4]</td>
								  <td>$fila[5]</td>
								  <td>$fila[6]</td>
								  <td>$fila[7]</td>
								  <td>$fila[8]</td>
								  <td><img src='../imagenes/usuarios/".$fila[9]."' alt='Smiley face' width='50' style='border-radius: 10px;'></td>
								  <td></td>";
							 	  echo "<td>
							  			<a data-toggle='modal' data-target='#editUsu' data-id='".$fila[0]."' data-nombre='".$fila[1]."' data-ape='".$fila[2]."' data-usu='".$fila[3]."' data-pass='".$fila[4]."' data-telf='".$fila[5]."' data-correo='".$fila[6]."' data-fecha='".$fila[7]."' data-sexo='".$fila[8] ."' data-foto='".$fila[9] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a>
							  			<a class='btn btn-danger' href='../includes/eliminar.php?id=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>
										</td>";
						echo "</tr>";
                    	}
                    ?>
				</tbody>
	        </table>
		</div>
		<?php 
			include('../includes/modal/modal_nuevo.php');
			include('../includes/modal/modal_modificar.php');
		?>

	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>		
	<script>			 
		  $('#editUsu').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('nombre')
		  var recipient2 = button.data('ape')
		  var recipient3 = button.data('usu')
		  var recipient4 = button.data('pass')
		  var recipient5 = button.data('telf')
		  var recipient6 = button.data('correo')
		  var recipient7 = button.data('fecha')
		  var recipient8 = button.data('sexo')
		  var recipient9 = button.data('foto')
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #nombre').val(recipient1)
		  modal.find('.modal-body #apellido').val(recipient2)
		  modal.find('.modal-body #usuario').val(recipient3)		 
		  modal.find('.modal-body #pass').val(recipient4)
		  modal.find('.modal-body #telefono').val(recipient5)
		  modal.find('.modal-body #correo').val(recipient6)
		  modal.find('.modal-body #fecha').val(recipient7)
		  modal.find('.modal-body #sexo').val(recipient8)
		  modal.find('.modal-body #foto').val(recipient9)
		});
	</script>
</body>
</html>

<?php
	}
	else
	{
		?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=../index.php">
		 <?php
	}
?>