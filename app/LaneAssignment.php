<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaneAssignment extends Model
{
    protected $table = 'laneassignment';

    public function swimmer()
    {
        return $this->belongsTo('App\Swimmer', 'swimmerid');
    }

    public function competitionevent()
    {
        return $this->belongsTo('App\CompetitionEvent', 'eventid');
    }
}
