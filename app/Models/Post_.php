<?php

namespace App\Models;

class Post 
{
     /* Make properties static (provate) supaya ahnya bisa diakses di file sini*/
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",    
            "slug" => "judul-post-pertama",
            "author" =>"Nuevalen Refitra Alswando",
            "body" => "
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat asperiores delectus eius animi debitis saepe consequatur eum sequi natus at non quisquam aspernatur ratione consectetur, adipisci dolor deserunt voluptatum beatae rerum obcaecati. Excepturi temporibus facere esse accusantium, praesentium assumenda distinctio natus cum quidem expedita accusamus nemo veniam autem. Facere repellat illo, reprehenderit ex quia corrupti dicta expedita cupiditate corporis natus dolore rem et hic aliquam aut aspernatur odit laudantium officia. Ratione ullam culpa temporibus libero possimus inventore commodi, voluptatum non!" 
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" =>"Muhammad Alif Naufal",
            "body" => "
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat asperiores delectus eius animi debitis saepe consequatur eum sequi natus at non quisquam aspernatur ratione consectetur, adipisci dolor deserunt voluptatum beatae rerum obcaecati. Excepturi temporibus facere esse accusantium, praesentium assumenda distinctio natus cum quidem expedita accusamus nemo veniam autem. Facere repellat illo, reprehenderit ex quia corrupti dicta expedita cupiditate corporis natus dolore rem et hic aliquam aut aspernatur odit laudantium officia. Ratione ullam culpa temporibus libero possimus inventore commodi, voluptatum non!" 
        ]
        ];
    /* Make Method all */
    public static function all(){
        return collect(self::$blog_posts); // property static (self::) | collect pembungkus array
    }

    /* Make method slug */
    public static function find($slug){ 
        $posts = static::all(); // ambil dari method all

         return $posts->firstWhere('slug', $slug); // saya akan ambil data yang paling pertama berdasarkan slug
         /* Ambil semua post yang bentuknya collection lalu cari yang pertama ditemuakn yang dimana slugnya == slug */
    }

}

?>
