<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'user_id',
        'customer_id',
        'is_completed'
    ];
    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
