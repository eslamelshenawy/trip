<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Driver extends Authenticatable
{
    use HasFactory ,Notifiable;
    protected $fillable = [
        'id', 
        'firstName',
        'email',
        'lastName',
         'telephone',
         'birthdate',
         'nationality',
         'carType',
         'carModel',
         'capacity',
         'skiBox',
         'file',
         'fileLicenseInput',
         'criminalRecord',
        ];

}
