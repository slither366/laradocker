/*===================================================
=            INACTIVAR O ACTIVAR MODAL 1            =
===================================================*/
function validaCajasOcultasMod1(caja1){

  if( document.getElementById(caja1).value.length > 0 ){

    $('#submitModal1').prop('disabled', false);

  }else{

    $('#submitModal1').prop('disabled', true);

  }

}

function setDepoAno(ano){

  $('#txtModal1Ano').val(ano);

  validaCajasOcultasMod1("txtModal1Mes");
  
}

function setDepoMes(mes){

  $('#txtModal1Mes').val(mes);

  validaCajasOcultasMod1("txtModal1Ano");

}

/*===================================================
=            INACTIVAR O ACTIVAR MODAL 2            =
===================================================*/
function validaCajasOcultasMod2(caja1,caja2){

  if(document.getElementById(caja1).value.length > 0 &&
     document.getElementById(caja2).value.length > 0){

    $('#submitModal2').prop('disabled', false);

  }else{

    $('#submitModal2').prop('disabled', true);

  }

}

function setDepoTarAno(ano){

  $('#modal2txtAno').val(ano);

  validaCajasOcultasMod2("modal2txtMes","modal2txtSemaforo");

}

function setDepoTarMes(mes){

  $('#modal2txtMes').val(mes);

  validaCajasOcultasMod2("modal2txtAno","modal2txtSemaforo");

}  

function setDepoTarSema(sema){

  $('#modal2txtSemaforo').val(sema);

  validaCajasOcultasMod2("modal2txtAno","modal2txtMes");

}   

/*====================================================================
=            INACTIVAR O ACTIVAR MODAL REMESAS PENDIENTES            =
====================================================================*/

function setRemPendAno(ano){

  $('#txtModal3Ano').val(ano);
  validaCajasRemPend("txtModal3Mes");
  
}

function setRemPendMes(mes){

  $('#txtModal3Mes').val(mes);
  validaCajasRemPend("txtModal3Ano");

}

function validaCajasRemPend(caja3){

  if( document.getElementById(caja3).value.length > 0 ){

    $('#submitModalRemPend').prop('disabled', false);

  }else{

    $('#submitModalRemPend').prop('disabled', true);

  }

}

/*====================================================================
=            INACTIVAR O ACTIVAR MODAL REMESAS TARDES            =
====================================================================*/

function setRemTardAno(ano){

  $('#txtModal4Ano').val(ano);
  validaCajasRemTard("txtModal4Mes");
  
}

function setRemTardMes(mes){

  $('#txtModal4Mes').val(mes);
  validaCajasRemTard("txtModal4Ano");

}

function validaCajasRemTard(caja4){

  if( document.getElementById(caja4).value.length > 0 ){

    $('#submitModalRemTard').prop('disabled', false);

  }else{

    $('#submitModalRemTard').prop('disabled', true);

  }

}