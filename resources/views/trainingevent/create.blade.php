@extends('layouts.app')

@section('content')

<h1>Create Event</h1>

<div class="row">
    <div class="col text-right">
        <h3>
            <a href="./" class=""><span class="fas fa-th-list btn btn-primary"></span></a>
        </h3>
    </div>
</div>

<div class="row">
    <div class="col">
        <form method="POST" action="/trainingevent">
            {{ csrf_field() }}
            <table id="formview" class="table table-sm table-borderless">
                <tr>
                    <th>Event Selection</th>
                    <td><select class="form-control" id="selecteventtype"  name="eventtypeid" >
                            @foreach ($events as $event)
                                <option value="{{ $event->id }}" >
                                    {{ $event->name }}
                                </option>
                            @endforeach
                        </select></td>
                </tr>
                <tr>
                    <th>Swimmer</th>
                    <td><select class="form-control" id="selectswimmer"  name="swimmerid" >
                        @foreach ($swimmers as $swimmer)
                            <option value="{{ $swimmer->swimmerid }}" >
                                {{ $swimmer->user['forename'] }} {{ $swimmer->user['surname'] }} ({{ $swimmer->user['dateofbirth'] }})
                            </option>
                        @endforeach
                    </select></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><input type="text" name="date" class="form-control" value="" /></td>
                </tr>
                <tr>
                   <th>Time (ms)</th>
                   <td><input type="text" name="time" class="form-control" value="" /></td>
                </tr>
            </table>
            
            <div id="operations">
                <input class="btn btn-primary" type="submit" value="Add" />
            </div>
          </form>


    </div>
</div>

@endsection