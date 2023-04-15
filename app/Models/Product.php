<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasOne('\App\Models\User');
    }

    public function manufacturer() {
        return $this->hasOne('\App\Models\Manufacturer');
    }
}
