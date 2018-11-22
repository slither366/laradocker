<?php

class ControladorRemesas{
	 
	static public function ctrCantLocRemesaPendiente($mes,$ano){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "remesa_pendientes";
				$tabla2 = "locales_jefezonals";
				$campo  = "cod_local";
				$item1 	= "cod_local";
				$item2  = "lj.dni_jefe_zona";
				$item3 	= "fecha_creacion_sobre";
				$valor1 = $_SESSION["dniUser"];
				$valor2	= $mes;
				$valor3	= $ano;

				$respuesta = ModeloRemesas::mdlCantidadLocalRemesas($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta['cant_loc'];

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "remesa_pendientes";
				$tabla2 = "locales_jefezonals";
				$campo  = "cod_local";
				$item1 	= "cod_local";
				$item2  = "1";
				$item3 	= "fecha_creacion_sobre";
				$valor1 = "1";
				$valor2	= $mes;
				$valor3	= $ano;
				
				$respuesta = ModeloRemesas::mdlCantidadLocalRemesas($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta['cant_loc'];

			}

		}

	}

	static public function ctrCantLocRemesaTarde($mes,$ano){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){
				
				$tabla1 = "remesa_tardes";
				$tabla2 = "locales_jefezonals";
				$campo  = "cod_local";
				$item1 	= "cod_local";
				$item2  = "lj.dni_jefe_zona";
				$item3 	= "fec_crea_remito";
				$valor1 = $_SESSION["dniUser"];
				$valor2	= $mes;
				$valor3	= $ano;				
				
				$respuesta = ModeloRemesas::mdlCantidadLocalRemesas($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta['cant_loc'];

			}else if($_SESSION["tipoUser"]=='administrador'){
				
				$tabla1 = "remesa_tardes";
				$tabla2 = "locales_jefezonals";
				$campo  = "cod_local";
				$item1 	= "cod_local";
				$item2  = "1";
				$item3 	= "fec_crea_remito";
				$valor1	= "1";
				$valor2	= $mes;
				$valor3	= $ano;						
				
				$respuesta = ModeloRemesas::mdlCantidadLocalRemesas($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta['cant_loc'];

			}

		}

	}

