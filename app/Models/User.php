<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'password',
        'date_of_birth',
        'phone_number',
        'state',
        'country',
        'gender',
        'role',
        'chef_expertise',
        'chef_hourly_rate',
        'profile_photo',
    ];

    // Hidden attributes that should not be serialized
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast attributes to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

    // Mutator to hash the password before saving it to the database
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
