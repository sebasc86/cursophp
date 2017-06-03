<?php
require_once 'Model.php';

class Usuario extends Model {
	
	public static $name = 'usuarios';
	
	public static $primaryKey = 'email';

	public $nombre;
	
	public $apellido;
	
	public $email;
	
	public $password;

	public function agregarImagen($imagen)
	{
		# code...
	}

	public function toModel($data)
	{
		$this->setNombre($data['nombre']);
		$this->setApellido($data['apellido']);
		$this->setEmail($data['email']);
		$this->setPassword($data['password']);
	}

	public function toArray()
	{
		$usuarioArray = [];
		$usuarioArray['nombre'] = $this->nombre;
		$usuarioArray['apellido'] = $this->apellido;
		$usuarioArray['email'] = $this->email;
		$usuarioArray['password'] = $this->password;
		return $usuarioArray;
	}

	public function setNombre($valor)
	{
		$this->nombre = $valor;
	}

	public function setApellido($valor)
	{
		$this->apellido = $valor;
	}

	public function setEmail($valor)
	{
		$this->email = $valor;
	}

	public function setPassword($valor)
	{
		$this->password =  password_hash($valor, PASSWORD_DEFAULT);
	}

}