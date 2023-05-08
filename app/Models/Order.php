<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'numBC',
        'depotdest',
        'dateorder',
        // 'customer_id',
    ];
    public function products()
    {
    	return $this->hasMany(Product::class)->withPivot('quantity');
    }

    public function customer()
    {
    return $this->belongsTo(Customer::class);
    }
    protected $dates =['deleted_at'];
}
