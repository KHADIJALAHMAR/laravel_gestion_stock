<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class produit extends Model
{
    use HasFactory;

    protected $table = 'produit';
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'name_product',
        'descreption',
        'prix',
    ];
    
    protected $casts = [
        'create_at' => 'Y/m/d',
        'update_at' => 'datetime',
    ];
}

