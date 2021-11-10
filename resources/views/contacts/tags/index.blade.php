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
                            Tags
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
                        <h2 class="card-title">Tags</h2>
                        <a href="{{ route('tags.create') }}" class="btn btn-success pull-right">Add Tag</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <th>#</th>
                                <th>Tag Name</th>
                                <th>No. of Contacts</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @php($count = 1)
                               @foreach ($tags as $tag)
                               <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $tag->tag_name }}</td>
                                <td>{{ $tag->contacts->count() }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit{{ $tag->id }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                </td>

                                <div class="modal fade" id="edit{{ $tag->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="">
                                                <div class="modal-header">
                                                    <h5>Edit Tag</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Tag Name</label>
                                                        <input type="text" class="form-control" value="{{ $tag->tag_name }}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-dismiss="modal" class="btn btn-danger">Close</a>
                                                    <button class="btn btn-success">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
