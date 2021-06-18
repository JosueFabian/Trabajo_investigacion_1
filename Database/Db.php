<?php 

class Database{
	/* La implementación del Patrón singleton se esta dando en la clase DB
	Para asegurarnos que la conexión ocurra solo una vez
	la propiedad static instancia permite tener una unica conexión a la base de datos en un instante de tiempo*/
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
		//$this->_connection = new mysqli('localhost','root','','base_zapateria');
		$conn = $this->_connection = new mysqli('localhost','root','','base_zapateria');
		return $conn;
	}
	
}


 ?>