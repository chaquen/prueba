<?php
// registro de usuario



$mysqli = new mysqli('localhost', 'root', 'abc123.', 'prueba2');

if ($mysqli->mysqliect_errno) {
    echo json_encode(['respuesta'=>"La conexión ha fallado"]);  
}else{
	
	if(isset($_POST['nombre']) && isset($_POST['apellido']) ){
	    
		$nombre=$_POST['nombre'];
	    $apellido=$_POST['apellido'];


		$sql = "INSERT INTO usuarios (nombre, apellido)
					VALUES ('$nombre', '$apellido')";


		if ($mysqli->query($sql) === TRUE) {


			if(isset($_POST['amigos'])){
				//obtener el id del usuario registrado
				$id=$mysqli->insert_id;
				$desde=date("Y-m-d");
				
				foreach ($_POST['amigos'] as $key => $value) {

					$sql = "INSERT INTO amigos (id_amigo, id_usuario,amisgos_desde)
						VALUES ('$value', '$id','$desde'),('$id', '$value','$desde')";

					if ($mysqli->query($sql) === FALSE) {
						break;
					}	
				}
			}			


			echo json_encode(['respuesta'=>"Usuario creado"]);
		  
		} else {
		    echo json_encode(['respuesta'=>"ERROR:". $sql."=>" . $mysqli->error]);
		}

		$mysqli->close();

	}else{
		echo json_encode(['respuesta'=>"debes ingresar todos los datos"]);
	}




}
