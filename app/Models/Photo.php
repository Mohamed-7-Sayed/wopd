<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [

    ];
    public function Create_Photos() {
        return $this->hasOne(Create::class);
    }

    protected $attributes = [
        'status' => 'inactive',
    ];

    public function Status() {
        return $this->status == 'active';
    }


}
