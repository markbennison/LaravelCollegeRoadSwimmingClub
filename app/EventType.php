<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $table = 'eventtype';


    public function trainingevents()
    {
        return $this->hasMany('App\TrainingEvent', 'eventtypeid');
    }

    public function competitionevents()
    {
        return $this->hasMany('App\CompetitionEvent', 'eventtypeid');
    }


}
