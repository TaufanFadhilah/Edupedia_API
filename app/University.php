<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['user_id', 'university_code', 'website', 'description', 'accreditation', 'isVerified'];

    public function Achievement()
    {
      return $this->hasMany('App\UniversityAchievement');
    }

    public function Faculty()
    {
      return $this->hasMany('App\Faculty');
    }
}
