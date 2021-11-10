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
            <div class="col-md-8 offset-md-2">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title">Add Contact</h2>
                        <a href="{{ route('contacts.store') }}" class="btn btn-success pull-right">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            <a href="#" data-dismiss="alert" class="close">&times;</a>
                            <p>{{ session('status') }}</p>
                        </div>
                        @endif
                        <form action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="i.e 0743160199" value="{{ old('phone') }}" max="10" required>
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tag</label>
                                <select name="tag_id" id="" class="form-control" required>
                                    <option value="" selected disabled>Select</option>
                                    @foreach ($tags as $item)
                                        <option value="{{ $item->id }}">{{ $item->tag_name }}</option>
                                    @endforeach
                                </select>
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
