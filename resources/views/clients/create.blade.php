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
                        <h2 class="card-title">Add Client</h2>
                        <a href="{{ route('clients.index') }}" class="btn btn-success pull-right">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                <a href="#" data-dismiss="alert" class="close">&times;</a>
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif
                        <form action="{{ route('clients.store') }}" method="POST">
                            @csrf
                           <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Client Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Contact Email</label>
                                    <input type="text" name="contact_email" class="form-control" required>
                                </div>
                               </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Contact Phone</label>
                                    <input type="text" name="contact_phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Sender ID</label>
                                    <input type="text" name="sender_id" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Api Key</label>
                                    <input type="text" name="api_key" class="form-control" required>
                                </div>
                               </div>
                           </div>
                            <div class="form-group">
                                <label for="">Service Provider</label>
                                <select name="vendor" id="" class="form-control" required>
                                    <option value="" selected disabled>Select</option>
                                    <option value="AT">Africa's Talking</option>
                                    <option value="Mobi">Mobi Technologies</option>
                                </select>
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
