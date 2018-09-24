<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    protected $fillable = ['user_id', 'student_number', 'school', 'religion', 'father_name', 'mother_name',
      'father_job', 'mother_job', 'father_phone', 'mother_phone',
      'parent_address', 'choosen_university', 'choosen_major1', 'choosen_major2'
    ];
}
