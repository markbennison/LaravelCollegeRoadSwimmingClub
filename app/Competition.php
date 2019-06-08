<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table = 'competition';

    public function competitionevents()
    {
        return $this->hasMany('App\CompetitionEvent', 'competitionid');
    }
}
