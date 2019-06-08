@extends('layouts.app')

@section('content')

<h1>User List</h1>

<div class="row">
    <div class="col text-right">
        <h3>
            <a href="/users/create" class=""><span class="fas fa-plus btn btn-primary"></span></a>
        </h3>
    </div>
</div>

<div class="row">
    <div class="col">
      <table id="listview" class="table table-condensed">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Forename</th>
          <th>Surname</th>
          <th>DoB</th>
          <th>Role</th>
          <th>Reg Date</th>
          <th>View</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
  
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->forename }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->dateofbirth }}</td>
            <td>{{ $user->roleid }}</td>
            <td>{{ $user->registrationdate }}</td>
            
            <td class="text-center"><a href="/users/{{ $user->id }}"><span class="fas fa-eye"></span></a></td>
            <td class="text-center"><a href="/users/{{ $user->id }}/edit"><span class="fas fa-pen"></span></a></td>
            <form method="POST" action="/users/{{ $user->id }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
 
                <td class="text-center"><button type="submit" class="btn py-0 btn-link"><span class="fas fa-trash text-danger"></span></button></td>
            </form>
        </tr>
        @endforeach

        </table>
    </div>
</div>

@endsection