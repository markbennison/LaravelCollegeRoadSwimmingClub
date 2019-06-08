@extends('layouts.app')

@section('content')

<h1>Competition List</h1>

<div class="row">
  <div class="col">
    <table id="listview" class="table table-condensed">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Start Date</th>
        <th>View</th>
      </tr>
      @foreach($competitions as $competition)
      <tr>
          <td>{{ $competition->id }}</td>
          <td>{{ $competition->title }}</td>
          <td>{{ $competition->startdate }}</td>
          
          <td class="text-center"><a href="/competitionevent/{{ $competition->id }}"><span class="fas fa-eye"></span></a></td>
      </tr>
      @endforeach

      </table>
  </div>
</div>

@endsection