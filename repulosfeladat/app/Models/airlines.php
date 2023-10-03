<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airlines extends Model
{
    use HasFactory;
    protected  $primaryKey = 'airline_id';
    protected $fillable = [
        'country',
        
        'name'

    ];
}
