<?php

	session_start();
	include_once('connection.php');

	if(isset($_GET['id_profesional'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM profesional WHERE id_profesional = '".$_GET['id_profesional'];
			// declaración if-else en la ejecución de nuestra consulta
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Eliminado' : 'Ocurrió un error. No se pudo eliminar ';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccione usuario para eliminar';
	}

	header('location: index.php');

?>