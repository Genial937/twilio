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
                            SMS
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
                        <h2 class="card-title">Send SMS</h2>
                        <a href="{{ route('admin.index') }}" class="btn btn-success pull-right">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="warn">
                            <strong>Warning!</strong> Insufficient balance!. Kindly top up <a href="" class="text-white">Here</a>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="alert alert-success alert-dismissible fade show" role="alert" id="success">
                            <strong>SMS sent successfully!</strong>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="alert alert-danger alert-dismissible fade show" role="alert" id="fail">
                            <strong>Failed to send message!</strong>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          
                        <form id="send-sms">
                            <div class="form-group">
                                <label for="">Tag</label>
                                <select name="tag_id" id="tag_id" onchange="getContacts(this.value)" class="form-control">
                                    <option value="" selected>Select</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->tag_name }}, {{ $tag->contacts->count() }} contacts</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <input type="hidden" id="num" value="1">
                                <textarea name="" id="message" cols="30" rows="6" class="form-control message"></textarea>
                                <div id="show" class="btn-group btn-group-justified mt-2">
                                    <a href="javascript:void(0)" class="btn btn-primary btn-sm"><span id="count">0</span> characters</a>
                                    <a href="javascript:void(0)" class="btn btn-success btn-sm"><b>Total: Kes. <span id="price"></span></b></a>
                                </div>
                                <input type="hidden" id="balance" class="balance" value="{{ App\Http\Controllers\Helpers\HelpersController::get_client_balance() }}">
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
    <style>
        #show{
            display: none;
        }
        #warn{
            display:none;
        }
        #spin{
            display: none;
        }
        #success, #fail{
            display: none;
        }
    </style>
@endsection
