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
                            Profile
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
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card shadow">
                <div class="card-body">

                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img class="avatar-img rounded-circle" src="img/avatars/profiles/avatar-1.jpg"
                                            alt="...">
                                    </div>

                                </div>

                            </div> <!-- / .row -->
                        </div>
                        <div class="col-auto">

                            <!-- Button -->
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#profile">
                                Change Profile Photo
                            </button>

                        </div>
                    </div> <!-- / .row -->
                    
                    <div class="modal fade" id="profile">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Profile</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <a href="#" data-dismiss="modal" class="btn btn-danger">Cancel</a>
                                        <button class="btn btn-success">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="my-5">

                    <form action="">
                        <div class="row">
                            <div class="col-12 col-md-6">

                                <!-- First name -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label>
                                        Name
                                    </label>

                                    <!-- Input -->
                                    <input type="text" class="form-control" value="{{ auth()->user()->name }}">

                                </div>

                            </div>
                            
                            <div class="col-12 col-md-6">

                                <!-- Email address -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="">
                                        Email address
                                    </label>

                                   

                                    <!-- Input -->
                                    <input type="email" class="form-control" value="{{ auth()->user()->email }}">

                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                                <!-- Phone -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label>
                                        Phone
                                    </label>

                                    <!-- Input -->
                                    <input type="text" class="form-control mb-3" placeholder=""
                                        value="{{ auth()->user()->phone }}">

                                </div>

                            </div>
                            <div class="col-12 text-right mb-3">
                                <button class="btn btn-primary pull-right">
                                    Update Changes
                                </button>
                            </div>
                            
                        </div> <!-- / .row -->

                        <!-- Button -->
                        
                    </form>

                    <!-- Divider -->
                    <hr class="my-5">

                    <div class="row">
                        <div class="col-md-12">
                            <form action="">
                                <h3>Change Password</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Current Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">New Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Confirm New Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group text-right">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- / .row -->


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
