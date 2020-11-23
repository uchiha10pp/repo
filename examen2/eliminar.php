<?php 

	if(isset($_POST["submit"]))
	{
		$id = $_POST["id"];

		$dsn = "mysql:host=localhost; dbname=pract";
		$user = "root";
		$password = "";

		try {
			$conn = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'UTF8'"));

			$sql = "DELETE programacion.* FROM programacion 
					JOIN profesor ON profesor.id = programacion.idp
					WHERE profesor.idp=$id";

			$filasaf = $conn->exec($sql);

			/*var_dump($filasaf);

			echo "$filasaf";
			if ($filasaf != 0) 
			{
				echo "esudiante eliminado";
			}else{
				echo "esudiante NO eliminado";
			}*/

			} catch (Exception $e) {
			echo "ERROR".$e->getMessage();
		}
	}

	header("Location:mostrar.php");
 ?>
 ?>