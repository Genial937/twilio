<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="">
        <img src="img/logo.svg" class="navbar-brand-img 
        mx-auto" alt="...">
      </a>

      <!-- User (xs) -->
      <div class="navbar-user d-md-none">

        <!-- Dropdown -->
        <div class="dropdown">

          <!-- Toggle -->
          <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-sm avatar-online">
              <img src="img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
            </div>
          </a>

          <!-- Menu -->
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
            <a href="{{ route('profile.index') }}" class="dropdown-item">Profile</a>
            {{-- <a href="" class="dropdown-item">Settings</a> --}}
            <hr class="dropdown-divider">
            <a href="{{ route('logout.index') }}" class="dropdown-item">Logout</a>
          </div>

        </div>

      </div>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">

        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fe fe-search"></span>
              </div>
            </div>
          </div>
        </form>

        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}">
              <i class="fe fe-home"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('apps.index') }}">
              <i class="fe fe-github"></i> Apps
            </a>
          </li>
          @role('Admin')
          <li class="nav-item">
            <a class="nav-link" href="#sidebarPages1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
              <i class="fe fe-users"></i> Teams
            </a>
            <div class="collapse " id="sidebarPages1">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{ route('clients.index') }}" class="nav-link">
                    Teams
                  </a>
                 
                </li>
            
              </ul>
            </div>
          </li>
          @endrole
          <li class="nav-item">
            <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
              <i class="fe fe-user"></i> Users
            </a>
            <div class="collapse " id="sidebarPages">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="{{ route('users.index') }}" class="nav-link">
                    Users
                  </a>
                </li>
                @role('Admin')
                <li class="nav-item">
                  <a href="{{ route('admin.index') }}" class="nav-link">
                    Admins
                  </a> 
                </li>
                @endrole
            
              </ul>
            </div>
          </li>
         @role('Client')
         <li class="nav-item">
          <a class="nav-link" href="#sidebarPages2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
            <i class="fe fe-align-center"></i> Contacts
          </a>
          <div class="collapse " id="sidebarPages2">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="{{ route('tags.index') }}" class="nav-link">
                  Tags
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contacts.index') }}" class="nav-link">
                  Contacts
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('import.index') }}" class="nav-link">
                    Import Contacts
                  </a>
                </li>
          
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sidebarPages3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
            <i class="fe fe-message-square"></i> SMS
          </a>
          <div class="collapse " id="sidebarPages3">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="{{ route('sms.index') }}" class="nav-link">
                  All SMS
                </a>  
              </li>
              <li class="nav-item">
                  <a href="{{ route('sms.create') }}" class="nav-link">
                    Send SMS
                  </a>  
                </li>
          
            </ul>
          </div>
        </li>
        @can('has airtime subscription')
        <li class="nav-item">
          <a class="nav-link" href="#sidebarPages4" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
            <i class="fe fe-pocket"></i> Airtime
          </a>
          <div class="collapse " id="sidebarPages4">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="{{ route('airtime.index') }}" class="nav-link">
                  Airtime
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('airtime.index') }}" class="nav-link">
                  Send Airtime
                </a>
              </li>
          
            </ul>
          </div>
        </li>
        @endcan
        <li class="nav-item">
          <a class="nav-link" href="#sidebarPages11" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
            <i class="fe fe-message-square"></i> Top Up
          </a>
          <div class="collapse " id="sidebarPages11">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="{{ route('top-up.index') }}" class="nav-link">
                  Top Up History
                </a>  
              </li>
              <li class="nav-item">
                  <a href="{{ route('top-up.create') }}" class="nav-link">
                    Top Up
                  </a>  
                </li>
          
            </ul>
          </div>
        </li>
       
         @endrole
          <li class="nav-item">
            <a class="nav-link" href="#sidebarBasics1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBasics">
              <i class="fe fe-lock"></i> Roles
            </a>
            <div class="collapse " id="sidebarBasics1">
              <ul class="nav nav-sm flex-column">
               @role('Admin')
               <li class="nav-item ">
                <a href="{{ route('roles.index') }}" class="nav-link">
                  Roles
                </a>
              </li>
               @endrole
                <li class="nav-item ">
                  <a href="{{ route('permissions.index') }}" class="nav-link">
                    Permissions
                  </a>
                </li>
              </ul>
            </div>
          </li>
         
        </ul>
        {{-- <hr class="navbar-divider my-3"> --}}

        
        <!-- Divider -->
        <hr class="navbar-divider my-3">

        <!-- Heading -->
        <h6 class="navbar-heading">
          Documentation
        </h6>

        <!-- Navigation -->
        <ul class="navbar-nav mb-md-4">
          <li class="nav-item">
            <a class="nav-link" href="#sidebarBasics" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBasics">
              <i class="fe fe-clipboard"></i> Basics
            </a>
            <div class="collapse " id="sidebarBasics">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item ">
                  <a href="" class="nav-link">
                    How It Works
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="" class="nav-link">
                    Getting Started
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Divider -->
        <hr class="navbar-divider my-3">
          
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout.index') }}">
            <i class="fe fe-log-out"></i> Logout
          </a>
        </li>
        </ul>
        

        

        <!-- Push content down -->
        <div class="mt-auto"></div>

        

        
        <!-- User (md) -->
        <div class="navbar-user d-none d-md-flex" id="sidebarUser">

          <!-- Icon -->
          <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
            <span class="icon">
              {{-- <i class="fe fe-bell"></i> --}}
            </span>
          </a>

          <!-- Dropup -->
          <div class="dropup">

            <!-- Toggle -->
            <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-sm avatar-online">
                <img src="img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
              </div>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
              <a href="{{ route('profile.index') }}" class="dropdown-item">Profile</a>
              {{-- <a href="" class="dropdown-item">Settings</a> --}}
              <hr class="dropdown-divider">
              <a href="{{ route('logout.index') }}" class="dropdown-item">Logout</a>
            </div>

          </div>

          <!-- Icon -->
          <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
            <span class="icon">
              {{-- <i class="fe fe-search"></i> --}}
            </span>
          </a>

        </div>
        

      </div> <!-- / .navbar-collapse -->

    </div>
  </nav>