<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;



use Illuminate\Http\Request;

class PostController extends Controller
{
    /* Make function basic for controller */        
    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        
        // dd(request('search')); // (dd() Untuk menampilakn (dump) dan memberthentikan error (die)) ambil dari request
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // "posts" => Post::all(), // ingin ambil dari mode yaitu method all unutk mengambil data postingan
            // "posts" => Post::latest()->get() // ambil semua data post lalu urutkan yang terbaru
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString() // mengambil author dan category sekaligus (jika tidak ada pencarian eksekusi kode ini) // query ke database -> urutkan berdasarkan palingn terbaru
        ]);
    }

    /* Make method untuk menampilkan detail dari postsnya  */
    public function show(Post $post){ // ditangkap dari rout web
        // Halaman Singgle post
        return view('post',[
            "title" => "Single Posts",
            "active" => 'posts',
            "post" => $post // Mencari postingan berdasarkan post di models
        ]);
    }
}
