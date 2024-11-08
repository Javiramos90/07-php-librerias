<?php
require 'vendor/autoload.php';


use Intervention\Image\ImageManager;

// create image manager with desired driver
$manager = new ImageManager(
    new Intervention\Image\Drivers\Gd\Driver()
);

// open an image file
$image = $manager->read('imagen/paisaje-ESDLA.jpg');

$imagen_original = 'imagenes/imagen.jpg';
$imagen_resultado = 'imagenes/imagen.jpg';

// resize image instance
$image->resize(height: 300);

// // insert a watermark
// $image->place('images/watermark.png');

// encode edited image
$encoded = $image->toJpg();

// save encoded image
$encoded->save('imagen/paisaje-ESDLA.jpg');