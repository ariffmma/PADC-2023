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

// Route::get('/', function () {
//     return view('frontend.welcome');
// });
Auth::routes(['verify' => true]);

// Auth::routes();

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('home');

Route::get( '/download/{filename}', [App\Http\Controllers\FrontController::class, 'download']);
Route::post('/unduh',[App\Http\Controllers\FrontController::class, 'unduh'])->name('unduh.tor');
Route::post('/unduhcatalog',[App\Http\Controllers\FrontController::class, 'unduhcatalog'])->name('unduh.catalog');
Route::get('/agatha-carolina',[App\Http\Controllers\FrontController::class,'agatha'])->name('agatha');
Route::get('/wendy-djuhara',[App\Http\Controllers\FrontController::class,'wendy'])->name('wendy');
Route::get('sitemap.xml',[App\Http\Controllers\FrontController::class,'sitemap']);
Route::get('/last-edition',[App\Http\Controllers\FrontController::class,'last_edition'])->name('last-edition');
// 404
Route::get('/nopermission', function(){ return back(); })->name('nopermission');


Route::group(['middleware' => ['auth','roles'], 'roles' => ['admin','user']], function(){
    Route::get('/profile', [App\Http\Controllers\UsersController::class, 'profile'])->name('profile');
    Route::post('/team/store',[App\Http\Controllers\teamController::class,'store'])->name('team.store');
    Route::post('/link/store',[App\Http\Controllers\UsersController::class,'link_store'])->name('link.store');
    Route::post('/team/update',[App\Http\Controllers\teamController::class,'update'])->name('team.update');
    Route::post('/follow',[App\Http\Controllers\teamController::class,'follow'])->name('follow');
    Route::post('follow/yes/{id}',[App\Http\Controllers\teamController::class,'follow_yes'])->name('follow_yes');
    Route::post('follow/no/{id}',[App\Http\Controllers\teamController::class,'follow_no'])->name('follow_no');
    
});

Route::group(['middleware'=>['auth','roles'],'roles'=>['editor','admin']], function(){
    Route::get('/dashboard', [App\Http\Controllers\dashboardController::class,'index'])->name('dashboard');
    Route::get('teams/export/', [App\Http\Controllers\teamController::class, 'teamExport'])->name('team.export');
    Route::get('/submit/export/',[App\Http\Controllers\teamController::class,'submitExport'])->name('submit.export');
    Route::get('/email',[App\Http\Controllers\teamController::class, 'Emaillist'])->name('admin.email');
    Route::get('/admin/userNoteam',[App\Http\Controllers\UsersController::class,'userNoteam'])->name('admin.users.userNoteam');
    Route::get('/admin/userNoteam2022',[App\Http\Controllers\UsersController::class,'userNoteam2022'])->name('admin.users.userNoteam2022');
    Route::get('/admin/index2022',[App\Http\Controllers\UsersController::class,'index2022'])->name('admin.users.index2022');
    Route::get('/admin/alluser',[App\Http\Controllers\UsersController::class,'alluser'])->name('admin.users.alluser');
    Route::get('/admin/alluser2022',[App\Http\Controllers\UsersController::class,'alluser2022'])->name('admin.users.alluser2022');
    Route::post('user/featured/{id}',[App\Http\Controllers\UsersController::class,'featured'])->name('admin.users.featured');
    Route::post('user/unfeatured/{id}',[App\Http\Controllers\UsersController::class,'unfeatured'])->name('admin.users.unfeatured');
   
});
Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['auth','roles'], 'roles' => ['admin']], function(){

    Route::resource('users',App\Http\Controllers\UsersController::class, ['names' => 'users']);
    Route::get('/admin/userNoteam',[App\Http\Controllers\UsersController::class,'userNoteam'])->name('admin.users.userNoteam');
    Route::get('/admin/userNoteam2022',[App\Http\Controllers\UsersController::class,'userNoteam2022'])->name('admin.users.userNoteam2022');
    Route::get('/admin/alluser',[App\Http\Controllers\UsersController::class,'alluser'])->name('admin.users.alluser');
    Route::get('/admin/alluser2022',[App\Http\Controllers\UsersController::class,'alluser2022'])->name('admin.users.alluser2022');
    Route::get('/admin/index2022',[App\Http\Controllers\UsersController::class,'index2022'])->name('admin.users.index2022');
    Route::resource('teams',App\Http\Controllers\teamController::class,['names' =>'teams']);
    Route::get('/email',[App\Http\Controllers\teamController::class, 'Emaillist'])->name('admin.email');
    

});
Auth::routes();


