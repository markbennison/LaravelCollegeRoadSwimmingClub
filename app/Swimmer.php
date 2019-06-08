<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swimmer extends Model
{
    protected $table = 'swimmer';
    protected $primaryKey = 'swimmerid';

    public function trainingevents()
    {
        return $this->hasMany('App\TrainingEvent', 'swimmerid');
    }

    public function laneassignments()
    {
        return $this->hasMany('App\LaneAssignment', 'swimmerid');
    }

    public function swimmerparents()
    {
        return $this->hasMany('App\SwimmerParent', 'swimmerid');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'swimmerid');
    }

    public function coach()
    {
        return $this->belongsTo('App\User', 'coachid');
    }
    
}
