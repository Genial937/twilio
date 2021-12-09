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
                            Top Up
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
            <div class="col-md-8 m-auto">
                <div class="card shadow ">
                    <div class="card-header">
                        <h2 class="card-title">Top Up Here</h2>
                        <a href="{{ route('top-up.index') }}" class="btn btn-success pull-right"><i class="fa fa-chevron-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            
                        @endif
                        <form action="{{ route('top-up.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="number" name="amount" step="any" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Top Phone Number</label>
                                <input type="number" step="any" name="phone" class="form-control" placeholder="i.e 0743161189" required>
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
