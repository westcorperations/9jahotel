@extends('layouts.user.main')
@section('contents')

  <div>
   
<!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">
      <div class="header-top-bar padding-right-100px padding-left-100px" style="display:none;">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="header-top-content">
                <div class="header-left">
                  <ul class="list-items">
                    <li>
                      <a href="#"
                        ><i class="la la-phone mr-1"></i>+234(700) 077 0007</a
                      >
                    </li>
                    <li>
                      <a href="mailto:support@9jahotel.com"
                        ><i class="la la-envelope mr-1"></i>support@9jahotel.com</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="header-top-content">
                <div
                  class="header-right d-flex align-items-center justify-content-end"
                >
                  <!-- <div class="header-right-action">
                    <div class="select-contain select--contain w-auto">
                      <select class="select-contain-select">
                        <option
                          data-content='<span class="flag-icon flag-icon-id mr-1"></span> Bahasa Indonesia'
                        >
                          Bahasa Indonesia
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-de mr-1"></span> Deutsch'
                        >
                          Deutsch
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-us mr-1"></span> English(US)'
                          selected
                        >
                          English US
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-gb-eng mr-1"></span> English(UK)'
                        >
                          English UK
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-ro mr-1"></span> Romanian'
                        >
                          Romanian
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-es mr-1"></span> Espa���ol'
                        >
                          Espa���ol
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-fr mr-1"></span> Francais'
                        >
                          Francais
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-it mr-1"></span> Italiano'
                        >
                          Italiano
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-pl mr-1"></span> Polski'
                        >
                          Polski
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-pt mr-1"></span> Portuguese'
                        >
                          Portuguese
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-tr mr-1"></span> Turkish'
                        >
                          Turkish
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-ru mr-1"></span> Russian'
                        >
                          Russian
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-jp mr-1"></span> Japanese'
                        >
                          Japanese
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-cn mr-1"></span> Mandarin'
                        >
                          Mandarin
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-tw mr-1"></span> Mandarin Chinese'
                        >
                          Mandarin Chinese
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-kr mr-1"></span> Korean'
                        >
                          Korean
                        </option>
                        <option
                          data-content='<span class="flag-icon flag-icon-in mr-1"></span> Hindi'
                        >
                          Hindi
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="header-right-action">
                    <div class="select-contain select--contain w-auto">
                      <select class="select-contain-select">
                        <option value="1">AED</option>
                        <option value="2">AUD</option>
                        <option value="3">BRL</option>
                        <option value="4">CAD</option>
                        <option value="5">CHF</option>
                        <option value="6">CNY</option>
                        <option value="7">EUR</option>
                        <option value="8">GBP</option>
                        <option value="9">HKD</option>
                        <option value="10">IDR</option>
                        <option value="11">INR</option>
                        <option value="12">JPY</option>
                        <option value="13">KRW</option>
                        <option value="14">MYR</option>
                        <option value="15">NZD</option>
                        <option value="16">PHP</option>
                        <option value="17">PLN</option>
                        <option value="18">RUB</option>
                        <option value="19">SAR</option>
                        <option value="20">SGD</option>
                        <option value="21">THB</option>
                        <option value="22">TRY</option>
                        <option value="23">TWD</option>
                        <option value="24" selected>USD</option>
                        <option value="25">VND</option>
                        <option value="26">MXN</option>
                        <option value="27">ARS</option>
                        <option value="28">INR</option>
                      </select>
                    </div>
                  </div> -->
                  <div class="header-right-action">
                    <a
                      href="#"
                      class="theme-btn theme-btn-small theme-btn-transparent mr-1"
                      data-toggle="modal"
                      data-target="#signupPopupForm"
                      >Sign Up</a>
                    <a
                      href="#"
                      class="theme-btn theme-btn-small"
                      data-toggle="modal"
                      data-target="#loginPopupForm"
                      >Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="menu-wrapper">
                <a href="#" class="down-button"
                  ><i class="la la-angle-down"></i
                ></a>
                <div class="logo">
                  <a href="index.html"
                    ><img
                      src="https://www.9jahotels.ng/public/web/images/logo.jpeg"
                      alt="logo"
                  /></a>
                  <div class="menu-toggler">
                    <i class="la la-bars"></i>
                    <i class="la la-times"></i>
                  </div>
                  <!-- end menu-toggler -->
                </div>
                <!-- end logo -->
                <div class="main-menu-content">
                  <nav>
                    <ul>
                      <li>
                        <a href="index.html">Home</a>
                      </li>

                      <li>
                        <a href="hotel-search-result.html">Find Hotels </a>
                      </li>

                      <li>
                        <a href="group_booking.html">Group Bookings </a>
                      </li>

                    </ul>
                  </nav>
                </div>
                <!-- end main-menu-content -->
                <div class="nav-btn">
                  <a href="public/partner" class="theme-btn">Hotel Login</a>
                </div>
                <!-- end nav-btn -->
              </div>
              <!-- end menu-wrapper -->
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container-fluid -->
      </div>
      <!-- end header-menu-wrapper -->
    </header>
    <!-- ================================
         END HEADER AREA
