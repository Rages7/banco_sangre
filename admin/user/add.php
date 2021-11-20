<?php

	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{

			// hacer uso de una declaración preparada para evitar la inyección de sql
			$stmt = $db->prepare("INSERT INTO usuarios (id_usuario,id_profesional,usuario,contrasena,id_cargos) VALUES (:id_usuario,:id_profesional,:usuario,:contrasena,:id_cargos)");
			// declaración if-else en la ejecución de nuestra declaración preparada
			$_SESSION['message'] = ( $stmt->execute(array(':id_usuario' => $_POST['id_usuario'],':id_profesional' => $_POST['id_profesional'],':usuario' => $_POST['usuario'],':contrasena' => $_POST['contrasena'],':id_cargos' => $_POST['id_cargos'])) ) ? 'Datos cargados' : 'No se cargo ';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Por favor complete';
	}

	header('location: index.php');
	
?>
