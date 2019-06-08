@extends('layouts.app')

@section('content')

<h1>Competition: {{ $competition->title }}</h1>

<div class="row">
    <div class="col-8 text-left">
        <h3>Competition Details</h3>
    </div>
    <div class="col text-right">
        <h3>
            <a href="./" class=""><span class="fas fa-th-list btn btn-primary"></span></a>
        </h3>
    </div>
</div>

<div class="row">
    <div class="col">
        <form>
            {{ csrf_field() }}
            
            <table id="formview" class="table table-sm table-borderless">
                <tr>
                    <th>ID</th>
                    <td>{{ $competition->id }}</td>
                </tr>
                <tr>
                    <th>Competition Name</th>
                    <td>{{ $competition->title }}</td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td>{{ $competition->startdate }}</td>
                </tr>
            </table>
          </form>

    </div>
</div>

<div class="row mt-5">
    <div class="col">
        <h3>Events</h3>
    </div>
</div>

<div class="row">
    <div class="col">
        @foreach($competitionevents as $competitionevent)
            <h4>{{ $competitionevent->eventtype->name }} ({{ $competitionevent->date }})</h4>          
            <p class="container ml-3">Qualifying Time: {{ $competitionevent->eventtype->qualifyingtime }}</p>
            <div class="container ml-5">
                <div class="row">
                    <div class="col">
                    <table id="listview" class="table table-condensed">
                        <tr>
                        <th>Heat</th>
                        <th>Lane</th>
                        <th>Swimmer ID</th>
                        <th>Swimmer Name</th>
                        <th>Swim Time</th>
                        <th>Status</th>
                        <th>Place</th>
                        <th>View</th>
                        
                        @foreach($competitionevent->laneassignments as $laneassignment)
                            <tr class="">
                                <td>{{ $laneassignment->heatnumber }}</td>
                                <td>{{ $laneassignment->lanenumber }}</td>
                                <td>{{ $laneassignment->swimmerid }}</td>
                                <td>{{ $laneassignment->swimmer->user->forename }} {{ $laneassignment->swimmer->user->surname }}</td>
                                <td>{{ $laneassignment->time }}</td>
                                <td>{{ $laneassignment->status }}</td>
                                <td>{{ $laneassignment->place }}</td>
                                <td class="text-center"><a href="/swimmer/{{ $laneassignment->swimmerid }}"><span class="fas fa-eye"></span></a></td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection