<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['user_id', 'university_code', 'website', 'description', 'accreditation', 'isVerified'];
}
