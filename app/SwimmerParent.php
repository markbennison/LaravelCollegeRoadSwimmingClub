<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SwimmerParent extends Model
{
    protected $table = 'swimmerparent';

    public function swimmer()
    {
        return $this->belongsTo('App\Swimmer', 'swimmerid');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'parentid');
    }
}