	/*======================================================================
	=            Obtener Todos los años de Remesas Pendientes            =
	======================================================================*/
	static public function ctrCantAnoRemesaPendiente(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "remesa_pendientes";
				$tabla2 = "locales_jefezonals";
				$campo  = "fecha_creacion_sobre";
				$item1 	= "cod_local";
				$item2 	= "lj.dni_jefe_zona";
				$valor 	= $_SESSION["dniUser"];//Cambiar este Dato

				$respuesta = ModeloRemesas::mdlCantidadAnos($tabla1, $tabla2, $campo, $item1, $item2, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "remesa_pendientes";
				$tabla2 = "locales_jefezonals";
				$campo  = "fecha_creacion_sobre";
				$item1 	= "cod_local";
				$item2 	= "1";
				$valor 	= "1";//Cambiar este Dato

				$respuesta = ModeloRemesas::mdlCantidadAnos($tabla1, $tabla2, $campo, $item1, $item2, $valor);

				return $respuesta;

			}

		}

	}

	/*======================================================================
	=            Obtener Todos los años de Remesas Tardes                  =
	======================================================================*/
	//ctrRemesaTardeAno
	static public function ctrCantAnoRemesaTarde(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "remesa_tardes";
				$tabla2 = "locales_jefezonals";
				$campo  = "fec_crea_remito";
				$item1 	= "cod_local";
				$item2 	= "dni_jefe_zona";
				$valor 	= $_SESSION["dniUser"];//Cambiar este Dato

				$respuesta = ModeloRemesas::mdlCantidadAnos($tabla1, $tabla2, $campo, $item1, $item2, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "remesa_tardes";
				$tabla2 = "locales_jefezonals";
				$campo  = "fec_crea_remito";
				$item1 	= "cod_local";
				$item2 	= "1";
				$valor 	= "1";//Cambiar este Dato

				$respuesta = ModeloRemesas::mdlCantidadAnos($tabla1, $tabla2, $campo, $item1, $item2, $valor);

				return $respuesta;

			}

		}

	}	

	/*======================================================================
	=            Obtener Todos los meses de Remesas Pendientes             =
	======================================================================*/
	static public function ctrCantMesRemesaPendiente(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "remesa_pendientes";
				$tabla2 = "locales_jefezonals";
				$campo  = "fecha_creacion_sobre";
				$item1 	= "cod_local";
				$item2 	= "lj.dni_jefe_zona";
				$valor 	= $_SESSION["dniUser"];

				//$tabla1, $tabla2, $field, $item, $valor
				$respuesta = ModeloRemesas::mdlCantidadMeses($tabla1, $tabla2, $campo, $item1, $item2, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "remesa_pendientes";
				$tabla2 = "locales_jefezonals";
				$campo  = "fecha_creacion_sobre";
				$item1 	= "cod_local";
				$item2 	= "1";
				$valor 	= "1";

				//$tabla1, $tabla2, $field, $item, $valor
				$respuesta = ModeloRemesas::mdlCantidadMeses($tabla1, $tabla2, $campo, $item1, $item2, $valor);

				return $respuesta;

			}

		}

	}

	/*===============================================================
	=            Obtener Todos los meses de Remesas Tarde           =
	===============================================================*/
	static public function ctrCantMesRemesaTarde(){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "remesa_tardes";
				$tabla2 = "locales_jefezonals";
				$campo  = "fec_crea_remito";
				$item1 	= "cod_local";
				$item2 	= "dni_jefe_zona";
				$valor 	= $_SESSION["dniUser"];

				//$tabla1, $tabla2, $field, $item, $valor
				$respuesta = ModeloRemesas::mdlCantidadMeses($tabla1, $tabla2, $campo, $item1, $item2, $valor);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "remesa_tardes";
				$tabla2 = "locales_jefezonals";
				$campo  = "fec_crea_remito";
				$item1 	= "cod_local";
				$item2 	= "1";
				$valor 	= "1";

				//$tabla1, $tabla2, $field, $item, $valor
				$respuesta = ModeloRemesas::mdlCantidadMeses($tabla1, $tabla2, $campo, $item1, $item2, $valor);

				return $respuesta;

			}

		}

	}	

	/*=====================================================================
	=            Controlador link a Pagina Remesa Pendiente               =
	=====================================================================*/
	static public function ctrenvioRemesaPendiente(){

		if( isset($_POST["txtModal3Mes"]) and isset($_POST["txtModal3Ano"]) ){

			if($_POST['txtModal3Mes']<>"" and $_POST['txtModal3Ano']<>"")
			{

				$_SESSION['depPendMes'] = $_POST['txtModal3Mes'];
				$_SESSION['depPendAno'] = $_POST['txtModal3Ano'];

				echo '<script>
				window.location = "remesaPendiente";
				</script>';

			}else{
			
			}
		}
	}

	/*=====================================================================
	=            Controlador link a Pagina Remesa Tarde                   =
	=====================================================================*/
	static public function ctrenvioRemesaTarde(){

		if( isset($_POST["txtModal4Mes"]) and isset($_POST["txtModal4Ano"]) ){

			if($_POST['txtModal4Mes']<>"" and $_POST['txtModal4Ano']<>"")
			{

				$_SESSION['depPendMes'] = $_POST['txtModal4Mes'];
				$_SESSION['depPendAno'] = $_POST['txtModal4Ano'];

				echo '<script>
				window.location = "remesaTarde";
				</script>';

			}else{
			
			}
		}
	}

	/*========================================================================
	=            Controlador Obtener Detalle Remesas Pendientes            =
	========================================================================*/
	static public function ctrDetalleRemPend($varMes, $varAno){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "remesa_pendientes";
				$tabla2 = "locales_jefezonals";
				$campo  = "rp.cod_local,rp.fecha_creacion_sobre,rp.fecha_consignada,rp.cant_dias,rp.dias_toca,rp.monto";
				$item1 	= "cod_local";
				$item2  = "dni_jefe_zona";
				$item3 	= "fecha_creacion_sobre";
				$valor1 = $_SESSION["dniUser"];
				$valor2	= $varMes;
				$valor3	= $varAno;

				$respuesta = ModeloRemesas::mdlDetalleRemesa($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "remesa_pendientes";
				$tabla2 = "locales_jefezonals";
				$campo  = "rp.cod_local,rp.fecha_creacion_sobre,rp.fecha_consignada,rp.cant_dias,rp.dias_toca,rp.monto";
				$item1 	= "cod_local";
				$item2  = "1";
				$item3 	= "fec_crea_remito";
				$valor1 = "1";
				$valor2	= $varMes;
				$valor3	= $varAno;	

				$respuesta = ModeloRemesas::mdlDetalleRemesa($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta;

			}

		}

	}

	/*========================================================================
	=            Controlador Obtener Detalle Remesas Tardes            =
	========================================================================*/
	static public function ctrDetalleRemTard($varMes, $varAno){

		if($_SESSION["iniciarSesion"] == "ok"){

			if($_SESSION["tipoUser"]=='jefe_zonal'){

				$tabla1 = "remesa_tardes";
				$tabla2 = "locales_jefezonals";
				$campo  = "rp.cod_local,rp.cod_remito,DATE_FORMAT(rp.fecha_creacion_sobre,'%d/%m/%Y') fecha_creacion_sobre, DATE_FORMAT(rp.fecha_consignada,'%d/%m/%Y') fecha_consignada,DATE_FORMAT(rp.fec_crea_remito,'%d/%m/%Y %k:%i:%s %p') fec_crea_remito,rp.cant_dias,rp.dias_toca,rp.dif_day,rp.monto";
				$item1 	= "cod_local";
				$item2  = "dni_jefe_zona";
				$item3 	= "fec_crea_remito";
				$valor1 = $_SESSION["dniUser"];
				$valor2	= $varMes;
				$valor3	= $varAno;
	
				$respuesta = ModeloRemesas::mdlDetalleRemesa($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta;

			}else if($_SESSION["tipoUser"]=='administrador'){

				$tabla1 = "remesa_tardes";
				$tabla2 = "locales_jefezonals";
				$campo  = "rp.cod_local,rp.cod_remito,DATE_FORMAT(rp.fecha_creacion_sobre,'%d/%m/%Y') fecha_creacion_sobre, DATE_FORMAT(rp.fecha_consignada,'%d/%m/%Y') fecha_consignada,DATE_FORMAT(rp.fec_crea_remito,'%d/%m/%Y %k:%i:%s %p') fec_crea_remito,rp.cant_dias,rp.dias_toca,rp.dif_day,rp.monto";
				$item1 	= "cod_local";
				$item2  = "1";
				$item3 	= "fec_crea_remito";
				$valor1 = "1";
				$valor2	= $varMes;
				$valor3	= $varAno;	

				$respuesta = ModeloRemesas::mdlDetalleRemesa($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3);

				return $respuesta;

			}

		}

	}

}