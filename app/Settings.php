<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{

    protected $table = 'settings';

    protected $fillable = ['title', 'mainurl', 'email','link','address', 'logo', 'description',
        'phone', 'mobilephone','ctitle1','calttitle1','ctitle2','calttitle2','ctitle3','calttitle3','ctitle4','calttitle4','ctitle5','calttitle5','ctitle6','calttitle6','facebook','lat','lng'
    ];




}
