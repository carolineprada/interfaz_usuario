<?php

	include "conexion.php";
	include "usuario.php";

	class usuariodao extends Conexion
	{
		protected static $cn;

		private static function getConexion()
		{
			self::$cn = Conexion::conectar();
		}

		private static function desconectar()
		{
			self::$cn = null;
		}


		/**
			*Método que sirve para calidar el Login
		**/

		public static function login($usuario)
		{
			$query = "SELECT id, Nombre, Usuario, email, Fecha_registro FROM usuario WHERE Usuario = :usuario AND clave = :clave";

			self::getConexion();
			
			$resultado = self::$cn->prepare($query);
			$resultado->bindValue(":usuario", $usuario->getUsuario());
			$resultado->bindValue(":clave", $usuario->getclave());

			
			$resultado->excecute();

			if ($resultado->rowCount()> 0) 	
			{
				return "ok";
			}
			else 
			{ 
				return "falso";
			}
		}

	}


?>