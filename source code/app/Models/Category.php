<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function animal()
    {
        return $this->hasMany(Animal::class);
    }
    protected $fillable = [
        'category_name',
        'category_image',

    ];
}
