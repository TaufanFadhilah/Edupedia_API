<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = ['university_id', 'name'];

    public function Majors()
    {
      return $this->hasMany('App\Majors');
    }
}
