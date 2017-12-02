<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main_hymn extends Model
{
    public $fillable = ['english','yoruba','has_chorus','bible_text','n_verses','completed','verse_count'];
}
