<?php
	require('conexion.php');
	
	$nombre = $_POST["nombre"];
	$apellidos = $_POST ["apellidos"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$interes = $_POST["interes"];
	$comentario = $_POST["comentario"];


	
	$sentencia = "INSERT INTO usuario (nombre,apellidos,email,telefono,interes,comentario) VALUES
					('$nombre','$apellidos','$email','$telefono','$interes','$comentario')";
	if (mysqli_query($conexion,$sentencia)){
        echo "<td> <a href='prueba.php'><button type='button' class='btn btn-info btn-sm'>conexion exitosa</button></a> </td>";
	}else{
		echo "Error: " . mysqli_error($conexion);
	}
?>