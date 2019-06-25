<?php
// registro de usuario
// listado de inscritos


$mysqli = new mysqli('localhost', 'root', 'abc123.', 'prueba2');

if ($mysqli->mysqliect_errno) {
    echo json_encode(['respuesta'=>"La conexión ha fallado"]);  
}else{
	
	$sql = "SELECT  u.id,u.nombre, u.apellido FROM usuarios as u";
			
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row[] = $result->fetch_assoc()) {
	      
	    }


	    echo json_encode($row);
	} else {
	    echo json_encode([]);
	}

	$mysqli->close();




}