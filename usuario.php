<?php

	class usuario
	{
		private $id;
		private $Nombre;
		private $Usuario;
		private $email;
		private $clave;
		private $Fecha_registro;
	}

	
		function getId()
		{
			return $this->id;
		}

		function setId($id)
		{
			$this->id = $id;
		}

		function getNombre()
		{
			return $this->Nombre;
		}

		function setNombre($Nombre)
		{
			$this->Nombre = $Nombre;
		}

		function getUsuario()
		{
			return $this->Usuario;
		}

		function setUsuario($Usuario)
		{
			$this->Usuario = $Usuario;
		}

		function getEmail()
		{
			return $this->email;
		}

		function setEmail($email)
		{
			$this->email = $email;
		}

		function getClave()
		{
			return $this->clave;
		}

		function setClave($clave)
		{
			$this->clave = $clave;
		}

		function getFecha_registro()
		{
			return $this->Fecha_registro;
		}

		function setFecha_registro($Fecha_registro)
		{
			$this->Fecha_registro = $Fecha_registro;
		}
?>