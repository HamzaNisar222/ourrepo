<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class AvailableResource extends Model
{
    use HasFactory;

    // Specify the collection name
    protected $collection = 'available_resources';

    // Define which attributes are mass assignable
    protected $fillable = ['name', 'type', 'image'];

    // Optionally, you can specify any cast attributes
    protected $casts = [
        'image' => 'array', // Example if 'image' is a JSON field
    ];
}
