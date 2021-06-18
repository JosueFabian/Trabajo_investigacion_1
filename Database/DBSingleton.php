<?php 

class Datanase{
	private $_connection;

	private static $_instancia;

	public static function getInstancia()
	{
		if (!isset(self::$_instancia)) {
			self::$_instancia = new self;
		}
		return self::$_instancia;
	}

	public function __construct()
	{
		$this->_connection = new mysqli('localhost','root','','base_zapateria');
		$conn = $_connection;
		return $conn
	}
}
	
 ?>
 