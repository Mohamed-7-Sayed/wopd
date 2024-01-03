<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'job',
        'age',
        'yourself',
        'year',
        'month',
        'day',
        'image',
        'Created_by'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
