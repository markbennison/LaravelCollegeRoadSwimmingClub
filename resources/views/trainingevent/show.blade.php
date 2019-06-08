@extends('layouts.app')

@section('content')

<h1>Event Detail: {{ $event->name }}</h1>

<div class="row">
    <div class="col-8 text-left">
        <h3>Event Types</h3>
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
                    <th>Event ID</th>
                    <td>{{ $event->id }}</td>
                </tr>
                <tr>
                    <th>Event Name</th>
                    <td>{{ $event->name }}</td>
                </tr>
                <tr>
                    <th>Qualifying Time</th>
                    <td>{{ $event->qualifyingtime }}</td>
                </tr>
            </table>
          </form>

    </div>
</div>

<div class="row mt-5">
    <div class="col">
        <h3>Swimmer Trials</h3>
    </div>
</div>

<div class="row">
    <div class="col">
      <table id="listview" class="table table-condensed">
        <tr>
          <th>Trial ID</th>
          <th>Date</th>
          <th>Swimmer ID</th>
          <th>Swimmer Name</th>
          <th>Swim Time</th>
          <th>Qualifiying Time</th>
          <th>Difference</th>
          <th>View</th>
        </tr>
        @foreach($trainingevents as $trial)
        <tr>
            <td>{{ $trial->id }}</td>
            <td>{{ $trial->date }}</td>
            <td>{{ $trial->swimmerid }}</td>
            <td>{{ $trial->swimmer->user->forename }} {{ $trial->swimmer->user->surname }} </td>
            <td>{{ $trial->time }}</td>
            <td>{{ $trial->eventtype->qualifyingtime }}</td>
            <td></td>
            
            <td class="text-center"><a href="/swimmer/{{ $trial->swimmerid }}"><span class="fas fa-eye"></span></a></td>
        </tr>
        @endforeach
  
        </table>
    </div>
  </div>

@endsection