<?php

if($_POST) {
    // Procesamos los datos y los guardamos en la BDD
    $password = $_POST['clave'];
    $password2 = $_POST['repetirclave'];
    $respuesta = [
        'error' => false,
        'mensaje' => ''
    ];

    if ($password === $password2) {
        $respuesta['error'] = false;
        $respuesta['mensaje'] = 'Usuario registrado con éxito.';
    } else {
        $respuesta['error'] = true;
        $respuesta['mensaje'] = 'Las contraseñas no coiciden.';
    }



    // Devolvemos una respuesta al cliente, codificado en json.
    echo json_encode($respuesta);
}