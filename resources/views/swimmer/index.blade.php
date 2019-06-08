@extends('layouts.app')

@section('content')

<h1>Swimmer List</h1>

<div class="row">
  <div class="col">
    <table id="listview" class="table table-condensed">
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Forename</th>
        <th>Surname</th>
        <th>DoB</th>
        <th>Reg Date</th>
        <th>View</th>
      </tr>
      @foreach($swimmers as $swimmer)
      <tr>
          <td>{{ $swimmer->swimmerid }}</td>
          <td>{{ $swimmer->user->username }}</td>
          <td>{{ $swimmer->user->forename }}</td>
          <td>{{ $swimmer->user->surname }}</td>
          <td>{{ $swimmer->user->dateofbirth }}</td>
          <td>{{ $swimmer->user->registrationdate }}</td>
          
          <td class="text-center"><a href="/swimmer/{{ $swimmer->swimmerid }}"><span class="fas fa-eye"></span></a></td>
      </tr>
      @endforeach

      </table>
  </div>
</div>

@endsection