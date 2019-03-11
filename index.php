<?php 

	session_start();
 ?>

 	<form action= "validar.php" method="post" enctype="application/x-www-form-urlencoded">
	 	<center>
	 	<label for="Caja1"> <p> E-mail </p>
	 		<p> <input type="text" id="Caja1" name="email" placeholder="Usuario" required> </p>
	 	</label>
	 	<label for="Caja2"> <p> Contraseña </p>
	 		<p> <input type="password" id="Caja2" name="password" placeholder="Contraseña" required> </p>
	 	</label>
	 	<input type="submit" value="Ingresar">
