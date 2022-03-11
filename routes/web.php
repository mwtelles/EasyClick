<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/','IndexController@home')->name('index');
Route::get('/v','IndexController@videos')->name('videos');
Route::get('/v/{video}','IndexController@video')->name('video.show');
Route::resource('videos','VideosController')->except(['store','update','edit']);

route::middleware(['auth'])->group(function(){
    Route::resource('videos','VideosController');
    Route::resource('comentarios','ComentariosController');
    Route::resource('perfil', 'PerfilController');
    Route::resource('canal', 'CanalController');
    Route::get('canal/video/{video}', 'CanalController@detalhesVideo')->name('canal.video.detalhes');
    Route::resource('curtidas', 'CurtidasController');
    Route::resource('comentarios_curtidas', 'ComentariosCurtidasController');
    Route::resource('videos_ocultos', 'VideosOcultosController');
    Route::resource('inscritos', 'InscritosController');
    Route::resource('visualizacao', 'VisualizacaoController');
    Route::resource('sub_comentarios', 'SubComentariosController');
    Route::middleware(['admin'])->prefix('admin')->as('admin.')->group(function(){
        Auth::routes();
        Route::get('/', 'Admin\HomeController@index')->name('home');
        Route::post('/banner/videos', 'Admin\ConfigsController@updateVideosBanner')->name('videos_banner');
        Route::resource('configs','Admin\ConfigsController');
        Route::get('/videos/all', 'Admin\VideosController@all')->name('all_videos');

        Route::resource('videos','Admin\VideosController');
        Route::resource('categorias','Admin\CategoriasController');
    });
});
