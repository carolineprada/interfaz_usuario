<?php

	include 'usuariodao.php';

	class usuariocon
	{
		public static function login($usuario, $clave)
		{
			$obj_usuario = new usuario();
			$obj_usuario->setUsuario($usuario);
			$obj_usuario->setclave($clave);

			return usuariodao::login($obj_usuario);
		}
	}

?>