<?php 

/*
	Conexão com BD
*/

	$server = "localhost";
	$user = "root";
	$password = "";
	$db_name = "crud";
	$port = "3306";

	$db_connect = mysqli_connect($server,$user,$password,$db_name,$port);
	mysqli_set_charset($db_connect,"utf8");

	/*
	if ($db_connect->connect_error) {
		echo 'Falha: ' . $db_connect->connect_error;
	} else {
		echo "Conexão feita com sucesso";
	}
	*/

 ?>