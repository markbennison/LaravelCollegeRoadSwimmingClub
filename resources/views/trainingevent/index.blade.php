@extends('layouts.app')

@section('content')

<h1>Training Event List</h1>

<div class="row">
    <div class="col-8 text-left">
        <h3>Event Types</h3>
    </div>
    <div class="col-4 text-right">
        <?php $role = Auth::user()->roleid; ?>
        @if($role >= 4)
        <h3>
            <a href="/trainingevent/create" class=""><span class="fas fa-plus btn btn-primary"></span></a>
        </h3>
        @endif
    </div>
</div>

<div class="row">
  <div class="col">
    <table id="listview" class="table table-condensed">
      <tr>
        <th>Event Name</th>
        <th>Qualifying Time</th>
        <th>View</th>
      </tr>
      @foreach($trainingevents as $trial)
      <tr>
          <td>{{ $trial->eventtype->name }}</td>
          <td>{{ $trial->eventtype->qualifyingtime }}</td>
          
          <td class="text-center"><a href="/trainingevent/{{ $trial->eventtype->id }}"><span class="fas fa-eye"></span></a></td>
      </tr>
      @endforeach

      </table>
  </div>
</div>

@endsection