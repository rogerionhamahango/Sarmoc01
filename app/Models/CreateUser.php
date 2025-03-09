<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends Model
{
    use HasFactory;
    //Name of table for users

    protected $table = 'users';

    //Gapes to be filled on table

    protected $fillable = [
        'fullname',
        'email',
        'phonenumber',
        'password',
        'confirmpassword',
    ];

        /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'confirmpassword'=> 'hashed'
    ];
}
