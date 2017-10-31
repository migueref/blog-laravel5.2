<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Rutas para el front de los visitantes
Route::get('/', [ 'as' => 'front.index',
									'uses' => 'FrontController@index'
]);
//rutas para buscar categorias y tags por nombre
Route::get('categories/{name}',[
		'uses' => 'FrontController@searchCategory',
		'as'	=>	'front.search.category'
]);

Route::get('tags/{name}',[
		'uses' => 'FrontController@searchTag',
		'as'	=>	'front.search.tag'
]);
//Ruta para el artículo elegido:
Route::get('articles/{slug}',[
		'uses' => 'FrontController@viewArticle',
		'as'	=>	'front.view.article'
]);
//Rutas de administrador
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('/', ['as' => 'admin.index',function () {
		return view('welcome');
	}]);
	Route::group(['middleware'=>'admin'], function () {
			 Route::resource('users','UsersController');
			 Route::get('users/{id}/destroy',[
				'uses' => 'UsersController@destroy',
				'as' => 'admin.users.destroy'
			 ]);
	});
	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
	]);
	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy',[
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy'
	]);
	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy',[
		'uses' => 'ArticlesController@destroy',
		'as' => 'admin.articles.destroy'
	]);
   Route::get('images',[
       'uses'  =>  'ImagesController@index',
       'as'    =>  'admin.images.index'
   ]);
});

Route::get('admin/auth/login',[
		'uses' => 'Auth\AuthController@getLogin',
		'as' => 'admin.auth.login'
]);
Route::post('admin/auth/login', [
				'uses' =>	'Auth\AuthController@postLogin',
				'as'   =>	'admin.auth.login'
]);
Route::get('admin/auth/logout',[
		'uses' => 'Auth\AuthController@getLogout',
		'as' => 'admin.auth.logout'
]);