================================= -->

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-10">
      <div class="breadcrumb-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="breadcrumb-content text-center">
                <div class="section-heading">
                  <h2 class="sec__title text-white">Room List</h2>
                </div>
                <span class="arrow-blink">
                  <i class="la la-arrow-down"></i>
                </span>
              </div>
              <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end breadcrumb-wrap -->
      <div class="bread-svg-box">
        <svg
          class="bread-svg"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 100 10"
          preserveAspectRatio="none"
        >
          <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
        </svg>
      </div>
      <!-- end bread-svg -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START CARD AREA
================================= -->
    <section class="card-area section--padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="filter-wrap margin-bottom-40px">
              <div
                class="filter-top d-flex align-items-center justify-content-between"
              >
                <div class="section-tab section-tab-3">
                  <ul class="nav nav-tabs" id="myTab4" role="tablist">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        id="all-tab"
                        data-toggle="tab"
                        href="#all"
                        role="tab"
                        aria-controls="all"
                        aria-selected="false"
                      >
                        All
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="dorm-beds-tab"
                        data-toggle="tab"
                        href="#dorm-beds"
                        role="tab"
                        aria-controls="dorm-beds"
                        aria-selected="false"
                      >
                        Dorm Beds
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="private-room-tab"
                        data-toggle="tab"
                        href="#private-room"
                        role="tab"
                        aria-controls="private-room"
                        aria-selected="false"
                      >
                        Private Room
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        id="suites-tab"
                        data-toggle="tab"
                        href="#suites"
                        role="tab"
                        aria-controls="suites"
                        aria-selected="false"
                      >
                        Suites
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- end section-tab -->
                <div class="layout-view d-flex align-items-center">
                  <a
                    href="room-grid.html"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Grid View"
                    ><i class="la la-th-large"></i
                  ></a>
                  <a
                    href="room-list.html"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="List View"
                    class="active"
                    ><i class="la la-th-list"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- end filter-wrap -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="tab-content" id="may-tabContent4">
          <div
            class="tab-pane fade show active"
            id="all"
            role="tabpanel"
            aria-labelledby="all-tab"
          >
            <div class="row">
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img5.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img29.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img30.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Premium Lake View Room</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$45.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Standard 2 Bed Male Dorm</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Deluxe King Bed Private</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Premium Lake View Suite</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Superior Room</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
          </div>
          <div
            class="tab-pane fade"
            id="dorm-beds"
            role="tabpanel"
            aria-labelledby="dorm-beds-tab"
          >
            <div class="row">
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Premium Lake View Suite</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Superior Room</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img5.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img29.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img30.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Premium Lake View Room</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$45.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Standard 2 Bed Male Dorm</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Deluxe King Bed Private</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
          </div>
          <div
            class="tab-pane fade"
            id="private-room"
            role="tabpanel"
            aria-labelledby="private-room-tab"
          >
            <div class="row">
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img5.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img29.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img30.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Premium Lake View Room</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$45.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Standard 2 Bed Male Dorm</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Deluxe King Bed Private</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Premium Lake View Suite</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Superior Room</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
          </div>
          <div
            class="tab-pane fade"
            id="suites"
            role="tabpanel"
            aria-labelledby="suites-tab"
          >
            <div class="row">
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$45.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Standard 2 Bed Male Dorm</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Deluxe King Bed Private</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img5.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img29.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img30.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Premium Lake View Room</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Premium Lake View Suite</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
              <div class="col-lg-12">
                <div class="card-item card-item-list room-card">
                  <div
                    class="card-img-carousel carousel-action carousel--action"
                  >
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img31.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img32.jpg" alt="hotel-img" />
                      </a>
                    </div>
                    <div class="card-img">
                      <a href="{{ route('rooms.details') }}" class="d-block">
                        <img src="images/img33.jpg" alt="hotel-img" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-price pb-2">
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$145.00</span>
                      </p>
                    </div>
                    <h3 class="card-title font-size-26">
                      <a href="{{ route('rooms.details') }}">Superior Room</a>
                    </h3>
                    <p class="card-text pt-2">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Aperiam asperiores commodi deleniti hic inventore
                      laboriosam laborum molestias, non odit quaerat! Aperiam
                      culpa facilis fuga impedit.
                    </p>
                    <div class="card-attributes pt-3 pb-4">
                      <ul class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <i class="la la-bed"></i><span>2 Beds</span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-building"></i
                          ><span>24 ft<sup>2</sup></span>
                        </li>
                        <li class="d-flex align-items-center">
                          <i class="la la-bathtub"></i><span>2 Bathrooms</span>
                        </li>
                      </ul>
                    </div>
                    <div class="card-btn">
                      <a
                        href="{{ route('rooms.details') }}"
                        class="theme-btn theme-btn-transparent"
                        >Book Now</a
                      >
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="btn-box mt-4 text-center">
              <button type="button" class="theme-btn">
                <i class="la la-refresh mr-1"></i>Load More
              </button>
              <p class="font-size-13 pt-2">Showing 1 - 5 of 124 Rooms</p>
            </div>
            <!-- end btn-box -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end card-area -->
    <!-- ================================
    END CARD AREA
