<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'reciever_id',
        'type_id',
        'noti_type',
        'noti_text',
        'is_read'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
    
}
