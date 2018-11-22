<?php

require_once("conexion.php");

class ModeloDepositos{

	static public function mdlDepositoPendiente($tabla1, $tabla2, $item1, $item2, $valor1){

		$stmt = Conexion::conectar()->prepare(
				"SELECT count(distinct(td.cod_local)) cant_loc 
				   FROM $tabla1 td, $tabla2 lj 
				  WHERE td.cod_local = lj.cod_local 
				  	AND $item1 = $valor1
				  	AND $item2 >= CAST(DATE_FORMAT(NOW() ,'%Y-%m-01') as DATE)"
		);

		//$stmt->bindParam(1, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt->fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*=======================================================
	=            Total de Locales Deposito Tarde            =
	=======================================================*/
	static public function mdlCantLocDepoTarde($tabla1, $tabla2, $item1, $item2, $valor1){

		$stmt = Conexion::conectar()->prepare(
					"SELECT count(distinct(lj.cod_local)) cant_loc
					 FROM  $tabla1 td, $tabla2 lj
					 WHERE td.cod_local = lj.cod_local
					 AND $item1 <> 0
					 AND $item2 = $valor1
					 AND DATE_FORMAT(td.fecha_cierre_dia ,'%m') = DATE_FORMAT(NOW() ,'%m')
					");

		$stmt -> execute();
        
		return $stmt->fetch();

		$stmt -> close();

		$stmt = null;

	}	

	static public function mdlDepoTotalAnos($tabla1, $tabla2, $field, $item, $valor){

		$stmt = Conexion::conectar()->prepare(
				"SELECT distinct(YEAR($field)) tot
				 FROM $tabla1 dt, $tabla2 lj
				 WHERE dt.cod_local = lj.cod_local
				 AND $item = ?
				 ORDER BY 1;"
		);

		$stmt->bindParam(1, $valor, PDO::PARAM_STR);

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlDepoTotalMeses($tabla1, $tabla2, $field, $item, $valor){

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
				 	SELECT distinct(MONTH($field)) tot
				 	FROM $tabla1 dt, $tabla2 lj
				 	WHERE dt.cod_local = lj.cod_local
				 	AND $item = $valor
				 ) tt		 
				 ORDER BY 1;
				");

		$stmt->bindParam(1, $valor, PDO::PARAM_STR);

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}

	/*=====================================================
	=            Detalle de Deposito Pendiente            =
	=====================================================*/
	static public function mdlDetalleDepoPend($tabla1, $tabla2, $item1, $item2, $valor1, $valor2, $valor3){

		$stmt = Conexion::conectar()->prepare(
					"SELECT (@rownum:=@rownum+1) AS rownum,dt.cod_local, dt.dia_cierre, dt.fecha_mes
					 FROM $tabla1 dt, (SELECT @rownum:=0) r, $tabla2 lj
					 WHERE dt.cod_local = lj.cod_local
					 AND $item1 = $valor1
					 AND DATE_FORMAT($item2 ,'%m') = $valor2
					 AND DATE_FORMAT($item2 ,'%Y') = $valor3
					 ORDER BY 1,3");

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}

	/*==============================================
	=            Detalle Deposito Tarde            =
	==============================================*/
	static public function mdlDetalleDepoTarde($tabla1, $tabla2, $item1, $item2, $item3, $valor1, $valor2, $valor3, $valor4){

		$stmt = Conexion::conectar()->prepare("
				SELECT (@rownum:=@rownum+1) AS rownum, lj.cod_local,
							ELT(WEEKDAY(td.fecha_cierre_dia) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo') as day_cierre,
							Date_format(td.fecha_cierre_dia,'%d/%m/%Y') as fecha_cierre_dia,
							ELT(WEEKDAY(td.fecha_op_bancaria) + 1, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo') as day_op,
							Date_format(td.fecha_op_bancaria,'%d/%m/%Y  %k:%i:%s') as fecha_op_bancaria,
							td.moneda,td.monto_deposito,
							CASE
							WHEN WEEKDAY(td.fecha_cierre_dia)=5
							THEN
							CONCAT( 
							TIMESTAMPDIFF(DAY, DATE_ADD(ADDTIME(td.fecha_cierre_dia,'14:00:00'),INTERVAL 2 DAY), td.fecha_op_bancaria), ' dias, ', 
							MOD(TIMESTAMPDIFF(HOUR, DATE_ADD(ADDTIME(td.fecha_cierre_dia,'14:00:00'),INTERVAL 2 DAY), td.fecha_op_bancaria), 24), ' horas y ', 
							MOD(TIMESTAMPDIFF(MINUTE, DATE_ADD(ADDTIME(td.fecha_cierre_dia,'14:00:00'),INTERVAL 2 DAY), td.fecha_op_bancaria), 60), ' min' 
							)
							ELSE
							CONCAT( 
							TIMESTAMPDIFF(DAY, DATE_ADD(ADDTIME(td.fecha_cierre_dia,'14:00:00'),INTERVAL 1 DAY), td.fecha_op_bancaria), ' dias, ', 
							MOD(TIMESTAMPDIFF(HOUR, DATE_ADD(ADDTIME(td.fecha_cierre_dia,'14:00:00'),INTERVAL 1 DAY), td.fecha_op_bancaria), 24), ' horas y ', 
							MOD(TIMESTAMPDIFF(MINUTE, DATE_ADD(ADDTIME(td.fecha_cierre_dia,'14:00:00'),INTERVAL 1 DAY), td.fecha_op_bancaria), 60), ' min' 
							)
							END tiempo_diferencia, td.num_operacion, td.usuario,Date_format(td.fecha_cierre_dia,'%d/%m/%Y') f_cierre, td.status
				FROM $tabla1 td, locales_jefezonals lj, (SELECT @rownum:=0) r
				WHERE td.cod_local = lj.cod_local
				AND $item1 = $valor1
				AND DATE_FORMAT($item2 ,'%m') = $valor2
				AND DATE_FORMAT($item2 ,'%Y') = $valor3
				AND td.status <> '0'
				AND $item3 = $valor4
				ORDER BY 2,11;
			");

		$stmt -> execute();
        
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt -> close();

		$stmt = null;

	}

	/*====================================================================
	=            Total Locales Filtrado en Deposito Pendiente            =
	====================================================================*/
	static public function mdlCantLocDetDepPend($tabla1, $tabla2, $field, $item1, $item2, $valor1, $valor2, $valor3){

		$stmt = Conexion::conectar()->prepare(
					"SELECT count(distinct(dt.cod_local)) totLocales
					 FROM $tabla1 dt, $tabla2 lj
					 WHERE dt.cod_local = lj.cod_local
					 AND $item1 = $valor1
					 AND DATE_FORMAT($item2 ,'%m') = $valor2
					 AND DATE_FORMAT($item2 ,'%Y') = $valor3"
					);

		//$stmt->bindParam(1, $valor, PDO::PARAM_STR);

		$stmt -> execute();
        
		return $stmt->fetch();

		$stmt -> close();

		$stmt = null;

	}

	/*===============================================================================
	=            Controlador Total Locales con Deposito Tarde Filtro Mes            =
	===============================================================================*/
	/*static public function ctrCantLocDepositoTarde($tabla1, $tabla2, $item1, $item2, $valor1){

		$stmt = Conexion::conectar()->prepare(
					"SELECT count(distinct(lj.cod_local)) cant_loc
					 FROM  $tabla1 td, $tabla2 lj
					 WHERE td.cod_local = lj.cod_local
					 AND $item1 <> 0
					 AND $item2 = $valor1
					 AND DATE_FORMAT(td.fecha_cierre_dia ,'%m') = DATE_FORMAT(NOW() ,'%m')
					");

		$stmt -> execute();
        
		return $stmt->fetch();

		$stmt -> close();

		$stmt = null;

	}	*/

	/*===============================================================================
	=            Controlador Total Locales Deposito Pendiente Filtro Mes            =
	===============================================================================*/
	static public function mdlCantLocDepositoTarde($tabla1, $tabla2, $field, $item1, $item2, $item3, $valor1, $valor2, $valor3, $valor4){

		$stmt = Conexion::conectar()->prepare(
				"SELECT count(distinct(lj.cod_local)) totLocales
				   FROM  $tabla1 td, $tabla2 lj
				  WHERE td.cod_local = lj.cod_local
				    AND $item1 = $valor1
				    AND $item2 <> $valor2
				    AND DATE_FORMAT($item3 ,'%m') = $valor3
				    AND DATE_FORMAT($item3 ,'%Y') = $valor4"
		);  

		//$stmt->bindParam(1, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt->fetch();

		$stmt -> close();

		$stmt = null;

	}	

}
