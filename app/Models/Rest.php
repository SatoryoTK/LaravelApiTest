<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;

    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
        'profile' => 'required'
    );
}
