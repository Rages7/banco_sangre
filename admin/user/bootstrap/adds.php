<?php

	session_start();
	include_once('../connection.php');

	if(isset($_POST['adds'])){
		$database = new Connection();
		$db = $database->open();
		try{
			// hacer uso de una declaración preparada para evitar la inyección de sql
			$stmt = $db->prepare("INSERT INTO usuarios (id_profesional,usuario,contraseña,id_cargo) VALUES (:id_profesional,:usuario,:contraseña,:id_cargo)");
			// declaración if-else en la ejecución de nuestra declaración preparada
			$_SESSION['message'] = ( $stmt->execute(array(':id_profesional' => $_POST['id_profesional'],':usuario' => $_POST['usuario'],':contraseña' => $_POST['contraseña'],':id_cargo' => $_POST['id_cargo'])) ) ? 'Datos cargados' : 'No se cargo ';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();
	}

	else{
		$_SESSION['message'] = 'No se cargo';
	}

	header('location: index.php');
	
?>
