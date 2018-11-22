<?php

require_once("conexion.php");

class ModeloTransferencias{

	/*=================================================================
	=            Total Locales con Transferencia Pendiente            =
	=================================================================*/
	static public function mdlCantLocTransferenciaPend($tabla1, $tabla2, $item1, $valor1){

		$stmt = Conexion::conectar()->prepare(
					"SELECT count(distinct tp.num_nota_es) totLocales
					   FROM $tabla1 tp, $tabla2 lj
					  WHERE tp.cod_local = lj.cod_local
						AND $item1 = $valor1;
					");

		$stmt -> execute();
        
		return $stmt->fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*===================================================================
	=            Modelo Cabecera de Transferencias Pendiente            =
	===================================================================*/
	static public function mdlTransPendCabecera($tabla1, $tabla2, $item1, $valor1){

		$stmt = Conexion::conectar()->prepare(
					"SELECT tp.cod_origen_nota_es, tp.cod_destino_nota_es, tp.fec_crea_nota_es_cab, tp.num_nota_es
					   FROM $tabla1 tp, $tabla2 lj
					  WHERE tp.cod_local = lj.cod_local 
					    AND $item1 = $valor1
					");

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}

	/*===================================================================
	=            Modelo Detalle de Transferencias Pendientes            =
	===================================================================*/
	static public function mdlTransPendDetalle($tabla1, $tabla2, $item1, $item2, $item3, $valor1, $valor2, $valor3){

		$stmt = Conexion::conectar()->prepare(
					"SELECT tp.sec_det_nota_es,tp.cod_local,tp.num_nota_es,tp.cod_prod,tp.cant_mov
					   FROM $tabla1 tp, $tabla2 lj
					  WHERE tp.cod_local = lj.cod_local
					    AND $item1 = $valor1
					    AND $item2 like '%$valor2%'
					    AND $item3 = $valor3;
					"
				);

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}


}