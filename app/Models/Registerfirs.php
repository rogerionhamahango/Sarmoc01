<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registerfirs extends Model
{
    use HasFactory;
    //Name of table

    protected $table = 'workertable';

    //fillable column of the table

    protected $fillable = [
        'fullname',
        'gender',
        'nuit',
        'numberofdocument',
        'provinceofbirth',
        'districofbirth',
        'fullfathername',
        'fullmothername',
        'birthday',
        'admissiondate',
        'academiclevel',
        'trainingarea',
        'phone1',
        'phone2',
        'document',
        'contract',
    ];
}
