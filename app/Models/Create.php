<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Create extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'currency',
        'image',
        'category_id',
        'Created_by'
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function photos() {
        return $this->hasone(Photo::class,'id','id');
    }
    public function Procurements() {
        return $this->hasone(Procurement::class);
    }
}
