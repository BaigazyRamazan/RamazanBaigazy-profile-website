<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController; 
use App\Http\Controllers\FormController;
use App\Http\Controllers\MailController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main',function(){
	return redirect('main.php');
});

Route::get('aboutMe',function(){
	return redirect('aboutMe.php');
});

Route::redirect('contactMe','contactMe.php');

Route::get('/post/create',function ()
{
	DB::table('posts')->insert([
		'title' => 'Ramazan Baigazy',
		'body' => '2+2=4'
	]);
});

Route::get('/post',function(){
	$post = Post::find(1);
	return $post;
});

Route::get('blog/index',[BlogController::class, 'index']);
// Route::get('blog/index','BlogController@index');

Route::get('blog/create',function(){
	return view('post.create');
});

Route::post('blog/create',[BlogController::class, 'store'])->name('add-post');

Route::get('post/{id}',[BlogController::class, 'get_post']);

Route::get('lab8/login',function(){
	return view('login');
});
Route::post('lab8/store',[FormController::class, 'store'])->name('form');

Route::get('lab8/mail',[MailController::class, 'send_mail'])->name('mail');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
