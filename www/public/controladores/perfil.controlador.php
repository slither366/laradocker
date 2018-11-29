<?php

class ControladorPerfil{

	/*==================================================
	=            Controlador Detalle Perfil            =
	==================================================*/
	
	static public function ctrDetallePerfil(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla 	= "jefezonals";
				$item	= "dni_jefezona";
				$valor = $_SESSION["dniUser"];

				$respuesta = ModeloPerfil::mdlMostrarDatosPerfil($tabla, $item, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla 	= "jefezonals";
				$item	= "dni_jefezona";
				$valor = $_SESSION["dniUser"];
				
				$respuesta = ModeloPerfil::mdlMostrarDatosPerfil($tabla, $item, $valor);

				return $respuesta;

			}

		}

	}
	

}