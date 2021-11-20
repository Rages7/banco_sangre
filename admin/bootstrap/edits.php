<?php

	session_start();
	include_once('../connection.php');

	if(isset($_POST['edits'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id_profesional = $_POST['id_profesional'];
			$nombres = $_POST['nombres'];
			

			

			$sql = "UPDATE profesional SET nombres = '$nombres' WHERE id_profesional = '$id_profesional'";
			
			// declaración if-else en la ejecución de nuestra consulta
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Los datos se actualizaron' : 'Ocurrio un error. No se pudo actualizar';

			

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión 
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Primero debe llenar el form';
	}

	header('location: index.php');

?>