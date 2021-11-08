@extends('layouts.app')

@section('content')
@php
    error_reporting(0);
@endphp
  <!-- HEADER -->
  <div class="header">
    <div class="container-fluid">

      <!-- Body -->
      <div class="header-body">
        <div class="row align-items-end">
          <div class="col">

            <!-- Pretitle -->
            <h6 class="header-pretitle">
              Overview
            </h6>

            <!-- Title -->
            <h1 class="header-title">
              {{ $app->app_name }}
            </h1>

          </div>
          <div class="col-auto">

            <!-- Button -->
            <a href="#!" class="btn btn-primary lift">
              Balance: Kes. 
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .header-body -->

    </div>
  </div> <!-- / .header -->
    <!-- CARDS -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-6 col-xl">

            <!-- Value  -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Total SMS
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $24,500
                    </span>

                    <!-- Badge -->
                    {{-- <span class="badge badge-soft-success mt-n1">
                      +3.5%
                    </span> --}}
                  </div>
                  <div class="col-auto">

                    {{-- <!-- Icon -->
                    <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> --}}

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Hours -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Sent SMS
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      763.5
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                   

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Exit -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Failed SMS
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      35.5%
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    {{-- <div class="chart chart-sparkline">
                      <canvas class="chart-canvas" id="sparklineChart"></canvas>
                    </div> --}}

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Time -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="text-uppercase text-muted mb-2">
                      Total Amount Spent
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      2:37
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    {{-- <span class="h2 fe fe-clock text-muted mb-0"></span> --}}

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
        
      </div>
@endsection