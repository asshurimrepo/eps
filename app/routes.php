<?php





Route::controller('auth', 'AuthController');


Route::group(['before'=>'auth'], function(){


		Route::controller('/', 'MainController');


});