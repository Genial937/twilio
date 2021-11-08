@extends('layouts.app')

@section('content')
    <!-- HEADER -->
    <div class="header">
        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">

                        <!-- Pretitle -->
                        {{-- <h6 class="header-pretitle">
                        Overview
                    </h6> --}}

                        <!-- Title -->
                        <h1 class="header-title">
                            Users
                        </h1>

                    </div>
                    <div class="col-auto">

                        <!-- Button -->
                        @include('layouts.header')

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .header-body -->

        </div>
    </div> <!-- / .header -->

    <!-- CARDS -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Users</h2>
                       @role('Admin')
                       <a href="{{ route('users.create') }}" class="btn btn-success pull-right">Add User</a>
                       @endrole
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                @role('Admin')
                                <th>Team</th>
                                @endrole
                                <th>Action</th>
                            </thead>
                            <tbody>
                               @foreach ($users as $user)
                               @php
                                   $team = App\Models\Client_user::where('user_id', $user->id)->with('client')->first();
                               @endphp
                               @role('Admin')
                               <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $team->client->name }}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                               @endrole
                               @role('Client')
                               <tr>
                                <td>{{ $user->users->name }}</td>
                                <td>{{ $user->users->email }}</td>
                                <td>{{ $user->users->phone }}</td>
                                
                                <td>
                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                               @endrole
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
