<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['user_id', 'schoolarship_id', 'amount', 'confirmation_photo'];
}
