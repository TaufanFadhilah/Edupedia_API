<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolarship extends Model
{
    protected $fillable = ['university_id', 'description', 'photo'];
}
