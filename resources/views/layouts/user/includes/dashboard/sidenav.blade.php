  <!-- ================================
       START DASHBOARD NAV
================================= -->
<div class="sidebar-nav">
    <div class="sidebar-nav-body">
      <div class="side-menu-close">
        <i class="la la-times"></i>
      </div>
      <!-- end menu-toggler -->
      <div class="author-content">
        <div class="d-flex align-items-center">
          <div class="author-img avatar-sm">
            <img src="images/team8.jpg" alt="testimonial image" />
          </div>
          <div class="author-bio">
            <h4 class="author__title">Ali Tufan</h4>
            <span class="author__meta"></span>
          </div>
        </div>
      </div>
      <div class="sidebar-menu-wrap">
        <ul class="sidebar-menu list-items">
          <li class="{{Request::routeIs('user_dashboard') ? 'page-active' : '' }}">
            <a href="{{ route('user_dashboard') }}"
              ><i class="la la-dashboard mr-2"></i>Dashboard</a
            >
          </li>
          <li class="{{Request::routeIs('user_dashboard.booking') ? 'page-active' : '' }}">
            <a href="{{ route('user_dashboard.booking') }}"
              ><i class="la la-shopping-cart mr-2 text-color"></i>My
              Booking</a
            >
          </li>
          <li class="{{Request::routeIs('user_dashboard.profile') ? 'page-active' : '' }}">
            <a href="{{route('user_dashboard.profile')}}"
              ><i class="la la-user mr-2 text-color-2"></i>My Profile</a
            >
          </li>
          <li class="{{Request::routeIs('user_dashboard.review') ? 'page-active' : '' }}">
            <a href="{{ route('user_dashboard.review') }}"
              ><i class="la la-star mr-2 text-color-3"></i>My Reviews</a
            >
          </li>
          <li class="{{Request::routeIs('user_dashboard.wishlist') ? 'page-active' : '' }}">
            <a href="{{ route('user_dashboard.wishlist') }}"
              ><i class="la la-heart mr-2 text-color-4"></i>Wishlist</a
            >
          </li>
          <li>
            <a href="user-dashboard-settings.html"
              ><i class="la la-cog mr-2 text-color-5"></i>Settings</a
            >
          </li>
          <li>
            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()";
              ><i class="la la-power-off mr-2 text-color-6"></i>Logout</a
            >
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
          </li>
          




        </ul>
      </div>
      <!-- end sidebar-menu-wrap -->
    </div>
  </div>
  <!-- end sidebar-nav -->
  <!-- ================================
     END DASHBOARD NAV
================================= -->