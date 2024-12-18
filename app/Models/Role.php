<?php
// app/Models/Role.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'roles';

    // Menentukan kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'name',
        'description',
    ];

    // Jika kamu ingin mendefinisikan relasi dengan model User (relasi banyak ke satu)
    public function users()
    {
        return $this->hasMany(User::class);  // Satu role bisa dimiliki oleh banyak user
    }
}
