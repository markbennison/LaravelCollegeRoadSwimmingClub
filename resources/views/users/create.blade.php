@extends('layouts.app')

@section('content')

<h1>User Add</h1>

<div class="row">
    <div class="col text-right">
        <h3>
            <a href="./" class=""><span class="fas fa-th-list btn btn-primary"></span></a>
        </h3>
    </div>
</div>

<div class="row">
    <div class="col">
        <form method="POST" action="/users">
            {{ csrf_field() }}
            
            <table id="formview" class="table table-sm table-borderless">
                <tr>
                    <th>ID</th>
                    <td><input type="text" name="id" class="form-control" value="AUTO" disabled /></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td><input type="text" name="username" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="plain_password" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Confirm Password</th>
                    <td><input type="password" name="confirm_password" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Forename</th>
                    <td><input type="text" name="forename" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Surname</th>
                    <td><input type="text" name="surname" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td><input type="text" name="dateofbirth" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><select name="gender" class="form-control">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input type="text" name="email" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Telephone</th>
                    <td><input type="text" name="telephone" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Address 1</th>
                    <td><input type="text" name="address1" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Address 2</th>
                    <td><input type="text" name="address2" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><input type="text" name="city" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Post Code</th>
                    <td><input type="text" name="postcode" class="form-control" value="" /></td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td><select name="roleid" class="form-control">
                        <option value="1">Guest</option>
                        <option value="2">Swimmer</option>
                        <option value="3">Parent</option>
                        <option value="4">Coach</option>
                        <option value="5">Admin</option>
                  </select></td>
                </tr>
                <tr>
                    <th>Registration Date</th>
                    <td><input type="text" name="registrationdate" class="form-control" value="" /></td>
                </tr>
            </table>

            
            <div id="operations">
                <input class="btn btn-primary" type="submit" value="Add" />
            </div>
          </form>


    </div>
</div>

@endsection