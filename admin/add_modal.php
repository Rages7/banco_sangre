<!-- Agregar Nuevo -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Agregar Empleado</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
                
				
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cargo:</label>
					</div>
					<div class="col-sm-10">
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
						<input type="text" class="form-control" name="nombre">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellido">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dni:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dni">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Codigo postal:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cp">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Telefono:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telefono">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Celular:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="celular">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Turno:</label>
					</div>
					<div class="col-sm-10">
						<select name="turno" class="form-control">
						<option selected>Seleccion</option>
						<option value="8hs - 12hs">8hs - 12hs</option>
						<option value="13hs - 17hs">13hs - 17hs</option>
						<option value="17hs - 20hs">17hs - 20hs</option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fecha:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="fecha_nto" value="2021-7-28" min="2020-01-01" max="2030-12-31">
					</div>
				</div>

			
				


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</a>
			</form>
            </div>

        </div>
    </div>
</div>
