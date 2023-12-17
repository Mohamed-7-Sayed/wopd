<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'create_id',
        'status',
        'Created_by'
    ];

    public function Creates() {
        return $this->hasOne(Create::class,'id','create_id');
    }

    public function Users() {
        return $this->hasOne(User::class,'id','id');
    }

    protected $attributes = [
        'status' => 'inactive',
    ];

    public function Status() {
        return $this->status == 'active';
    }
}
