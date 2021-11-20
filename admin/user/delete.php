<?php

	session_start();
	include_once('connection.php');

	if(isset($_GET['id_usuario'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM usuarios WHERE id_usuario = '".$_GET['id_usuario']."'";
			// declaración if-else en la ejecución de nuestra consulta
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Usuario Borrado Existosamente' : 'Ocurrió un error. No se pudo eliminar al Usuario';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccione Usuario para eliminar';
	}

	header('location: index.php');

?>