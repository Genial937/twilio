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
                            Roles
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
                        <h2 class="card-title">Roles</h2>
                        <a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target="#add">Add Role</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                <a href="#" data-dismiss="alert" class="close">&times;</a>
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif
                        <table class="table table-sm">
                            <thead>
                                <th>#</th>
                                <th>Role</th>
                                {{-- <th>Action</th> --}}
                            </thead>
                            <tbody>
                                @php($count = 1)
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $role->name }}</td>
                                    {{-- <td></td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h3 class="card-title">Add Role</h3>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">&times;</a>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Role Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                       <a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
                       <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
