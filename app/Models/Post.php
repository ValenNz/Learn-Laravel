<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable =['title', 'excerpt', 'body']; /* fillable : boleh diiisi sisanya tidak boleh disisi */
    protected $guarded =['id']; /* guarded : tidak boleh diiisi sisanya boleh */
    protected $with = ['category', 'author']; // mengambil author dan category sekaligus

    public function scopeFilter($query, array $fillters) { // cek apakah ada search yang dilakukan
        /* Check search  */

        $query->when($filters['search'] ?? false, function($query, $search){ // jika ada pilih searh jika tidak false
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category ){
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category );
            }); // dimana query ini memiliki relationship apa?(kategori belong to)
        });

        $query->when($filters['author'] ?? false, fn($query, $author) => 
            $query->whereHas('author', fn($query) =>
                $query->where('username', $auhor)
            )
        );
    }

    public function category(){ // Mengmeblaikan relasi dari model post terhadap model category maunya apa
        return $this->belongsTo(Category::class); // Model post berelasi dengan model category
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id'); // Satu post hanya dimiliki 1 user
    }   

    public function getRouteKeyName(){
        return 'slug';
    }

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

