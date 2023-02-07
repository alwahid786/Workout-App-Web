<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'class_id',
        'start_time',
        'end_time',
        'price',
        'difficulty_level',
        'type',
        'start_meridiem',
        'end_meridiem'
    ];
    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function trainerData()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }
    // public function trainerLocation()
    // {
    //     return $this->belongsTo(User::class, 'state');
    // }
}
