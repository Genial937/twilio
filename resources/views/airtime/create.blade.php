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
                            Airtime
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
                        <h2 class="card-title">Send Airtime</h2>
                        <a href="{{ route('airtime.index') }}" class="btn btn-success pull-right">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Tag</label>
                                <select name="" id="" class="form-control">
                                    <option value="" selected>Select</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                                <p class="mt-1">2 characters <b>Kes. 560</b></p>
                            </div>
                            <div class="forn-group text-right">
                                <button class="btn btn-primary pull-right">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
