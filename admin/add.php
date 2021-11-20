<?php

	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{

			// hacer uso de una declaración preparada para evitar la inyección de sql
			$stmt = $db->prepare("INSERT INTO profesional (tio_profecional,nombres,apellidos,dni,email,cp,telefono,celular,turno,fecha_nto) VALUES (:tio_profecional,:nombre,:apellido,:dni,:email,:cp,:telefono,:celular,:turno,:fecha_nto)");
			// declaración if-else en la ejecución de nuestra declaración preparada
			$_SESSION['message'] = ( $stmt->execute(array(':tio_profecional' => $_POST['tio_profecional'],':nombre' => $_POST['nombre'],':apellido' => $_POST['apellido'],':dni' => $_POST['dni']
														,':email' => $_POST['email'],':cp' => $_POST['cp'],':telefono' => $_POST['telefono'],':celular' => $_POST['celular'],':turno' => $_POST['turno']
														,':fecha_nto' => $_POST['fecha_nto'])) ) ? 'Datos cargados' : 'No se cargo ';	
	    
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
