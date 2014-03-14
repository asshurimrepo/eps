<?php




Route::group(['before'=>'auth'], function(){


		Route::controller('admin', 'AdminController');

		Route::controller('main', 'MainController');

		Route::resource('patients', 'PatientsController');

		Route::resource('medications', 'MedicationsController');

		Route::resource('pharmacies', 'PharmaciesController');	

		Route::resource('prescriptions', 'PrescriptionsController');

		Route::resource('doctors', 'DoctorsController');




});

Route::controller('/', 'AuthController');



