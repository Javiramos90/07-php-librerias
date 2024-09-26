<?php

/**
 * Libreria que nos permite depurar codigo de 
 * composer require tracy/tracy
 */
require_once 'vendor/autoload.php';

use Tracy\Debugger;
Debugger::enable();

$frutas = ['Naranja', 'Fresas', 'Melocotones'];

Debugger::barDump($frutas, 'Frutas');

echo'<h1>Debugeando con Tracy</h1>';

try {
    throw new Exception('Error gordo');
}catch (Exception $e) {
    Debugger::log($e);
}