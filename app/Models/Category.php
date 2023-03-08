<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image'
    ];

    public function trainerCategory()
    {
        return $this->hasMany(Classes::class, 'category_id');
    }
    public function session()
    {
        return $this->hasMany(Session::class, 'category_id');
    }
}
