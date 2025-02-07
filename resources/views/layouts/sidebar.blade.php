   <!-- Sidebar -->
   <div class="sidebar" data-background-color="dark">
       <div class="sidebar-logo">
           <!-- Logo Header -->
           <div class="logo-header" data-background-color="dark">
               <a href="{{ url('home') }}" class="logo">
                   <img src="{{ URL::asset('/assets/img/logo.png') }}" alt="navbar brand" class="navbar-brand"
                       height="20" />
               </a>
               <div class="nav-toggle">
                   <button class="btn btn-toggle toggle-sidebar">
                       <i class="gg-menu-right"></i>
                   </button>
                   <button class="btn btn-toggle sidenav-toggler">
                       <i class="gg-menu-left"></i>
                   </button>
               </div>
               <button class="topbar-toggler more">
                   <i class="gg-more-vertical-alt"></i>
               </button>
           </div>
           <!-- End Logo Header -->
       </div>
       <div class="sidebar-wrapper scrollbar scrollbar-inner">
           <div class="sidebar-content">
               <ul class="nav nav-secondary">
                   @php
                       use Illuminate\Support\Str;

                       $activeRoute = request()->path();

                   @endphp

                   <li class="nav-item {{ $activeRoute === 'home' ? 'active' : '' }}">
                       <a href="{{ url('home') }}">
                           <i class="fas fa-home"></i>
                           <p>หน้าแรก</p>

                       </a>

                   </li>

               </ul>
           </div>
       </div>

   </div>
   <!-- End Sidebar -->
