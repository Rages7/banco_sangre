<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Recepcionista</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">
</head>


<body>
<div class="container">
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

	  	<div class="collapse navbar-collapse" id="navbarColor02">
		    <ul class="navbar-nav mr-auto">
		      	
		      	
		    </ul>

		   
	  	</div>
	</nav>
	<h1 class="page-header text-center">Usuarios</h1>
	<div class="row">
		<div class="col-sm-12">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo Usuario </a>
			<a href="../index.php" class="btn btn-primary" ><span class="fa fa-arrow-left"></span> Volver </a>
		
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>N° usuario</th>
					<th>N° profesional</th>
					<th>Usuario</th>
					<th>Contraseña</th>
					<th>Accion</th>
					
				</thead>
				<tbody>
					<?php
						// incluye la conexión
						include_once('connection.php');

						$database = new Connection();
    					$db = $database->open();
						
						
						
						
						try{
							$where = " ";
	
							if(!empty($_POST))
							{
								$valor = $_POST['campo'];
								if(!empty($valor)){
									$where = "WHERE dni LIKE '%$valor'";
								}
							}
							$sql = "SELECT * FROM usuarios inner join cargo on  cargo.id_cargos = usuarios.id_cargos  left join profesional on usuarios.id_profesional = profesional.id_profesional $where";
						
							
							 
						 
						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<td>
									<?php echo $row['id_usuario']; ?></td>
									<td><?php echo $row['id_profesional']; ?></td>
						    		<td><?php echo $row['usuario']; ?></td>
						    		<td><?php echo $row['contrasena']; ?></td>
									<td><?php echo $row['descripcion']; ?></td>
									
						    		<td>
						    			<a href="#edit_<?php echo $row['id_usuario']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> ver</a>
						    			<a href="#delete_<?php echo $row['id_cargos']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a>
						    		</td>
									
						    		<?php include('edit_delete_modal.php'); ?>
						    	</tr>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						//cerrar conexión
						$database->close();

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('add_modal.php'); ?>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/custom.js"></script>
</body>
</html>
