<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printing extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateimp',
        'quantite',
        'LOT',
        'user_id',
        'production_id',
    ];
}
