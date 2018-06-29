<!-- Modal Editar -->
<div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Editar Contacto</h4>
            </div>
            <div class="modal-body">                    
               <form action="../includes/actualizar.php" enctype="multipart/form-data" method="POST">
       		        <input  id="id" name="id" type="hidden" ></input>   		
               		<div class="form-group">
               			<label for="nombre">Nombre:</label>
               			<input class="form-control" id="nombre" name="nombre" type="text" ></input>
               		</div>
               		<div class="form-group">
               			<label for="apellido">Apellidos:</label>
               			<input class="form-control" id="apellido" name="apellido" type="text" ></input>
               		</div>
               		<div class="form-group">
               			<label for="usuario">Usuario:</label>
               			<input class="form-control" id="usuario" name="usuario" type="text" ></input>
               		</div>
               		<div class="form-group">
               			<label for="pass">Contraseña:</label>
               			<input class="form-control" id="pass" name="pass" type="text" ></input>
               		</div>
               		<div class="form-group">
               			<label for="telefono">Teléfono:</label>
               			<input class="form-control" id="telefono" name="telefono" type="text" ></input>
               		</div>
               		<div class="form-group">
               			<label for="correo">Correo:</label>
               			<input class="form-control" id="correo" name="correo" type="email" ></input>
               		</div>
               		<div class="form-group">
               			<label for="fecha">Fecha de Nacimiento:</label>
               			<input class="form-control" id="fecha" name="fecha" type="date" ></input>
               		</div>
               		<div class="form-group">
               			<label for="sexo">Sexo:</label>
               			<label class="radio-inline">
				            <input type="radio" id="sexo" name="sexo" value="M"> Masculino
					          </label>
					          <label class="radio-inline">
					          <input type="radio" id="sexo" name="sexo" value="F"> Femenino
					          </label>
               		</div>
                  <div>
                    <label for="foto">Foto:</label> 
                    <input id="img" name="foto" size="30" type="file">
                  </div>
					        <input type="submit" class="btn btn-success" value="Modificar">							
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>