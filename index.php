<?php

/**
 * Intalar Composer
 * Descargar desde Composer setup.exe e instalarlo
 * Comprobar la instalacion en cmd > composer -v
 */

 /**
  * Buscar librerias o paquetes de php
  * http://packagist.org
  */

  /**
   * Instalar libreria para generar pdf
   * htm12pdf
   * ultima version estable ^5.2.8
   * Forzar a instalar una version > composer 
   */

   require 'vendor/autoload.php';

   use Spipu\Html2Pdf\Html2Pdf;

   $html2pdf = new Html2Pdf();

   $html = "<h1>Hola desde pdf</h1>";
   $html .="<p>Soy un pdf generado desde php</p>";

   $html2pdf ->writeHTML($html);

   $html2pdf ->output('pdf_creado.pdf');
