@extends('layouts.adminLayout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Active User                    
                </div>
                <div class="card-body">
                    <table border="2">
                        <thead>
                            <tr>
                                <th width="15%">First Name</th>
                                <th width="15%">Last Name</th>
                                <th width="15%">Email</th>
                                <th width="15%">Date of Borth</th>
                                <th width="5%">Gender</th>
                                <th width="5%">Hobbies</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->dob}}</td>
                                <td>{{$user->gender}}</td>
                                <td>{{$user->hobbies}}</td>
                                <td>
                                    <form action="deleteuser/{{$user->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="edituser/{{$user->id}}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
</div>
@endsection()