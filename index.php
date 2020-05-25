<?php 

require_once "controladores/plantilla.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/ventas.controlador.php";


require_once "Modelos/categorias.modelo.php";
require_once "Modelos/clientes.modelo.php";
require_once "Modelos/productos.modelo.php";
require_once "Modelos/usuarios.modelo.php";
require_once "Modelos/ventas.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();