================================= -->

    <!-- ================================
    START CHECK AVAILABILITY AREA
================================= -->
    <section class="check-availability-area section-bg section-padding">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="check-availability-content">
              <div class="section-heading text-center">
                <h2 class="sec__title">Book Your Stay</h2>
              </div>
              <!-- end section-heading -->
              <div class="contact-form-action padding-top-40px">
                <form action="#">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="input-box">
                        <label class="label-text">Check-in</label>
                        <div class="form-group">
                          <span class="la la-calendar form-icon"></span>
                          <input
                            class="date-range form-control"
                            type="text"
                            name="daterange-single"
                            readonly
                          />
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-3 -->
                    <div class="col-lg-3">
                      <div class="input-box">
                        <label class="label-text">Check-out</label>
                        <div class="form-group">
                          <span class="la la-calendar form-icon"></span>
                          <input
                            class="date-range form-control"
                            type="text"
                            name="daterange-single"
                            readonly
                          />
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-3 -->
                    <div class="col-lg-3">
                      <div class="input-box">
                        <label class="label-text">Rooms</label>
                        <div class="form-group">
                          <div class="select-contain w-auto">
                            <select class="select-contain-select">
                              <option value="0">Select Rooms</option>
                              <option value="1" selected>1 Room</option>
                              <option value="2">2 Rooms</option>
                              <option value="3">3 Rooms</option>
                              <option value="4">4 Rooms</option>
                              <option value="5">5 Rooms</option>
                              <option value="6">6 Rooms</option>
                              <option value="7">7 Rooms</option>
                              <option value="8">8 Rooms</option>
                              <option value="9">9 Rooms</option>
                              <option value="10">10 Rooms</option>
                              <option value="11">11 Rooms</option>
                              <option value="12">12 Rooms</option>
                              <option value="13">13 Rooms</option>
                              <option value="14">14 Rooms</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-3 -->
                    <div class="col-lg-3">
                      <div class="input-box">
                        <label class="label-text">Guests</label>
                        <div class="form-group">
                          <div class="dropdown dropdown-contain">
                            <a
                              class="dropdown-toggle dropdown-btn"
                              href="#"
                              data-toggle="dropdown"
                            >
                              <span
                                >Total Guests
                                <span class="qtyTotal guestTotal">0</span></span
                              >
                            </a>
                            <div class="dropdown-menu dropdown-menu-wrap">
                              <div class="dropdown-item">
                                <div
                                  class="qty-box d-flex align-items-center justify-content-between"
                                >
                                  <label>Adults</label>
                                  <div class="qtyBtn d-flex align-items-center">
                                    <div class="qtyDec">
                                      <i class="la la-minus"></i>
                                    </div>
                                    <input
                                      type="text"
                                      name="qtyInput"
                                      value="0"
                                    />
                                    <div class="qtyInc">
                                      <i class="la la-plus"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end dropdown-item -->
                              <div class="dropdown-item">
                                <div
                                  class="qty-box d-flex align-items-center justify-content-between"
                                >
                                  <label
                                    >Children <span>2-12 years old</span></label
                                  >
                                  <div class="qtyBtn d-flex align-items-center">
                                    <div class="qtyDec">
                                      <i class="la la-minus"></i>
                                    </div>
                                    <input
                                      type="text"
                                      name="qtyInput"
                                      value="0"
                                    />
                                    <div class="qtyInc">
                                      <i class="la la-plus"></i>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end dropdown-item -->
                              <div class="dropdown-item">
                                <div
                                  class="qty-box d-flex align-items-center justify-content-between"
                                >
                                  <label
                                    >Infants <span>0-2 years old</span></label
                                  >
                                  <div class="qtyBtn d-flex align-items-center">
                                    <div class="qtyDec">
                                      <i class="la la-minus"></i>
                                    </div>
                                    <input
                                      type="text"
                                      name="qtyInput"
                                      value="0"
                                    />
                                    <div class="qtyInc">
                                      <i class="la la-plus"></i>
                                    </div>
                                  </div>
                                </div>
                                <!-- end qty-box -->
                              </div>
                              <!-- end dropdown-item -->
                            </div>
                          </div>
                          <!-- end dropdown -->
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-3 -->
                    <div class="col-lg-12">
                      <div class="btn-box text-center pt-2">
                        <a href="#" class="theme-btn">Check Availability</a>
                      </div>
                    </div>
                    <!-- end col-lg-3 -->
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end check-availability-area -->
    <!-- ================================
    END CHECK AVAILABILITY AREA
