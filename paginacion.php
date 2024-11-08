<?php

require 'vendor/autoload.php';
/**
 * Libreria a utilizar
 * zebra_pagination
 * composer require stefangabos/zebra_pagination
 */

 $conexion = new mysqli('localhost', 'root', '' , 'cinebd');

 $consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM pelicula");
 $numero_peliculas = $consulta->fetch_object()->total;

//  var_dump($numero_peliculas);
$peliculas_por_pagina = 10;
$pagination = new Zebra_Pagination();
$pagination->records($numero_peliculas);
$pagination->records_per_page($peliculas_por_pagina);

$page = $pagination->get_page();
$desde = ($page - 1) * $peliculas_por_pagina;

$peliculas = $conexion ->query("SELECT * FROM pelicula LIMIT $desde, $peliculas_por_pagina");

// importar los estilos de zebra

echo "<link rel='stylesheet' href='vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css'>";

// mostrar resultados
while ($pelicula = $peliculas->fetch_object())
{
    echo "<h2>{$pelicula->titulo}</h2>";
    echo "<p>{$pelicula->precio}</p>";
}

$pagination->render();