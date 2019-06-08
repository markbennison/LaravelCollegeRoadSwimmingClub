<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionEvent extends Model
{
    protected $table = 'competitionevent';

    public function competition()
    {
        return $this->belongsTo('App\Competition', 'competitionid');
    }

    public function eventtype()
    {
        return $this->belongsTo('App\EventType', 'eventtypeid');
    }

    public function laneassignments()
    {
        return $this->hasMany('App\LaneAssignment', 'eventid');
    }
}
