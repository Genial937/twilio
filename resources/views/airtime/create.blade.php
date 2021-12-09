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

     {{-- Spinners --}}
     <div class="spin-container" id="spin">
        <div class="la-ball-spin la-2x my-spin">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    {{-- /Spinners --}}
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
                        <div class="alert alert-success" id="alert">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <p><b><span id="response_text"></span></b></p>
                        </div>
                        <form id="send-airtime">
                            <div class="form-group">
                                <label for="">Tag</label>
                                <select name="" id="tag_id" class="form-control" required>
                                    <option value="" selected>Select</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->tag_name }}, {{ $tag->contacts->count() }} contacts</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="number" class="form-control" id="amount" required>
                            </div>
                            <div class="forn-group text-right">
                                <button type="submit" class="btn btn-primary pull-right">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #alert{
                display: none;
            }
            #spin{
                display: none;
            }
        </style>
    </div>
@endsection
