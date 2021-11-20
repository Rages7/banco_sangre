<?php

	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id_profesional = $_GET['id_profesional'];
			$tio_profecional = $_POST['tio_profecional'];
			$nombres = $_POST['nombres'];
			$apellidos = $_POST['apellidos'];
			$fecha_nto = $_POST['fecha_nto'];
			$dni = $_POST['dni'];
			$cp = $_POST['cp'];
			$telefono = $_POST['telefono'];
			$celular = $_POST['celular'];
			$turno = $_POST['turno'];
			$email = $_POST['email'];
		

			$sql = "UPDATE profesional SET tio_profecional = '$tio_profecional',nombres = '$nombres', apellidos = '$apellidos',fecha_nto = '$fecha_nto',dni = '$dni',
			cp = '$cp', telefono = '$telefono', celular = '$celular', turno = '$turno', email = '$email'WHERE id_profesional= '$id_profesional'";
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