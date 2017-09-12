<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public $fillable = ['name','feedback','AID'];
}
