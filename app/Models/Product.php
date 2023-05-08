<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'code', 'description','DLUO',
    ];
    public function lines()
    {
        return $this->belongsToMany(Line::class);
    }
    protected $dates =['deleted_at'];
}
