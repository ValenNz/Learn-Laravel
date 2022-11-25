<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


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

/* Penjelasan

    -- Syintaks --
    Route::get('/', function () {
        return view('welcome');
    });

    -- Penjelasan --
    Route::get('/', 
        Kalau misalkan ada route yang methode req get(url) yang ax`lamatnya / (kososng)
        
        function (){
    return view('welcome');
    });
        Jika ada user yang mengakses alamat tsb jalankan fungsi mengebalikan tamppilan sebuah view yang namanya welcome
*/
    
/* JIka ada rute(jalur) yang mengakses (methode req) get yang alamatnya slash(tidak kasih apa apa) menjalankan route dibawahnya  */
Route::get('/', function () {
    /* Tampilkan alamat home (tampilan home) | resource -> view */
    return view('home', [
        /* kirim data ke route home  */
        "title" => "Home", // kirim judul halaman
        "active" => "Home"
    ]);
});

/* ,[] : array untuk mengirim data secara otomatis */


Route::get('/about', function () {
    /* Menyimpan data (mengkirim data )array assosiatif unutk dikirim ke route about */
    return view('about',[
        "title" => "About", // kirim judul halaman
        "active" => "About",
        "name" => "Nuevalen Refitra Alswando",
        "email" => "nuevalenra05@gmail.com",
        "image" => "FOTO SMP.jpg"
    ]);
});

/* 
    posts : Menmapilkan banyak data
    post : menampilkan satu data
*/
/* Arahkan ke controller */
Route::get('/posts', [PostController::class, 'index']); 


Route::get('/posts/{post:slug}', [PostController::class, 'show']); // Mengirimkan post yang akan ditangkap oleh coontroller

/* Mengarah link ke categories */
Route::get('/categories', function(){
     /* Mengembali  kan isi dari categoriy yang ada */
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
      ]);
});

/* sudah ditangani oleh query yang di */
// /* Mengarahkan link categoy */
// Route::get('/categories/{category:slug}', function(Category $category){
//     /* Mengembalikan isi dari categoriy yang ada */
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category','author'),
//     ]);
// });

// /* Menjuju halaman author */
// Route::get('/authors/{author:username}', function(User $author){
//     /* Mengembalikan isi dari categoriy yang ada */
//     return view('posts', [
//         'title' => "User By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'), // mengambil semua post kita load author dan category secar abersamaan
//     ]);
// });


/* Routes Login  */
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // name('login') memberi tahu ke http bahwa ini merupakan routes login | hanya bisa di acc ke user yang belum terautentifikasi
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


/* Routes regristrasi  */
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Routes::get('/dashboard/posts/chckSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
