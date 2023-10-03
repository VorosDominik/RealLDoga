<?php

use App\Models\airlines;
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
        Schema::create('airlines', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });

        airlines::create([


            'id' => "1",
            'name' => "user1",
            'country' => "fiktiv",
        
        ]);
        airlines::create([


            'id' => "3",
            'name' => "user2",
            'country' => "fiktiv",
        
        ]);
        airlines::create([


            'id' => "2",
            'name' => "user3",
            'country' => "fiktiv",
        
        ]);

    }

    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
  
};
