<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installations extends Model
{
    public $fillable = ['Name','Branch','UUID','PhoneType','AID'];
}
