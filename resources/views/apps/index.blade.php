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
                        <h6 class="header-pretitle">
                            Overview
                        </h6>

                        {{-- <!-- Title -->
            <h1 class="header-title">
              Dashboard
            </h1> --}}

                    </div>
                    <div class="col-auto">

                        <!-- Button -->
                        <a href="{{ route('index') }}" class="btn btn-primary lift">
                            Dashboard
                        </a>

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
                        <h2 class="card-title">Apps</h2>
                       @role('Admin')
                       <a href="#" data-toggle="modal" data-target="#add" class="btn btn-success pull-right">Add App</a>
                       @endrole
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                <a href="#" data-dismiss="alert" class="close">&times;</a>
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif

                        @foreach ($apps as $app)
                            <div class="card mb-3">
                                <div class="card-body p-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <!-- Avatar -->
                                            <a href="{{ route('apps.show', $app->id) }}" class="pt-2">
                                                <h3>{{ $app->app_name }}</h3>
                                            </a>

                                        </div>
                                        <div class="col-md-8 text-right">
                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#!" class="dropdown-item">
                                                        Edit
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        View
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </div> <!-- / .card-body -->
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('apps.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h2 class="modal-title">Add App</h2>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">&times;</a>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">App Name</label>
                            <input type="text" name="app_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Sender ID</label>
                            <input type="text" name="sender_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Client</label>
                            <select name="client_id" id="" class="form-control" required>
                                <option value="" selected disabled>Select</option>
                                @foreach ($clients as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