================================= -->

    <!-- ================================
       START FOOTER AREA
================================= -->
   @include('layouts.user.includes.footer')

    <!-- end modal-shared -->
    <div class="modal-popup">
      <div
        class="modal fade"
        id="modifyPopupForm"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div>
                <h5 class="modal-title title" id="exampleModalLongTitle3">
                  Book Your Stay
                </h5>
              </div>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true" class="la la-close"></span>
              </button>
            </div>
            <div class="modal-body">
              <div class="contact-form-action">
                <form action="#">
                  <div class="row">
                    <div class="col-lg-6 col-sm-6">
                      <div class="input-box">
                        <label class="label-text">Check in</label>
                        <div class="form-group">
                          <span class="la la-calendar form-icon"></span>
                          <input
                            class="date-range form-control"
                            type="text"
                            name="daterange-single"
                            readonly
                          />
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6 col-sm-6">
                      <div class="input-box">
                        <label class="label-text">Check out</label>
                        <div class="form-group">
                          <span class="la la-calendar form-icon"></span>
                          <input
                            class="date-range form-control"
                            type="text"
                            name="daterange-single"
                            readonly
                          />
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6 col-sm-6">
                      <div class="input-box">
                        <label class="label-text">Adults</label>
                        <div class="form-group">
                          <div class="select-contain w-auto">
                            <select class="select-contain-select">
                              <option value="0">Select Adult</option>
                              <option value="1" selected>1 Adult</option>
                              <option value="2">2 Adults</option>
                              <option value="3">3 Adults</option>
                              <option value="4">4 Adults</option>
                              <option value="5">5 Adults</option>
                              <option value="6">6 Adults</option>
                              <option value="7">7 Adults</option>
                              <option value="8">8 Adults</option>
                              <option value="9">9 Adults</option>
                              <option value="10">10 Adults</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6 col-sm-6">
                      <div class="input-box">
                        <label class="label-text">Children</label>
                        <div class="form-group">
                          <div class="select-contain w-auto">
                            <select class="select-contain-select">
                              <option value="0">Select Children</option>
                              <option value="1" selected>1 Children</option>
                              <option value="2">2 Children</option>
                              <option value="3">3 Children</option>
                              <option value="4">4 Children</option>
                              <option value="5">5 Children</option>
                              <option value="6">6 Children</option>
                              <option value="7">7 Children</option>
                              <option value="8">8 Children</option>
                              <option value="9">9 Children</option>
                              <option value="10">10 Children</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-12">
                      <div class="btn-box pt-3">
                        <button type="button" class="theme-btn w-100">
                          Check Availability
                        </button>
                      </div>
                    </div>
                    <!-- end col-lg-12 -->
                  </div>
                  <!-- end row -->
                </form>
              </div>
              <!-- end contact-form-action -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal-popup -->


  </div>



@endsection
