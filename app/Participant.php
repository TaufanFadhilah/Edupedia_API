<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['student_id', 'schoolarship_id', 'isPassed'];
}
