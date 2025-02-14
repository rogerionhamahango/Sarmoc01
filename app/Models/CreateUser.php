<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends Model
{
    use HasFactory;
    //Name of table for users

    protected $table = 'usertable';

    //Gapes to be filled on table

    protected $fillable = [
        'fullname',
        'email',
        'phonenumber',
        'password',
        'confirmpassword',
    ];
}
