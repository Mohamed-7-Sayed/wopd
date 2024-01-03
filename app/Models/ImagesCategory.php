<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesCategory extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function ImagesCategory() {
        return $this->hasOne(Category::class);
    }
}
