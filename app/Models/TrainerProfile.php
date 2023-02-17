<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'facebook_url',
        'instagram_url',
        'linkedin_url'
    ];
}
