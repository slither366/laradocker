<?php

class ControladorDepositos{
	//ctrDepositoPendiente
	static public function ctrCantLocDepositoPendiente(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				//$campo  = "fecha_mes";
				$item1 	= "dni_jefe_zona";
				$item2  = "fecha_mes";
				$valor1 = $_SESSION["dniUser"];

				$respuesta = ModeloDepositos::mdlDepositoPendiente($tabla1, $tabla2, $item1, $item2, $valor1);

				return $respuesta['cant_loc'];

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				//$campo  = "fecha_mes";
				$item1 	= "1";
				$item2  = "fecha_mes";
				$valor1 = "1";

				$respuesta = ModeloDepositos::mdlDepositoPendiente($tabla1, $tabla2, $item1, $item2, $valor1);

				return $respuesta['cant_loc'];

			}

		}

	}

	static public function ctrCantLocDepositoTarde(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$item1	= "status";
				$item2 	= "dni_jefe_zona";
				$valor1 = $_SESSION["dniUser"];

				$respuesta = ModeloDepositos::mdlCantLocDepoTarde($tabla1, $tabla2, $item1, $item2, $valor1);

				return $respuesta['cant_loc'];

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$item1	= "status";
				$item2 	= "1";
				$valor1 = "1";

				$respuesta = ModeloDepositos::mdlCantLocDepoTarde($tabla1, $tabla2, $item1, $item2, $valor1);

				return $respuesta['cant_loc'];

			}

		}

	}	

	/*======================================================================
	=            Obtener Todos los años de Deposito Pendientes            =
	======================================================================*/
	static public function ctrDepoPendAno(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				$field  = "fecha_mes";
				$item 	= "dni_jefe_zona";
				$valor 	= $_SESSION["dniUser"];//Cambiar este Dato

				$respuesta = ModeloDepositos::mdlDepoTotalAnos($tabla1, $tabla2, $field, $item, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				$field  = "fecha_mes";
				$item 	= "1";
				$valor 	= "1";//Cambiar este Dato

				$respuesta = ModeloDepositos::mdlDepoTotalAnos($tabla1, $tabla2, $field, $item, $valor);

				return $respuesta;


			}

		}

	}

	/*======================================================================
	=            Obtener Todos los años de Deposito Tarde            =
	======================================================================*/
	static public function ctrDepoTardeAno(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$field  = "fecha_cierre_dia";
				$item 	= "dni_jefe_zona";
				$valor 	= $_SESSION["dniUser"];

				$respuesta = ModeloDepositos::mdlDepoTotalAnos($tabla1, $tabla2, $field, $item, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$field  = "fecha_cierre_dia";
				$item 	= "1";
				$valor 	= "1";

				$respuesta = ModeloDepositos::mdlDepoTotalAnos($tabla1, $tabla2, $field, $item, $valor);

				return $respuesta;

			}

		}

	}	

	/*======================================================================
	=            Obtener Todos los meses de Deposito Pendientes            =
	======================================================================*/
	static public function ctrDepoPendMes(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				$field  = "fecha_mes";
				$item 	= "dni_jefe_zona";
				$valor 	= $_SESSION["dniUser"];

				$respuesta = ModeloDepositos::mdlDepoTotalMeses($tabla1, $tabla2, $field, $item, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				$field  = "fecha_mes";
				$item 	= "1";
				$valor 	= "1";

				$respuesta = ModeloDepositos::mdlDepoTotalMeses($tabla1, $tabla2, $field, $item, $valor);

				return $respuesta;
			}

		}

	}

	/*======================================================================
	=            Obtener Todos los meses de Deposito Pendientes            =
	======================================================================*/
	static public function ctrDepoTardeMes(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$field  = "fecha_cierre_dia";
				$item 	= "dni_jefe_zona";
				$valor 	= $_SESSION["dniUser"];

				$respuesta = ModeloDepositos::mdlDepoTotalMeses($tabla1, $tabla2, $field, $item, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$field  = "fecha_cierre_dia";
				$item 	= "1";
				$valor 	= "1";

				$respuesta = ModeloDepositos::mdlDepoTotalMeses($tabla1, $tabla2, $field, $item, $valor);

				return $respuesta;
			}

		}

	}	

	/*=====================================================================
	=            Controlador link a Pagina Depositos Pendiente            =
	=====================================================================*/
	static public function ctrenvioDepositoPend(){

		if( isset($_POST["txtModal1Mes"]) and isset($_POST["txtModal1Ano"])){

			if( $_POST['txtModal1Mes']<>"" and $_POST['txtModal1Ano']<>"" )
			{
			//alert("entro");

				$_SESSION['depPendMes'] = $_POST['txtModal1Mes'];
				$_SESSION['depPendAno'] = $_POST['txtModal1Ano'];

				echo '<script>
	
				window.location = "depositoPendienteDet";

				</script>';

			}else{

			}

		}
	}

	/*=====================================================================
	=            Controlador link a Pagina Depositos Tardes               =
	=====================================================================*/
	static public function ctrenvioDepositoTarde(){

		if( isset($_POST["txtModal2Mes"]) and isset($_POST["txtModal2Semaforo"]) and isset($_POST["txtModal2Mes"]) ){

			if($_POST['txtModal2Mes']<>"" and $_POST['txtModal2Ano']<>"" and $_POST['txtModal2Semaforo']<>"")
			{

				$_SESSION['depPendMes'] = $_POST['txtModal2Mes'];
				$_SESSION['depPendAno'] = $_POST['txtModal2Ano'];
				$_SESSION['depPendSem'] = $_POST['txtModal2Semaforo'];

				echo '<script>
	
				window.location = "depositoTardeDet";

				</script>';

			}else{
			
			}
		}
	}

	/*========================================================================
	=            Controlador Obtener Detalle Depositos Pendientes            =
	========================================================================*/
	static public function ctrDetalleDepoPend($varMes, $varAno){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				$item1 	= "dni_jefe_zona";
				$item2  = "fecha_mes";
				$valor1	= $_SESSION["dniUser"];//
				$valor2 = $varMes;//$varMes;
				$valor3 = $varAno;//$varAno;

				$respuesta = ModeloDepositos::mdlDetalleDepoPend($tabla1, $tabla2, $item1, $item2, $valor1, $valor2, $valor3);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				$item1 	= "1";
				$item2  = "fecha_mes";
				$valor1	= "1";//
				$valor2 = $varMes;//$varMes;
				$valor3 = $varAno;//$varAno;

				$respuesta = ModeloDepositos::mdlDetalleDepoPend($tabla1, $tabla2, $item1, $item2, $valor1, $valor2, $valor3);

				return $respuesta;

			}

		}

	}

	/*========================================================================
	=            Controlador Obtener Detalle Depositos Tarde                 =
	========================================================================*/
	static public function ctrDetalleDepoTarde($varMes, $varAno, $varSemaforo){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$item1 	= "dni_jefe_zona";
				$item2  = "fecha_cierre_dia";
				$valor1	= $_SESSION["dniUser"];//
				$valor2 = $varMes;
				$valor3 = $varAno;

				if($varSemaforo=='todos'){

					$item3	= "1";
					$valor4 = "1";

				}else{

					$item3	= "status";
					$valor4 = $varSemaforo;	

				}
				

				/*----------  Cuando el Semaforo es Todos  ----------*/
				if($varSemaforo == ' '){

					$item3	= "1";
					$valor4 = "1";

				}

				$respuesta = ModeloDepositos::mdlDetalleDepoTarde($tabla1, $tabla2, $item1, $item2, $item3, $valor1, $valor2, $valor3, $valor4);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$item1 	= "1";
				$item2  = "fecha_cierre_dia";
				$valor1	= "1";//
				$valor2 = $varMes;
				$valor3 = $varAno;

				if($varSemaforo=='todos'){

					$item3	= "1";
					$valor4 = "1";	

				}else{

					$item3	= "status";
					$valor4 = $varSemaforo;	

				}

				$respuesta = ModeloDepositos::mdlDetalleDepoTarde($tabla1, $tabla2, $item1, $item2, $item3, $valor1, $valor2, $valor3, $valor4);

				return $respuesta;

			}

		}

	}

	/*============================================================================================
	=            Controlador Cantidad de Locales Filtrado(Mes,Año) Deposito Pendiente            =
	=============================================================================================*/
	static public function ctrCantlocDetDepPend($varMes){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				$field  = "cod_local";
				$item1 	= "dni_jefe_zona";
				$item2 	= "fecha_mes";
				$valor1 = $_SESSION["dniUser"];
				$valor2 = $varMes;
				$valor3 = "2018";//$varAno;

				$respuesta = ModeloDepositos::mdlCantLocDetDepPend($tabla1, $tabla2, $field, $item1, $item2, $valor1, $valor2, $valor3);

				return $respuesta['totLocales'];

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_pendientes";
				$tabla2 = "locales_jefezonals";
				$field  = "cod_local";
				$item1 	= "1";
				$item2 	= "fecha_mes";
				$valor1 = "1";
				$valor2 = $varMes;
				$valor3 = "2018";//$varAno;

				$respuesta = ModeloDepositos::mdlCantLocDetDepPend($tabla1, $tabla2, $field, $item1, $item2, $valor1, $valor2, $valor3);

				return $respuesta['totLocales'];

			}

		}

	}	

	/*==================================================================================
	=            Controlador Total Locales Filtrado(Mes,Año) Deposito Tarde            =
	====================================================================================*/
	static public function ctrCantlocDetDepTarde($varMes){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$field  = "cod_local";
				$item1 	= "dni_jefe_zona";
				$item2 	= "status";
				$item3 	= "fecha_cierre_dia";
				$valor1 = $_SESSION["dniUser"];
				$valor2 = "0";
				$valor3 = $varMes;
				$valor4 = "2018";

				$respuesta = ModeloDepositos::mdlCantLocDepositoTarde($tabla1, $tabla2, $field, $item1, $item2, $item3, $valor1, $valor2, $valor3, $valor4);

				return $respuesta['totLocales'];

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "deposito_tardes";
				$tabla2 = "locales_jefezonals";
				$field  = "cod_local";
				$item1 	= "1";
				$item2 	= "status";
				$item3 	= "fecha_cierre_dia";
				$valor1 = "1";
				$valor2 = "0";
				$valor3 = $varMes;
				$valor4 = "2018";

				$respuesta = ModeloDepositos::mdlCantLocDepositoTarde($tabla1, $tabla2, $field, $item1, $item2, $item3, $valor1, $valor2, $valor3, $valor4);

				return $respuesta['totLocales'];

			}

		}

	}		

}
