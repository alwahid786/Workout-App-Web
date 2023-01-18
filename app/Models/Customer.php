<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'user_id',
        'type',
        'status',
        'card_name',
        'card_number',
        'valid_thru'

    ];
}
