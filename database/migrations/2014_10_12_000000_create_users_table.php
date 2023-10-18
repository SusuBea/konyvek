<?php

use App\Models\User; //automatikuasn beimportálj a modelt
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
        Schema::create('users', function (Blueprint $table) {
            //auto-increment, els. kulcs, bigint típusú
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        //FONTOS hogy ide írjuk , tananyag 7. pont 
        User::create([
            'name' => 'Bali',
            'email' => 'bali@gmail.com',
            'password' => 'balibara'
        ]);

        User::create([
            'name' => 'Bea',
            'email' => 'bea@gmail.com',
            'password' => 'beabara'
        ]);


        User::create([
            'name' => 'Mariann', 
            'email' => 'mariann@gmail.com', 
            'password' => 'maribara' ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
