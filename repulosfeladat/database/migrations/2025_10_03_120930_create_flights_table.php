<?php

use App\Models\flights;
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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('id');
            $table->date('date');
            $table->unsignedBigInteger('airline_id');
            $table->unsignedInteger('limit');
            $table->timestamps();

            $table->foreign('airline_id')->references('id')->on('airlines');
        });
        flights::create([


            'id'=>"1",
            'date' => "2022.03.03",
            'airline_id'=>"1",
            'limit' => "6",
        
        ]);
        flights::create([


        
            'id'=>"2",
            'date' => "2022.03.03",
            'airline_id'=>"3",
            'limit' => "6",
        
        ]);
        flights::create([


        
            'id'=>"3",
            'date' => "2022.03.03",
            'airline_id'=>"2",
            'limit' => "6",
        
        ]);
        
    }

    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
