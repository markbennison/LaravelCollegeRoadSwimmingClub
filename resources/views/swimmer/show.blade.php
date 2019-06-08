@extends('layouts.app')

@section('content')

<h1>Swimmer: {{ $swimmer->user->forename }} {{ $swimmer->user->surname }}</h1>

<div class="row">
    <div class="col-8 text-left">
        <h3>Personal Details</h3>
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
                    <td>{{ $swimmer->swimmerid }}</td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>{{ $swimmer->user->username }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $swimmer->user->forename }} {{ $swimmer->user->surname }}</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>{{ $swimmer->user->dateofbirth }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $swimmer->user->gender }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $swimmer->user->email }}</td>
                </tr>
                <tr>
                    <th>Telephone</th>
                    <td>{{ $swimmer->user->telephone }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $swimmer->user->address1 }}<br />
                        {{ $swimmer->user->address2 }}<br />
                        {{ $swimmer->user->city }}<br />
                        {{ $swimmer->user->postcode }}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{ $swimmer->user->roleid }}</td>
                </tr>
                <tr>
                    <th>Registration Date</th>
                    <td>{{ $swimmer->user->registrationdate }}</td>
                </tr>
            </table>
          </form>


    </div>
</div>

@endsection