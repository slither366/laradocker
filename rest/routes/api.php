<?php

use Illuminate\Http\Request;

Route::resource('users','User\UserController',['except'=>['create','edit']]);

Route::resource('DepositoTarde','DepositoTarde\DepositoTardeController',['except'=>['create','edit']]);

Route::get('/getLlave/{DepositoTarde}','DepositoTarde\DepositoTardeController@getLlave');

Route::resource('jefezonal','Jefezonal\JefezonalController',['only'=>['index','store']]);

Route::delete('jefezonal/todos','Jefezonal\JefezonalController@deleteAll');

Route::resource('local','Locales\LocalesDetController',['only'=>['index','store']]);

Route::delete('local/todos','Locales\LocalesDetController@deleteAll');

Route::resource('jefexlocal','Locales\LocalesJefezonalController',['only'=>['index','store']]);

Route::delete('jefexlocal/todos','Locales\LocalesJefezonalController@deleteAll');