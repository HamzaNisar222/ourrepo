<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class AvailableSource extends Model
{
    use HasFactory;

    protected $connection = "mongodb";

    protected $collection = "available_sources";


    protected $fillable = ['name', 'type', 'image'];



    
}
