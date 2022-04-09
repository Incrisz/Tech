<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [

        'fullname', 'image', 'dob', 'email', 'city', 'state', 'country', 'phone', 'address1', 'address2', 'sex', 'marital_status', 'occupation', 'member_since'

    ];
}
