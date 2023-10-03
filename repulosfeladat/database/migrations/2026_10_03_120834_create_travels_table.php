<?php

use App\Models\travels;
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
        Schema::create('travels', function (Blueprint $table) {
            $table->id('travel_id');
            $table->string('evaluation');
            $table->unsignedBigInteger('flight_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('flight_id')->references('id')->on('flights');
            $table->foreign('user_id')->references('id')->on('users');
        });
        travels::create([

            'user_id'=>"1",
            'flight_id'=> "1" ,
            'evaluation' => "alma",
            
        
        ]);
        travels::create([

            'user_id'=>"2",
            'flight_id'=> "2" ,
            'evaluation' => "alma",
            
        
        ]);
        travels::create([

            'user_id'=>"3",
            'flight_id'=> "3", 
            'evaluation' => "alma",
            
        
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels');
    }
};
