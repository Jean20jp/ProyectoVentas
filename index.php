<?php

require_once "controlador/plantilla.controlador.php";
require_once "controlador/administrador.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/categoria.controlador.php";

require_once "modelos/administrador.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/categoria.modelo.php";
require_once "modelos/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();

?>
