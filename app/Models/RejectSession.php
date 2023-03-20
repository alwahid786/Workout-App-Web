<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectSession extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainer_id',
        'user_id',
        'booked_session_id',
        'reason'
    ];
}
