<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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
