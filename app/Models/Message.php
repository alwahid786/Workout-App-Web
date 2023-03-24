<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'chat_id',
        'sender_id',
        'is_read',
        'text'
    ];
    public function chat()
    {
        return $this->belongsTo(Chat::class, 'chat_id');
    }
}
