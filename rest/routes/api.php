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

/*===================================
=            API LOCALES            =
===================================*/
Route::resource('local','Locales\LocalesDetController',['only'=>['index','store']]);
Route::delete('local/todos','Locales\LocalesDetController@deleteAll');

/*=================================================
=            API JEFES ZONALES X LOCAL            =
=================================================*/
Route::resource('jefexlocal','Locales\LocalesJefezonalController',['only'=>['index','store']]);
Route::delete('jefexlocal/todos','Locales\LocalesJefezonalController@deleteAll');