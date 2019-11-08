<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'auth'], function () {
	Route::group(['namespace' => 'Admin'], function () {

		// Rutas de Publicaciones (Posts)

		Route::get('admin/post/listado', 'PostsController@index')->name('admin.post.index');

		Route::get('admin/post/nuevo', 'PostsController@create')->name('admin.post.create');

		Route::post('admin/post/nuevo', 'PostsController@store')->name('admin.post.store');

		Route::delete('admin/post/listado/{id}', 'PostsController@destroy')->name('admin.post.destroy');

		Route::get('admin/home', 'HomeController@index')->name('admin.home');

		Route::post('admin/home/contacto', 'MensajesController@store')->name('admin.mensajes.store');

		Route::get('admin/home/bandejaentrada', 'MensajesController@index')->name('admin.bandejaentrada')->middleware();

		Route::get('admin/home/bandejaentrada/mensaje/{id}', 'MensajesController@show')->name('admin.leermensaje')->middleware();

		// Rutas de Eventos (Agenda)

		Route::get('admin/home/evento', 'AgendasController@index')->name('admin.evento.index')->middleware();

		Route::get('admin/home/evento/nuevo', 'AgendasController@create')->name('admin.evento.create')->middleware();

		Route::post('admin/home/evento/nuevo', 'AgendasController@store')->name('admin.evento.store')->middleware();

		// Admin auth Routes

		Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');

		Route::post('admin-login', 'Auth\LoginController@login')->name('admin.login');

	});
});

/*
/	Agrupación de todas las rutas relacionadas a las peticiones realizadas por el front-end
*/
Route::group(['namespace' => 'Web'], function () {
	/*
	/	Retorna todas las publicaciones en una variable llamada $publicaciones
	/	Los tags son accedidos por medio de un foreach de la siguiente manera $publicacion->tags
	/	tag->name
	/	Las publicaciones se retornan paginadas.
	/	También retorna una colección de datos para la agenda, denominado $eventos.
	*/
	Route::get('/home', 'HomeController@index')->name('web.home');

});

Route::get('admin-logout','Auth\LoginController@logout')->name('admin.logout');

Route::get('/', function () {
    return view('web.index');
});


Route::get('crearcensado', function () {
    return view('admin.censo.crearcensado');
})->name('admin.censo.create');


//Ruta de recursos para Censados
Route::resource('censado', 'Admin\RegisteredsController');

//Ruta de recursos para Tutores
Route::resource('tutor', 'Admin\TutorsController');

//Ruta para ver tutor y volver al show del censado
Route::get('tutor/{tutor}/{censado}', 'Admin\TutorsController@show')->name('tutor.ver');

//Ruta para eliminar el tutor de un censado, pero no borra el tutor.
Route::get('censado/{tutor}/{censado}', 'Admin\TutorsController@eliminarTutor')->name('tutor.eliminar');

//Ruta asignar tutor a censado
Route::post('censado/tutor', 'Admin\TutorsController@asignarTutorACensado')->name('censado.tutor.store');

//Ruta de recursos para Voluntarios
Route::resource('voluntario', 'Admin\VolunteersController');


// Route::get('listarcensado', function () {
//     return view('admin.censo.listarcensado');
// });

// Route::get('creartutor', function () {
//     return view('admin.censo.creartutor');
// });

// Route::get('listartutor', function () {
//     return view('admin.censo.listartutor');
// });



Auth::routes();

Route::resource('pensiones', 'Admin\PensionsController');
Route::resource('obrassociales', 'Admin\HealthinsurancesController');
Route::post('buscar', 'Admin\PensionsController@buscar')->name('buscar');
