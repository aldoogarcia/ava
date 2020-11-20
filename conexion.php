<?php
	$conexion = new mysqli("162.241.60.169","avaongco_formu","fj8SW^lPUf8I","avaongco_form",);
	if(mysqli_connect_errno()){
		echo 'Conexion fallida: ', mysqli_connect_error();
		exit();
	}else{
		echo 'Conexion exitosa..';
	}
?>