<?php
// registro de usuario
//nos va a traer los amigos


$mysqli = new mysqli('localhost', 'root', 'abc123.', 'prueba2');

if ($mysqli->mysqliect_errno) {
    echo json_encode(['respuesta'=>"La conexión ha fallado"]);  
}else{
	
	$sql = "SELECT  u.id,u.nombre, u.apellido FROM usuarios as u";
	 //ejecutamos consulta
	$result = $mysqli->query($sql);
	//validamos que existan resultados
	if ($result->num_rows > 0) {
	    // output data of each row
	    $fila=[];
	    $i=0;
	   
	    while($rr = $result->fetch_assoc()) {

	    	if($rr!=null){
	    			$fila[$i]=$rr;

	    			//contruimos sentencia
	    			$sql2="SELECT u.id, CONCAT(u.nombre,' ',u.apellido) as nombres FROM amigos as a INNER JOIN usuarios as u 
	    			ON u.id = a.id_amigo WHERE a.id_usuario = ".$rr["id"];
	    			//ejecutamos consulta
	    			$consulta = $mysqli->query($sql2);
	    			//validamos que existan resultados
	    			if ($consulta->num_rows > 0) {
	    				$a=0;
	    				//recorremos resultado
	    				while($q = $consulta->fetch_assoc()) {
	    					//agregamos resultados se aumenta indice $a para evitar sobreescribir las respuestas
	    					$fila[$i]['amigos'][$a]=$q;
	    					$a++;
	    				}


	    			
	    			}	
	    		$i++;	
	    	}
	      	
	    }

	    echo json_encode($fila);
	} else {
	    echo json_encode([]);
	}

	$mysqli->close();




}