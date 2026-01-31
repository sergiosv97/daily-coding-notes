<?php

class ConexionBD{

	static public function cBD(){ //aca decia public function, solucione poniendo static para que me
		//funcione la funcion cBd en adminM

		$bd = new PDO("mysql:host=localhost;dbname=crud", "unity", "1234");


		return $bd;
	}

} 
 ?>

