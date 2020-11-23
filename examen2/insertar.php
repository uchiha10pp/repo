<?php 

	if(isset($_POST["submit"]))
	{
		//$codigo = $_POST["codigo"];
		$nombre = strtoupper($_POST["nombre"]);
		
		$inicio = $_POST["inicio"];		
		
	

		$dsn = "mysql:host=localhost; dbname=centroidiomas";
		$user = "root";
		$password = "";

		try {
			$conn = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'UTF8'"));

			$sql = "INSERT INTO alumnos(codalu, nomalu, apealu, diralu, emailalu, sexoalu, celualu)
					VALUES('$codigo', '$nombre', '$apellido', '$direccion', '$correo', '$sexo', '$telefono')";

			$filasaf = $conn->exec($sql);
			echo "$filasaf";

			} catch (Exception $e) {
			echo "ERROR".$e->getMessage();
		}
	}
 ?>