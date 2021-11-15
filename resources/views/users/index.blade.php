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
                        @if (session('status'))
                            @include('layouts.success')
                        @endif
                        <table class="table table-sm">
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                @role('Admin')
                                <th>Team</th>
                                <th>Assign Permissions</th>
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
                                    <a href="#" data-toggle="modal" data-target="#perm{{ $user->id }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                </td>

                                <div class="modal fade" id="perm{{ $user->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <form action="{{ route('assign-permissions.update', $user->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="modal-header">
                                                    <h3 class="modal-title">Assign Permissions</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            @foreach ($permissions as $permission)
                                                    <div class="form-group">
                                                        <input type="checkbox" value="{{ $permission->name }}" name="permission[]"> {{ $permission->name }}
                                                    </div>
                                                    @endforeach
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h4><b>Current {{ $user->name }} Permissions</b></h4>
                                                            <ul>
                                                                @foreach ($user->permissions as $item)
                                                                    <li>{{ $item->name }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
                                                    <button class="btn btn-success" type="submit">Assign</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
