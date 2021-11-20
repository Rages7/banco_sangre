<!-- Agregar Nuevo -->
<div class="modal fade" id="addnews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<center><h4 class="modal-title" id="myModalLabel">Agregar Paciente</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="adds.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Profesional:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_profesional">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Usuario:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="usuario">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Contraseña:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contraseña">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">id_cargo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_cargo">
						<label class="control-label">1- Administador 2- Doctor 3- Recepcionista</label>
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
