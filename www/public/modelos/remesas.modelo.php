<?php

require_once("conexion.php");

class ModeloRemesas{

	/*================================================
	= Modelo para Cantidad Locales de Remesas     =
	================================================*/
	static public function mdlCantidadLocalRemesas($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3){

		$stmt = Conexion::conectar()->prepare(
				"SELECT count(distinct(rp.".$campo.")) cant_loc
				 FROM $tabla1 rp, $tabla2 lj
				 WHERE rp.".$item1." = lj.".$item1."
				 AND ".$item2." = $valor1
				 AND DATE_FORMAT(rp.".$item3." ,'%m') = $valor2
				 AND DATE_FORMAT(rp.".$item3." ,'%Y') = $valor3"
		);

		$stmt -> execute();

		return $stmt->fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*====================================
	= Modelo para Detalle de Remesas     =
	====================================*/
	static public function mdlDetalleRemesa($tabla1, $tabla2, $campo, $item1, $item2, $item3, $valor1, $valor2, $valor3){

		$stmt = Conexion::conectar()->prepare(
				"SELECT (@rownum:=@rownum+1) AS rownum,$campo
				 FROM $tabla1 rp, $tabla2 lj, (SELECT @rownum:=0) r
				 WHERE rp.".$item1." = lj.".$item1."
				 AND ".$item2." = $valor1
				 AND DATE_FORMAT(rp.".$item3." ,'%m') = $valor2
				 AND DATE_FORMAT(rp.".$item3." ,'%Y') = $valor3"
		);

		$stmt -> execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}

	/*===============================================
	= Modelos para Cantidad de Años en Remesas      =
	===============================================*/
	static public function mdlCantidadAnos($tabla1, $tabla2, $campo, $item1, $item2, $valor){

		$stmt = Conexion::conectar()->prepare(
				"SELECT distinct(YEAR(dt.".$campo.")) tot
				 FROM $tabla1 dt, $tabla2 lj
				 WHERE dt.".$item1." = lj.".$item1."
				 AND ".$item2." = $valor;"
		);

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}

	/*===============================================
	= Modelo para Cantidad de Meses en Remesas      =
	===============================================*/
	static public function mdlCantidadMeses($tabla1, $tabla2, $campo, $item1, $item2, $valor){

		$stmt = Conexion::conectar()->prepare(
				"SELECT tt.tot numMes,
				   CASE
						WHEN tt.tot='01' THEN 'Enero'
						WHEN tt.tot='02' THEN 'Febrero'
						WHEN tt.tot='03' THEN 'Marzo'
						WHEN tt.tot='04' THEN 'Abril'
						WHEN tt.tot='05' THEN 'Mayo'
						WHEN tt.tot='06' THEN 'Junio'
						WHEN tt.tot='07' THEN 'Julio'
						WHEN tt.tot='08' THEN 'Agosto'
						WHEN tt.tot='09' THEN 'Setiembre'
						WHEN tt.tot='10' THEN 'Octubre'
						WHEN tt.tot='11' THEN 'Noviembre'
						WHEN tt.tot='12' THEN 'Diciembre'
					END as nameMes
				FROM(
						SELECT distinct(MONTH(dt.".$campo.")) tot
						FROM $tabla1 dt, $tabla2 lj
						WHERE dt.".$item1." = lj.".$item1."
						AND ".$item2." = $valor
				) tt		 
				ORDER BY 1;
				");

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}

	//$tabla1, $tabla2, $field, $item, $valor
	static public function mdlRemesaTardeTotalMeses(){

		$stmt = Conexion::conectar()->prepare(
				"SELECT tt.tot numMes,
				   CASE
						WHEN tt.tot='01' THEN 'Enero'
						WHEN tt.tot='02' THEN 'Febrero'
						WHEN tt.tot='03' THEN 'Marzo'
						WHEN tt.tot='04' THEN 'Abril'
						WHEN tt.tot='05' THEN 'Mayo'
						WHEN tt.tot='06' THEN 'Junio'
						WHEN tt.tot='07' THEN 'Julio'
						WHEN tt.tot='08' THEN 'Agosto'
						WHEN tt.tot='09' THEN 'Setiembre'
						WHEN tt.tot='10' THEN 'Octubre'
						WHEN tt.tot='11' THEN 'Noviembre'
						WHEN tt.tot='12' THEN 'Diciembre'
					END as nameMes
				FROM(
						SELECT distinct(MONTH(dt.fec_crea_remito)) tot
						FROM remesa_tardes dt, locales_jefezonals lj
						WHERE dt.cod_local = lj.cod_local
						AND lj.dni_jefe_zona = '09917806'
				) tt		 
				ORDER BY 1;
				");

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}	

}
