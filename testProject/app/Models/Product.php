<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    //
    protected $fillable = ['name', 'categoryId', 'price'];

    public function category() {
        return $this->belongsTo(Category:: class);
    }

}
