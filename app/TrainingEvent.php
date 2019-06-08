<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingEvent extends Model
{
    protected $table = 'trainingevent';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'eventtypeid', 'swimmerid', 'date', 'time'
    ];

    public function eventtype()
    {
        return $this->belongsTo('App\EventType', 'eventtypeid');
    }
    
    public function swimmer()
    {
        return $this->belongsTo('App\Swimmer', 'swimmerid');
    }


}
