<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appendix_hymn extends Model
{
    public $fillable = ['english','yoruba','has_chorus','bible_text'];
}
