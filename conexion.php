<?php 

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'prueba';

		
	try 
	{
		$conn = new PDO ("mysql:host=$server; dbname=$database", $username, $password);
		
		echo "Conexión Exitosa";
	} 
	catch (PDOException $e)
	{
		echo "Error de Conexión" . $e->getMessage();
	}
?>
