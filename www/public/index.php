<?php  

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/depositos.controlador.php";
require_once "controladores/transferencias.controlador.php";
require_once "controladores/remesas.controlador.php";
require_once "controladores/perfil.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/depositos.modelo.php";
require_once "modelos/transferencias.modelo.php";
require_once "modelos/remesas.modelo.php";
require_once "modelos/perfil.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();