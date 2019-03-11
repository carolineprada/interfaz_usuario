<?php 

	session_start();

	if (isset($_POST['email']) and isset($_POST['password'])) 
	{
		include('conexion.php');
		$emailusuario=mysqli_real_escape_string(mysqli $conn ,$_POST['email']);
		$password=mysqli_real_escape_string(($conn), $_POST['password']);
		$comprobacion_del_nombre= 'SELECT * FROM usuario WHERE email= "' .$emailusuario. '"';
		$comprobacion= $conn->query ($comprobacion_del_nombre);

		if ($comprobacion->num_rows>0) 
		{
			$consulta_a_la_base =mysqli_query(($conn), 'SELECT password FROM usuario WHERE email= " ' .$emailusuario. ' " ');
			$recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
			$comprobacion_password= password_verify($password, $pass['password']);
			if ($comprobacion_password)
			{
				$_SESSION['email']=$emailusuario;
			}
			else
			{
				print 'Los datos han sido incorrectos <br>
				<a href="./"> Volver </a>';
			}
		}
		else
		{
			print 'No se ha encontrado datos <br>
				<a href="./"> volver </a> ';
		}
	}
	else
	{
		header('Location: ./');

	}

 ?>