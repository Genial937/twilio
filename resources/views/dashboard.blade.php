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
            <h6 class="header-pretitle">
              Overview
            </h6>

            <!-- Title -->
            <h1 class="header-title">
              Dashboard
            </h1>

          </div>
          <div class="col-auto">

            <!-- Button -->
            {{-- <a href="#!" class="btn btn-primary lift">
              Create Report
            </a> --}}

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
                      24,500
                    </span>

                    <!-- Badge -->
                    {{-- <span class="badge badge-soft-success mt-n1">
                      +3.5%
                    </span> --}}
                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    {{-- <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> --}}

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
                      Delivered SMS
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      24,400
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    {{-- <span class="h2 fe fe-briefcase text-muted mb-0"></span> --}}

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
                      35
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Chart -->
                    <div class="chart chart-sparkline">
                      {{-- <canvas class="chart-canvas" id="sparklineChart"></canvas> --}}
                    </div>

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
                      Net Expenditure
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      Kes. 34,000
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
       
      
        <div class="row">
          <div class="col-12">

            <!-- Goals -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h4 class="card-header-title">
                      Top History
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <a href="#!" class="btn btn-sm btn-white">
                      Export
                    </a>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="table-responsive p-3 mb-0" data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="goal-project">
                          Transaction ID
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="goal-status">
                          Transaction Date
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="goal-progress">
                          Amount
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted list-sort" data-sort="goal-date">
                         Transaction Number
                        </a>
                      </th>
                      <th class="text-right">
                        Balance
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                   
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
        {{-- <div class="row">
          <div class="col-12 col-xl-5">

            <!-- Activity -->
            <div class="card card-fill">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Recent Activity
                </h4>

                <!-- Button -->
                <a class="small" href="#!">View all</a>

              </div>
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush list-group-activity my-n3">
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Dianna Smiley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Uploaded the files "Launchday Logo" and "New Design".
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          2m ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-online">
                          <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Ab Hadley
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Shared the "Why Dashkit?" post with 124 subscribers.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          1h ago
                        </small>

                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item">
                    <div class="row">
                      <div class="col-auto">

                        <!-- Avatar -->
                        <div class="avatar avatar-sm avatar-offline">
                          <img class="avatar-img rounded-circle" src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." />
                        </div>

                      </div>
                      <div class="col ml-n2">

                        <!-- Heading -->
                        <h5 class="mb-1">
                          Adolfo Hess
                        </h5>

                        <!-- Text -->
                        <p class="small text-gray-700 mb-0">
                          Exported sales data from Launchday's subscriber data.
                        </p>

                        <!-- Time -->
                        <small class="text-muted">
                          3h ago
                        </small>

                      </div>
                    </div>
                    <!-- / .row -->
                  </div>
                </div>

              </div>
            </div>

          </div>
          <div class="col-12 col-xl-7">

            <!-- Checklist -->
            <div class="card">
              <div class="card-header">

                <!-- Title -->
                <h4 class="card-header-title">
                  Scratchpad Checklist
                </h4>

                <!-- Badge -->
                <span class="badge badge-soft-secondary">
                  23 Archived
                </span>

              </div>
              <div class="card-body">

                <!-- Checklist -->
                <div class="checklist">
                  <div class="custom-control custom-checkbox checklist-control">
                    <input class="custom-control-input" id="checklistOne" type="checkbox" />
                    <label class="custom-control-label" for="checklistOne"></label>
                    <span class="custom-control-caption">
                      Delete the old mess in functions files.
                    </span>
                  </div>
                  <div class="custom-control custom-checkbox checklist-control">
                    <input class="custom-control-input" id="checklistTwo" type="checkbox" />
                    <label class="custom-control-label" for="checklistTwo"></label>
                    <span class="custom-control-caption">
                      Refactor the core social sharing modules
                    </span>
                  </div>
                  <div class="custom-control custom-checkbox checklist-control">
                    <input class="custom-control-input" id="checklistThree" type="checkbox" />
                    <label class="custom-control-label" for="checklistThree"></label>
                    <span class="custom-control-caption">
                      Create the release notes for the new pages so customers get psyched.
                    </span>
                  </div>
                  <div class="custom-control custom-checkbox checklist-control">
                    <input class="custom-control-input" id="checklistFour" type="checkbox" />
                    <label class="custom-control-label" for="checklistFour"></label>
                    <span class="custom-control-caption">
                      Send Dianna those meeting notes
                    </span>
                  </div>
                  <div class="custom-control custom-checkbox checklist-control">
                    <input class="custom-control-input" id="checklistFive" type="checkbox" />
                    <label class="custom-control-label" for="checklistFive"></label>
                    <span class="custom-control-caption">
                      Share the documentation for the new unified API
                    </span>
                  </div>
                  <div class="custom-control custom-checkbox checklist-control">
                    <input class="custom-control-input" id="checklistSix" type="checkbox" checked />
                    <label class="custom-control-label" for="checklistSix"></label>
                    <span class="custom-control-caption">
                      Clean up the Figma file with all of the avatars, buttons, and other
                      components.
                    </span>
                  </div>
                </div>

              </div>
              <div class="card-footer">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Input -->
                    <textarea class="form-control form-control-flush form-control-auto" data-toggle="autosize" rows="1" placeholder="Create a task"></textarea>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <button class="btn btn-sm btn-primary">
                      Add
                    </button>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

          </div>
        </div> <!-- / .row --> --}}
      </div>
@endsection