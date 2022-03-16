<?php
# va a contener el archivo index principal

require __DIR__ . '/../vendor/autoload.php'; //creamos acceso a una ruta absoluta

// var_dump(__DIR__ . '/../vendor/autoload.php');

$request = new App\Http\Request; // se crea una solicitud
$request->send();