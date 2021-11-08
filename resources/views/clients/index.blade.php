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
                            Clients
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
            <div class="col-md-9 m-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Clients</h2>
                        <a href="{{ route('clients.create') }}" class="btn btn-success pull-right">Add Client</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Apps</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @php($count = 1)
                                @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->contact_email }}</td>
                                    <td>{{ $client->contact_phone }}</td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
