<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'users',
        'trainer_id',
        'session_id',
        'status',
        'type',
        'session_date'
    ];
    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id');
    }
}
