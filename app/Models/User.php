<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   protected $fillable = [ 
            'firstname',
            'Lastname',
            'Role',
            'BirthDate',
            'Position',
            'email',
            'password',
            'salt'

   ];
   protected $attributes = [  
            'BirthDate' => '1990-01-01',
            'firstname' => 'hello',
            'Lastname' => 'friend',
            'Position' => 'MMBS',
    ];
}
