<?php

namespace App\Http\Controllers;

use App\CompetitionEvent;
use App\Competition;
use Illuminate\Http\Request;

class CompetitionEventController extends Controller
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
        //$competitionevents = CompetitionEvent::all(); //->unique('eventtypeid')->sortBy('eventtype.name');
        $competitions = Competition::all();
        return view('competitionevent.index', compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompetitionEvent  $competitionEvent
     * @return \Illuminate\Http\Response
     */
    public function show($competitionid)
    {
        $competition = Competition::findOrFail($competitionid);
        $competitionevents = CompetitionEvent::where('competitionid', $competitionid)->get()->sortBy('eventtype.name');
        
        return view('competitionevent.show', compact('competition', 'competitionevents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompetitionEvent  $competitionEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(CompetitionEvent $competitionEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompetitionEvent  $competitionEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompetitionEvent $competitionEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompetitionEvent  $competitionEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompetitionEvent $competitionEvent)
    {
        //
    }
}
