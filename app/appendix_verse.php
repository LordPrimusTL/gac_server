<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appendix_verse extends Model
{
    public $fillable = ['hymn_id','verse_id','english','yoruba'];
}
