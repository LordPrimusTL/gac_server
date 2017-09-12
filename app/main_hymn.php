<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class main_hymn extends Model
{
    public $fillable = ['english','yoruba','has_chorus','bible_text','hymn_id','n_verses','verse_count','completed'];
}
