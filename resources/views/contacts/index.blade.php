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
                            Contacts
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
            <div class="col-md-10 m-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Contacts</h2>
                        <a href="{{ route('contacts.create') }}" class="btn btn-success pull-right">Add Contact</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Tag</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                               @php($count = 1)
                               @foreach ($contacts as $contact)
                               <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->tags->tag_name }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit{{ $contact->id }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
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
