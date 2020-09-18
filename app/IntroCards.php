<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IntroCards extends Model
{
    protected $table = 'intro_cards';

    protected $fillable = [
        'title','description','icon'
    ];
}
