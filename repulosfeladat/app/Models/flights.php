<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    use HasFactory;
    protected  $primaryKey = 'flights_id';
    protected $fillable = [
        'evaluation',
        'airline_id',
        'date',
        
        'limit',
    ];
    
    
    
    
    
}
