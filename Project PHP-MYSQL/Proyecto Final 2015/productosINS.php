<?php
    // CAPTURAR DATOS DEL FORMULARIO PRODUCTOS
     
    $id             = $_POST["ID"];
    $descripcion    = $_POST["DES"];
    $origen         = $_POST["ORI"];
    $precio         = $_POST["PRE"];
    $categoria      = $_POST["CAT"];
	$datos = $id . "," . $descripcion;
	$file= "file.csv";

	FILE_PUT_CONTENTS ($file, $datos  . PHP_EOL , FILE_APPEND);


	echo "<p> Gracias por el mail, bro <p>";
	
	
	

?>