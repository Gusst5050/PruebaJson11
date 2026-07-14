<?php

require_once __DIR__ . "/../libservidorphp/recibeJson.php";
require_once __DIR__ . "/../libservidorphp/devuelveJson.php";

$json = recibeJson();
$saludo = $json->saludo : "hola soy gus";
$nombre = $json->nombre : "Gustavo";
$resultado = "{$saludo} {$nombre}.";
devuelveJson($resultado);
