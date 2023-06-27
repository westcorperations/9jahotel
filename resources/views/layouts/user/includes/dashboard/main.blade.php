@extends('layouts.user.main')
@section('contents')

  <div class="section-bg">
   

    <!-- ================================
       START USER CANVAS MENU
================================= -->
    @include('layouts.user.includes.dashboard.canvas_menu')
    <!-- end user-canvas-container -->
    <!-- ================================
       END USER CANVAS MENU
================================= -->

    <!-- ================================
       START DASHBOARD NAV
================================= -->
   @include('layouts.user.includes.dashboard.sidenav')
    <!-- end sidebar-nav -->
    <!-- ================================
       END DASHBOARD NAV
================================= -->

    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-area">
      @include('layouts.user.includes.dashboard.navbar')
      <!-- end dashboard-nav -->
      @yield('dasboard_nav_contents')
      <!-- end dashboard-content-wrap -->
    </section>
    <!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

    <!-- start scroll top -->
    <div id="back-to-top">
      <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end scroll top -->

  
  </div>


 

@endsection