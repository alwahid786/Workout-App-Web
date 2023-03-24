<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use PhpParser\Builder\Class_;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type',
        'otp_code',
        'profile_img',
        'phone',
        'date_of_birth',
        'gender',
        'country',
        'state',
        'weight',
        'height',
        'emergency_contact',
        'about',
        'relationship_emergency_contact',
        'workout_location',
        'madical_condition',
        'google_id',
        'insta_id',
        'facebook_id',
        'weight_unit',
        'hieght_unit',
        'update_status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function class()
    {
        return $this->hasMany(Classes::class, 'trainer_id');
    }

    public function session()
    {
        return $this->hasMany(Session::class, 'trainer_id');
    }
    public function trainer_profile()
    {
        return $this->hasOne(TrainerProfile::class, 'user_id');
    }
}
