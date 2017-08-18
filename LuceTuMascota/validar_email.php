<?php


$email = $_POST['email'];

// hacen la conexion a la BDD
// Preguntan si existe el correo o no

if( $email == "duplicado@email.com") {
	echo json_encode(false);
} else {
	echo json_encode(true);
}