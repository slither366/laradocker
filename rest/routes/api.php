<?php

use Illuminate\Http\Request;

/*====================================
=            API USUARIOS            =
====================================*/
Route::resource('users','User\UserController',['only'=>['index','store']]);
Route::delete('users/todos','User\UserController@deleteAll');

/*==========================================
=            API DEPOSITO TARDE            =
==========================================*/
Route::resource('DepositoTarde','DepositoTarde\DepositoTardeController',['only'=>['index','store']]);
Route::delete('DepositoTarde/todos','DepositoTarde\DepositoTardeController@deleteAll');
Route::get('getLlave/{DepositoTarde}','DepositoTarde\DepositoTardeController@getLlave');

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