<?php

namespace App\Http\Controllers;

use App\TrainingEvent;
use App\EventType;
use App\Swimmer;
use Illuminate\Http\Request;

class TrainingEventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainingevents = TrainingEvent::all()->unique('eventtypeid')->sortBy('eventtype.name');
        return view('trainingevent.index', compact('trainingevents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_unless(auth()->user()->roleid >= 4, 403);
        $swimmers = Swimmer::all()->sortBy('user.surname');
        $events = EventType::all()->sortBy('name');
        return view('trainingevent.create', compact('swimmers', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_unless(auth()->user()->roleid == 4, 403);
        TrainingEvent::create([
            'eventtypeid' => $request['eventtypeid'],
            'swimmerid' => $request['swimmerid'],
            'date' => $request['date'],
            'time' => $request['time']
        ]);
        return redirect('/trainingevent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrainingEvent  $trainingEvent
     * @return \Illuminate\Http\Response
     */
    public function show($eventtypeid)
    {
        $event = EventType::findOrFail($eventtypeid);
        $trainingevents = TrainingEvent::where('eventtypeid', $eventtypeid)->get();
        return view('trainingevent.show', compact('event', 'trainingevents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainingEvent  $trainingEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingEvent $trainingEvent)
    {
        //
        abort_unless(auth()->user()->roleid == 4, 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainingEvent  $trainingEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingEvent $trainingEvent)
    {
        //
        abort_unless(auth()->user()->roleid == 4, 403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainingEvent  $trainingEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingEvent $trainingEvent)
    {
        //
        abort_unless(auth()->user()->roleid == 4, 403);
    }
}
