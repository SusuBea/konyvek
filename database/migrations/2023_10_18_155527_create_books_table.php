<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->longText('title', 150);
            $table->integer('pieces')->default(50);
            $table->timestamps();

        });


        Book::create([

            'author' => 'Ady Endre', 
            'title' => 'Novellák',
            'pieces' => '30' 
        ]);

        Book::create([

            'author' => 'Coelho', 
            'title' => '11 perc',
            'pieces' => '50' 
        ]);

        Book::create([
    
            'author' => 'Babits Mihály', 
            'title' => 'Válogatás',
            'pieces' => '15' 
        ]);



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
