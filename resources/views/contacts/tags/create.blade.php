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
            <div class="col-md-6 offset-md-3">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Add Tag</h2>
                        <a href="{{ route('tags.index') }}" class="btn btn-success pull-right">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                <a href="#" data-dismiss="alert" class="close">&times;</a>
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif
                        <form action="{{ route('tags.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Tag Name</label>
                                <input type="text" name="tag_name" class="form-control">
                            </div>
                           <div class="form-group text-right">
                               <button type="submit" class="btn btn-success">Submit</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
