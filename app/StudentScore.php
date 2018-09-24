<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentScore extends Model
{
  protected $fillable = ['student_id', 'indonesia_1', 'indonesia_2', 'indonesia_3', 'indonesia_4',
    'english_1', 'english_2', 'english_3', 'english_4',
    'math_1', 'math_2', 'math_3', 'math_4',
    'major_1', 'major_2', 'major_3', 'major_4',
    'certificate'
  ];
}
