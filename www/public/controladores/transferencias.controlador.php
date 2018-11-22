<?php

class ControladorTransferencias{

	static public function ctrCantLocTransferenciaPend(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "transferencia_pendiente_cabs";
				$tabla2 = "locales_jefezonals";
				$item1  = "dni_jefe_zona";
				$valor1 = $_SESSION["dniUser"];

				$respuesta = ModeloTransferencias::mdlCantLocTransferenciaPend($tabla1, $tabla2, $item1, $valor1);
				return $respuesta['totLocales'];

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "transferencia_pendiente_cabs";
				$tabla2 = "locales_jefezonals";
				$item1  = "1";
				$valor1 = "1";

				$respuesta = ModeloTransferencias::mdlCantLocTransferenciaPend($tabla1, $tabla2, $item1, $valor1);
				return $respuesta['totLocales'];

			}

		}

	}

	static public function ctrTransPendCabecera(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "transferencia_pendiente_cabs";
				$tabla2 = "locales_jefezonals";
				$item1  = "dni_jefe_zona";
				$valor1 = $_SESSION["dniUser"];

				$respuesta = ModeloTransferencias::mdlTransPendCabecera($tabla1, $tabla2, $item1, $valor1);
				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "transferencia_pendiente_cabs";
				$tabla2 = "locales_jefezonals";
				$item1  = "1";
				$valor1 = "1";

				$respuesta = ModeloTransferencias::mdlTransPendCabecera($tabla1, $tabla2, $item1, $valor1);
				return $respuesta;

			}

		}

	}

	static public function ctrTransPendDetalle($varLocal,$numNota){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "transferencia_pendiente_dets";
				$tabla2 = "locales_jefezonals";
				$item1  = "lj.dni_jefe_zona";
				$item2  = "tp.cod_local";
				$item3  = "tp.num_nota_es";
				$valor1 = $_SESSION["dniUser"];
				$valor2 = $varLocal;
				$valor3 = $numNota;

				$respuesta = ModeloTransferencias::mdlTransPendDetalle($tabla1, $tabla2, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "transferencia_pendiente_dets";
				$tabla2 = "locales_jefezonals";
				$item1  = "1";
				$item2  = "tp.cod_local";
				$item3  = "tp.num_nota_es";
				$valor1 = "1";
				$valor2 = $varLocal;
				$valor3 = $numNota;

				$respuesta = ModeloTransferencias::mdlTransPendDetalle($tabla1, $tabla2, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta;

			}

		}

	}

}