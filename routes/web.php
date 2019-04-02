<?php

Route::get('/',['uses'=>'IndexController@show','as'=>'index']);
Route::get('/alphabets',['uses'=>'AlphabetController@show','as'=>'alphabets']);
Route::get('/rules',['uses'=>'RulesController@show','as'=>'rules']);
?>