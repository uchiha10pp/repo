<?php 

	$dsn = "mysql:host=localhost; dbname=centroidiomas";
	$user = "root";
	$password = "";

	try {
		$conn = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'UTF8'"));

		$sql = 'SELECT nombre as Profesor, idioma, inicio 
				FROM profesor 
				JOIN programacion on profesor.id = programacion.idp
                order by nombre';

		$result = $conn->query($sql);

		//echo "Contador: ".$result->rowCount();

		echo "<table border='1' >
				<tr>
					<th>N°</th>
					<th>DOCENTE</th>
					<th>CURSO</th>
					<th>HORA</th>
				</tr>";

		
		foreach($result->fetchall() as $k=>$profesor)
		{
			echo "<tr> 
					<td>".($k+1)."</td>
					<td>".$profesor["Profesor"]."</td>
					<td>".$profesor["idioma"]."</td>
					<td>".$profesor["inicio"]."</td>
					<td>
						<form method='POST' action='eliminar.php'>
							<input type='hidden' name='id' value='".$profesor["id"]."'/>
							<input type='submit' name='submit' value='Eliminar'/>
						</form>
					</td>
				 </tr>";
		}
	} catch (Exception $e) {
		echo "ERROR".$e->getMessage();
	}

?>