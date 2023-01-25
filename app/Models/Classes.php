<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'trainer_id',
        'price'
    ];

    public function trainer()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function session()
    {
        return $this->hasOne(Session::class, 'class_id')->latestOfMany();
    }
    public function classSession()
    {
        return $this->hasMany(Session::class, 'class_id');
    }
    public function classImage()
    {
        return $this->hasMany(ClassImage::class, 'class_id');
    }
    // public function trainer()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
