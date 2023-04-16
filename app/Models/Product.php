<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'stock',
        'manufacturer_id',
        'user_id',
    ];

    public function user() {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function manufacturer() {
        return $this->hasOne(Manufacturer::class,'id','manufacturer_id');
    }
}
