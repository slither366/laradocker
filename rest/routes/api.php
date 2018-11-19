<?php

use Illuminate\Http\Request;

/*====================================
=            API USUARIOS            =
====================================*/
Route::resource('users','User\UserController',['only'=>['index','store']]);
Route::delete('users/todos','User\UserController@deleteAll');

/*=========================================
=            API JEFES ZONALES            =
=========================================*/
Route::resource('jefezonal','Jefezonal\JefezonalController',['only'=>['index','store']]);
Route::delete('jefezonal/todos','Jefezonal\JefezonalController@deleteAll');
Route::get('jefezonal/verificaJefe/{dni_jefezona}','Jefezonal\JefezonalController@getJefeExiste');

/*===================================
=            API LOCALES            =
===================================*/
Route::resource('local','Locales\LocalesDetController',['only'=>['index','store']]);
Route::delete('local/todos','Locales\LocalesDetController@deleteAll');
Route::get('local/verificaLocal/{cod_local}','Locales\LocalesDetController@getLocalExiste');

/*=================================================
=            API JEFES ZONALES X LOCAL            =
=================================================*/
Route::resource('jefexlocal','Locales\LocalesJefezonalController',['only'=>['index','store']]);
Route::delete('jefexlocal/todos','Locales\LocalesJefezonalController@deleteAll');
Route::get('jefexlocal/verificaJefexlocal/{cod_local}','Locales\LocalesJefezonalController@getJefexlocalExiste');

/*==========================================
=            API DEPOSITO TARDE            =
==========================================*/
Route::resource('DepositoTarde','DepositoTarde\DepositoTardeController',['only'=>['index','store']]);
Route::delete('DepositoTarde/todos','DepositoTarde\DepositoTardeController@deleteAll');
Route::get('getLlave/{DepositoTarde}','DepositoTarde\DepositoTardeController@getLlave');

/*==============================================
=            API DEPOSITO PENDIENTE            =
==============================================*/
Route::resource('DepositoPendiente','DepositoPendiente\DepositoPendienteController',['only'=>['index','store']]);
Route::delete('DepositoPendiente/todos','DepositoPendiente\DepositoPendienteController@deleteAll');

/*==============================================================
=            API TRANSFERENCIAS PENDIENTES CABECERA            =
==============================================================*/
Route::resource('transferenciasCab','Transferencia\TrasferenciaPendienteCabController',['only'=>['index','store']]);
Route::delete('transferenciasCab/todos','Transferencia\TrasferenciaPendienteCabController@deleteAll');

/*=============================================================
=            API TRANSFERENCIAS PENDIENTES DETALLE            =
=============================================================*/
Route::resource('transferenciasDet','Transferencia\TrasferenciaPendienteDetController',['only'=>['index','store']]);
Route::delete('transferenciasDet/todos','Transferencia\TrasferenciaPendienteDetController@deleteAll');

/*==========================================
=            API REMESAS TARDES            =
==========================================*/
Route::resource('remesasTardes','Remesas\RemesaTardeController',['only'=>['index','store']]);
Route::delete('remesasTardes/todos','Remesas\RemesaTardeController@deleteAll');
Route::get('remesasTardes/getLlave/{DepositoTarde}','Remesas\RemesaTardeController@getLlave');

/*==========================================
=            API REMESAS PENDIENTE            =
==========================================*/
Route::resource('remesasPendientes','Remesas\RemesaPendienteController',['only'=>['index','store']]);
Route::delete('remesasPendientes/todos','Remesas\RemesaPendienteController@deleteAll');