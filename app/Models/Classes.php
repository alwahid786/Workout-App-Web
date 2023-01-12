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
}
