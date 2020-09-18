<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderContent extends Model
{
    protected $table = 'slider_content';

    protected $fillable = [
        'image','title','description',
    ];
}
