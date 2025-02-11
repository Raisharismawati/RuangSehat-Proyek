<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $table = 'medicines'; // Pastikan tabel ini benar

    protected $fillable = [
        'name',
        'type',
        'function',
        'dosage',
        'expiry_date',
        'stock',
    ];
}
