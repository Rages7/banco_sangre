<!-- Editar -->
<div class="modal fade" id="edit_<?php echo $row['id_profesional']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	 <center><h4 class="modal-title" id="myModalLabel">Editar Paciente</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php?id_profesional=<?php echo $row['id_profesional']; ?>">

			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cargo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tio_profecional" value="<?php echo $row['tio_profecional']; ?>">
						<select name="tio_profecional" class="form-control">
						<option selected>Seleccion</option>
						<option value="Administrador">Administrador</option>
						<option value="Doctor">Doctor</option>
						<option value="Recepcionista">Recepcionista</option>
						</select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombres" value="<?php echo $row['nombres']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
					</div>
				</div>

	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dni</label>
					</div>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="dni" value="<?php echo $row['dni']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dirección:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cp" value="<?php echo $row['cp']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fecha</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="fecha_nto"  min="2020-01-01" max="2030-12-31" value="<?php echo $row['fecha_nto']; ?>">
					</div>
				</div>

			

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Telefono</label>
					</div>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Celular</label>
					</div>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="celular" value="<?php echo $row['celular']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Turno</label>
					</div>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="turno" value="<?php echo $row['turno']; ?>">
					<select name="turno" class="form-control">
						<option selected>Seleccion</option>
						<option value="8hs - 12hs">8hs - 12hs</option>
						<option value="13hs - 17hs">13hs - 17hs</option>
						<option value="17hs - 20hs">17hs - 20hs</option>
						</select>
					</div>
				</div>


				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</a>
			</form>
            </div>


			
        </div>
    </div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $row['id_profesional']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Borrar datos</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estas seguro en borrar los datos de?</p>
				<h2 class="text-center"><?php echo $row['nombres'].' '.$row['apellidos']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="delete.php?id_profesional=<?php echo $row['id_profesional']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
            </div>

        </div>
    </div>
</div>
