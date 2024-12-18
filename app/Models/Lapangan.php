<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'lapangan';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'location',
        'price_per_hour',
        'image',
    ];

    // Optionally, you can define additional methods, relationships, or custom logic here.
}
