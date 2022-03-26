<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'name',
        'color',
        'age',
        'gender',
        'family',
        'health',
        'description',
        'main_image',
        'sub_image1',
        'sub_image2',
        'category_id',
        'user_id',
        'is_verified',

    ];
}
