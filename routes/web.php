<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


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
//     return view('welcome');
// });


Route::get('/hung',function() {
    return 'Nguyễn Đình Hùng';
});

// Route::get('/blogk20',function() {
//     return view('blogk20');
// });

// Route::get('/blog-post',function() {
//     return view('blog-post');
// });

// Route::get('/login',function() {
//     return view('login');
// });
// Route::get('/login',[homeControllers::class, 'login']);

// Route::get('/register',function() {
//     return view('register');
// });



Route::get('/text',[HomeController::class,'show']);
Route::get('/hung',function() {
    return 'Nguyễn Đình Hùng';
});
Route::get('/blog',[UserController::class,'blog']);
Route::get('/blog-post',[UserController::class,'blogpost']);
Route::get('/register',[UserController::class,'register']);

Route::get('/login',[UserController::class,'login']);
Route::post('/login',[UserController::class,'login']);


Route::post('/blog-post',[UserController::class,'userLogin']);

Route::get('/admin', function() {
    return 'đây là trang quản trị';
})->middleware('new_token');

Route::get('/user', function() {
    return 'đây là trang quản trị của bloc';
})->middleware('new_token');

Route::get('/user2', function(){
    return 'trang lỗi';
});
// Route::get('/home', function(){
//     return view('home');
// });
Route::get('/home',[UserController::class,'home'])->middleware('admin');
Route::get('/login_in',[UserController::class,'login_in']);


Route :: get('/duc-bang-20012030101', function() {
    return 'MÃ SINH VIÊN LÀ 20012030101';
});


