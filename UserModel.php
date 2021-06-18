<?php 

class User extends Database{
	public function getUser($username, $password){
		$sql = "SELECT * FROM login WHERE Usuario LIKE '$username' AND Contraseña LIKE '$password'";

		$result = $this->__construct()->query($sql);

		$numRows = $result->num_rows;
		if ($numRows == 1) {
			return true;
		}else{
			return false;
		}
	}
} 
?>