<?php

/* 
* Mensajes
* Description: Mensajes de aviso del formulario de contacto.
* Version: 1.0
* Author: 2021 - Pablo Garay
* https://github.com/PabloGarayOk/Formulario-de-contacto.git
*/

	$estados = $_GET['estados'];

	switch ($estados) {
    case "A":
      echo "<h2>¡Su mensaje se ha enviado con &eacute;xito!</h2>";
      break;
    case "B":
      echo "<h2>¡Ups! ha ocurrido un error, por favor intente nuevamente.</h2>";
      break;
    case "C":
      echo "<h2>Email inv&aacute;lido, por favor reviselo e intente nuevamente.</h2>";
      break;
    default:
      echo "<h2>Contacto</h2>";
  }

?>