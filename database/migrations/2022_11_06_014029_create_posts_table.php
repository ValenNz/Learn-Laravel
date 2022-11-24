<!DOCTYPE html>
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Make A table */
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id'); // unutk menghubungkan ke tabel categoris (foreign key)
            $table->foreignId('user_id'); // unutk menghubungkan ke tabel categoris (foreign key)
            $table->string('title');
            $table->string('slug')->unique(); // memiliki key uniq (berbeda)
            $table->text('excerpt'); // Isi lebih banyak (read more)
            $table->text('body');
            $table->timestamp('published_at')->nullable(); // unutk update pembuatan konten boleh kosong
            $table->timestamps(); // untuk membuat ceated at dan update at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     /* Delete a table */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
