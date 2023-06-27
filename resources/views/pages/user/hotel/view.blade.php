@extends('layouts.user.main')
@section('contents')


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
                  class="header-right d-flex align-items-center justify-content-end">
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
                      src="images/logo.png"
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
                        <a href="hotel-search-result.html">Find Hotels</a>
                      </li>
                      
                      <li>
                        <a href="group_booking.html">Group Bookings</a>
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
    START BREADCRUMB TOP BAR
================================= -->
    <section class="breadcrumb-top-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-list breadcrumb-top-list">
              <ul class="list-items bg-transparent radius-none p-0">
                <li><a href="index.html">Home</a></li>
                <li>Hotels</li>
                <li id="property_name"></li>
              </ul>
            </div>
            <!-- end breadcrumb-list -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end breadcrumb-top-bar -->
    <!-- ================================
    END BREADCRUMB TOP BAR
================================= -->

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-7 py-0">
      <div class="breadcrumb-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="breadcrumb-btn">
                <div class="btn-box">
                  <a
                    class="theme-btn"
                    data-fancybox="video" id="property_video"
                    data-src="https://www.youtube.com/watch?v=5u1WISBbo5I"
                    data-speed="700"
                  >
                    <i class="la la-video-camera mr-2"></i>Video
                  </a>
                  <a
                    class="theme-btn"
                    data-fancybox="gallery"
                    data-caption="Showing image - 01"
                    id="image1"
                    data-speed="700"
                  >
                    <i class="la la-photo mr-2"></i>More Photos
                  </a>
                </div>
                <a
                  class="d-none"
                  data-fancybox="gallery"
                  data-src="images/img2.jpg"
                  data-caption="Showing image - 02"
                  data-speed="700"
                ></a>
              </div>
              <!-- end breadcrumb-btn -->
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end breadcrumb-wrap -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START TOUR DETAIL AREA
================================= -->
    <section class="tour-detail-area padding-bottom-90px">
      <div
        class="single-content-navbar-wrap menu section-bg"
        id="single-content-navbar"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="single-content-nav" id="single-content-nav">
                <ul>
                  <li>
                    <a
                      data-scroll="description"
                      href="#description"
                      class="scroll-link active"
                      >Hotel Details</a
                    >
                  </li>
                  <li>
                    <a
                      data-scroll="availability"
                      href="#availability"
                      class="scroll-link"
                      >Availability</a
                    >
                  </li>
                  <li>
                    <a
                      data-scroll="amenities"
                      href="#amenities"
                      class="scroll-link"
                      >Amenities</a
                    >
                  </li>
                  <li>
                    <a data-scroll="faq" href="#faq" class="scroll-link">Faq</a>
                  </li>
                  <li>
                    <a data-scroll="reviews" href="#reviews" class="scroll-link"
                      >Reviews</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end single-content-navbar-wrap -->
      <div class="single-content-box">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="single-content-wrap padding-top-60px">
                <div id="description" class="page-scroll">
                  <div class="single-content-item pb-4">
                    <h3 class="title font-size-26" id="property_name"></h3>
                    <div class="d-flex align-items-center pt-2">
                      <p class="mr-2" id="property_adress"></p>
                      <p>
                        <span
                          class="badge badge-warning text-white font-size-16"
                          id="property_rating"
                        ></span>
                        <!-- <span>(4,209 Reviews)</span> -->
                      </p>
                    </div>
                  </div>
                  <!-- end single-content-item -->
                  <div class="section-block"></div>
                  <!-- end single-content-item -->
                  <div class="section-block"></div>
                  <div
                    class="single-content-item padding-top-40px padding-bottom-40px"
                  >
                    <h3
                      class="title font-size-20"
                      id="property_description_about"
                    ></h3>
                    <p class="py-3" id="property_description"></p>
                  </div>
                  <!-- end single-content-item -->
                  <div class="section-block"></div>
                </div>
                <!-- end description -->
                <div id="availability" class="page-scroll">
                  <div
                    class="single-content-item padding-top-40px padding-bottom-30px"
                  >
                    <h3 class="title font-size-20 available-hide-desktop">
                      Availability
                    </h3>
                    <div class="contact-form-action padding-bottom-35px">
                      <form method="post" class="available-hide-desktop">
                        <div class="row">
                          <div class="col-lg-12 responsive-column">
                            <div class="input-box">
                              <label class="label-text"
                                >Check in - Check out</label
                              >
                              <div class="form-group">
                                <span class="la la-calendar form-icon"></span>
                                <input
                                  class="date-range form-control"
                                  type="text"
                                  name="daterange"
                                  readonly
                                  id="daterange"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Adults (18+)</label>
                              <div class="form-group">
                                <div class="select-contain w-auto">
                                  <select
                                    class="select-contain-select"
                                    id="adultInput"
                                  >
                                    <option value="0">Select Adults</option>
                                    <option value="1">1 Adults</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                    <option value="5">5 Adults</option>
                                    <option value="6">6 Adults</option>
                                    <option value="7">7 Adults</option>
                                    <option value="8">8 Adults</option>
                                    <option value="9">9 Adults</option>
                                    <option value="10">10 Adults</option>
                                    <option value="11">11 Adults</option>
                                    <option value="12">12 Adults</option>
                                    <option value="13">13 Adults</option>
                                    <option value="14">14 Adults</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 responsive-column">
                            <div class="input-box">
                              <label class="label-text">Children (0-17)</label>
                              <div class="form-group">
                                <div class="select-contain w-auto">
                                  <select
                                    class="select-contain-select"
                                    id="childInput"
                                  >
                                    <option value="0">Select Children</option>
                                    <option value="1">1 Children</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                    <option value="5">5 Children</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="btn-box">
                              <button type="button" class="theme-btn">
                                Search Now
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- end contact-form-action -->
                    <h3 class="title font-size-20">Available Rooms</h3>
                    <div id="room_list">
                      
                    </div>
                    <!-- end cabin-type -->
                  </div>

                  <button
                    class="theme-btn text-center w-100 mb-2"
                    id="book_now"
                  >
                    <i class="la la-shopping-cart mr-2 font-size-18"></i>Book Now
                  </button>
                  <!-- end single-content-item -->
                  <div class="section-block"></div>
                </div>
                <!-- end location-map -->
                <div id="amenities" class="page-scroll">
                  <div
                    class="single-content-item padding-top-40px padding-bottom-20px"
                  >
                    <h3 class="title font-size-20">Amenities</h3>
                    <div class="amenities-feature-item pt-4">
                      <div class="row">
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-wifi"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                WI-FI
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-check"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Swimming Pool
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-television"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Television
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-coffee"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Coffee
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-tree"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Air Conditioning
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-gear"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Fitness Facility
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-check"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Fridge
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-glass"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Wine Bar
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-music"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Entertainment
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-lock"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Secure Vault
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-car"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Pick And Drop
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-check"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Room Service
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-check-circle"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Pets Allowed
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-coffee"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Breakfast
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-car"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Free Parking
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-fire"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Fire Place
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-wheelchair"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Handicap Accessible
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-user-secret"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Doorman
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-building"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Elevator In Building
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-gift"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Suitable For Events
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-4 responsive-column">
                          <div
                            class="single-tour-feature d-flex align-items-center mb-3"
                          >
                            <div
                              class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3"
                            >
                              <i class="la la-gamepad"></i>
                            </div>
                            <div class="single-feature-titles">
                              <h3 class="title font-size-15 font-weight-medium">
                                Play Place
                              </h3>
                            </div>
                          </div>
                          <!-- end single-tour-feature -->
                        </div>
                        <!-- end col-lg-4 -->
                      </div>
                      <!-- end row -->
                    </div>
                  </div>
                  <!-- end single-content-item -->
                  <div class="section-block"></div>
                </div>
                <!-- end faq -->
                <div id="faq" class="page-scroll">
                  <div
                    class="single-content-item padding-top-40px padding-bottom-40px"
                  >
                    <h3 class="title font-size-20">FAQs</h3>
                    <div
                      class="accordion accordion-item padding-top-30px"
                      id="accordionExample2"
                    >
                      <div class="card">
                        <div class="card-header" id="faqHeadingFour">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                              type="button"
                              data-toggle="collapse"
                              data-target="#faqCollapseFour"
                              aria-expanded="true"
                              aria-controls="faqCollapseFour"
                            >
                              <span class="ml-3"
                                >How do I know a reservation is accepted or
                                confirmed?</span
                              >
                              <i class="la la-minus"></i>
                              <i class="la la-plus"></i>
                            </button>
                          </h2>
                        </div>
                        <div
                          id="faqCollapseFour"
                          class="collapse show"
                          aria-labelledby="faqHeadingFour"
                          data-parent="#accordionExample2"
                        >
                          <div class="card-body d-flex">
                            <p>
                              Mea appareat omittantur eloquentiam ad, nam ei
                              quas oportere democritum. Prima causae admodum id
                              est, ei timeam inimicus sed. Sit an meis aliquam,
                              cetero inermis vel ut. An sit illum euismod
                              facilisis Nullam id dolor id nibh ultricies
                              vehicula ut id elit.
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- end card -->
                      <div class="card">
                        <div class="card-header" id="faqHeadingFive">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                              type="button"
                              data-toggle="collapse"
                              data-target="#faqCollapseFive"
                              aria-expanded="false"
                              aria-controls="faqCollapseFive"
                            >
                              <span class="ml-3"
                                >Am I allowed to decline reservation
                                requests?</span
                              >
                              <i class="la la-minus"></i>
                              <i class="la la-plus"></i>
                            </button>
                          </h2>
                        </div>
                        <div
                          id="faqCollapseFive"
                          class="collapse"
                          aria-labelledby="faqHeadingFive"
                          data-parent="#accordionExample2"
                        >
                          <div class="card-body d-flex">
                            <p>
                              Mea appareat omittantur eloquentiam ad, nam ei
                              quas oportere democritum. Prima causae admodum id
                              est, ei timeam inimicus sed. Sit an meis aliquam,
                              cetero inermis vel ut. An sit illum euismod
                              facilisis Nullam id dolor id nibh ultricies
                              vehicula ut id elit.
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- end card -->
                      <div class="card">
                        <div class="card-header" id="faqHeadingSix">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                              type="button"
                              data-toggle="collapse"
                              data-target="#faqCollapseSix"
                              aria-expanded="false"
                              aria-controls="faqCollapseSix"
                            >
                              <span class="ml-3"
                                >What happens if I let a reservation request
                                expire?</span
                              >
                              <i class="la la-minus"></i>
                              <i class="la la-plus"></i>
                            </button>
                          </h2>
                        </div>
                        <div
                          id="faqCollapseSix"
                          class="collapse"
                          aria-labelledby="faqHeadingSix"
                          data-parent="#accordionExample2"
                        >
                          <div class="card-body d-flex">
                            <p>
                              Mea appareat omittantur eloquentiam ad, nam ei
                              quas oportere democritum. Prima causae admodum id
                              est, ei timeam inimicus sed. Sit an meis aliquam,
                              cetero inermis vel ut. An sit illum euismod
                              facilisis Nullam id dolor id nibh ultricies
                              vehicula ut id elit.
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- end card -->
                      <div class="card">
                        <div class="card-header" id="faqHeadingSeven">
                          <h2 class="mb-0">
                            <button
                              class="btn btn-link d-flex align-items-center justify-content-end flex-row-reverse font-size-16"
                              type="button"
                              data-toggle="collapse"
                              data-target="#faqCollapseSeven"
                              aria-expanded="false"
                              aria-controls="faqCollapseSeven"
                            >
                              <span class="ml-3"
                                >How do I set reservation requirements?</span
                              >
                              <i class="la la-minus"></i>
                              <i class="la la-plus"></i>
                            </button>
                          </h2>
                        </div>
                        <div
                          id="faqCollapseSeven"
                          class="collapse"
                          aria-labelledby="faqHeadingSeven"
                          data-parent="#accordionExample2"
                        >
                          <div class="card-body d-flex">
                            <p>
                              Mea appareat omittantur eloquentiam ad, nam ei
                              quas oportere democritum. Prima causae admodum id
                              est, ei timeam inimicus sed. Sit an meis aliquam,
                              cetero inermis vel ut. An sit illum euismod
                              facilisis Nullam id dolor id nibh ultricies
                              vehicula ut id elit.
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- end card -->
                    </div>
                  </div>
                  <!-- end single-content-item -->
                  <div class="section-block"></div>
                </div>
                <!-- end faq -->
                <div id="reviews" class="page-scroll" style="display: none">
                  <div
                    class="single-content-item padding-top-40px padding-bottom-40px"
                  >
                    <h3 class="title font-size-20">Reviews</h3>
                    <div class="review-container padding-top-30px">
                      <div class="row align-items-center">
                        <div class="col-lg-4">
                          <div class="review-summary">
                            <h2>4.5<span>/5</span></h2>
                            <p>Excellent</p>
                            <span>Based on 4 reviews</span>
                          </div>
                        </div>
                        <!-- end col-lg-4 -->
                        <div class="col-lg-8">
                          <div class="review-bars">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="progress-item">
                                  <h3 class="progressbar-title">Service</h3>
                                  <div
                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between"
                                  >
                                    <div class="progressbar-box flex-shrink-0">
                                      <div
                                        class="progressbar-line"
                                        data-percent="70%"
                                      >
                                        <div
                                          class="progressbar-line-item bar-bg-1"
                                        ></div>
                                      </div>
                                      <!-- End Skill Bar -->
                                    </div>
                                    <div class="bar-percent">4.6</div>
                                  </div>
                                </div>
                                <!-- end progress-item -->
                              </div>
                              <!-- end col-lg-6 -->
                              <div class="col-lg-6">
                                <div class="progress-item">
                                  <h3 class="progressbar-title">Location</h3>
                                  <div
                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between"
                                  >
                                    <div class="progressbar-box flex-shrink-0">
                                      <div
                                        class="progressbar-line"
                                        data-percent="55%"
                                      >
                                        <div
                                          class="progressbar-line-item bar-bg-2"
                                        ></div>
                                      </div>
                                      <!-- End Skill Bar -->
                                    </div>
                                    <div class="bar-percent">4.7</div>
                                  </div>
                                </div>
                                <!-- end progress-item -->
                              </div>
                              <!-- end col-lg-6 -->
                              <div class="col-lg-6">
                                <div class="progress-item">
                                  <h3 class="progressbar-title">
                                    Value for Money
                                  </h3>
                                  <div
                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between"
                                  >
                                    <div class="progressbar-box flex-shrink-0">
                                      <div
                                        class="progressbar-line"
                                        data-percent="40%"
                                      >
                                        <div
                                          class="progressbar-line-item bar-bg-3"
                                        ></div>
                                      </div>
                                      <!-- End Skill Bar -->
                                    </div>
                                    <div class="bar-percent">2.6</div>
                                  </div>
                                </div>
                                <!-- end progress-item -->
                              </div>
                              <!-- end col-lg-6 -->
                              <div class="col-lg-6">
                                <div class="progress-item">
                                  <h3 class="progressbar-title">Cleanliness</h3>
                                  <div
                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between"
                                  >
                                    <div class="progressbar-box flex-shrink-0">
                                      <div
                                        class="progressbar-line"
                                        data-percent="60%"
                                      >
                                        <div
                                          class="progressbar-line-item bar-bg-4"
                                        ></div>
                                      </div>
                                      <!-- End Skill Bar -->
                                    </div>
                                    <div class="bar-percent">3.6</div>
                                  </div>
                                </div>
                                <!-- end progress-item -->
                              </div>
                              <!-- end col-lg-6 -->
                              <div class="col-lg-6">
                                <div class="progress-item">
                                  <h3 class="progressbar-title">Facilities</h3>
                                  <div
                                    class="progressbar-content line-height-20 d-flex align-items-center justify-content-between"
                                  >
                                    <div class="progressbar-box flex-shrink-0">
                                      <div
                                        class="progressbar-line"
                                        data-percent="50%"
                                      >
                                        <div
                                          class="progressbar-line-item bar-bg-5"
                                        ></div>
                                      </div>
                                      <!-- End Skill Bar -->
                                    </div>
                                    <div class="bar-percent">2.6</div>
                                  </div>
                                </div>
                                <!-- end progress-item -->
                              </div>
                              <!-- end col-lg-6 -->
                            </div>
                            <!-- end row -->
                          </div>
                        </div>
                        <!-- end col-lg-8 -->
                      </div>
                    </div>
                  </div>
                  <!-- end single-content-item -->
                  <div class="section-block"></div>
                </div>
                <!-- end reviews -->
                <div class="review-box">
                  <div class="single-content-item padding-top-40px">
                    <h3 class="title font-size-20">Showing guest reviews</h3>
                    <div class="comments-list padding-top-50px" id='review_list'>
                      <!-- end comments -->

                      <!-- end comments -->
                      <!-- <div class="btn-box load-more text-center">
                        <button
                          class="theme-btn theme-btn-small theme-btn-transparent"
                          type="button"
                        >
                          Load More Review
                        </button>
                      </div> -->
                    </div>
                    <!-- end comments-list -->
                    <div class="comment-forum padding-top-40px" style="display: none">
                      <div class="form-box">
                        <div class="form-title-wrap">
                          <h3 class="title">Write a Review</h3>
                        </div>
                        <!-- form-title-wrap -->
                        <div class="form-content">
                          <div class="rate-option p-2" style="display: none">
                            <div class="row">
                              <div class="col-lg-4 responsive-column">
                                <div class="rate-option-item">
                                  <label>Service</label>
                                  <div class="rate-stars-option" id='service_star_rating'>
                                    <input
                                      type="checkbox"
                                      id="lst1"
                                      value="1"
                                    />
                                    <label for="lst1"></label>
                                    <input
                                      type="checkbox"
                                      id="lst2"
                                      value="2"
                                    />
                                    <label for="lst2"></label>
                                    <input
                                      type="checkbox"
                                      id="lst3"
                                      value="3"
                                    />
                                    <label for="lst3"></label>
                                    <input
                                      type="checkbox"
                                      id="lst4"
                                      value="4"
                                    />
                                    <label for="lst4"></label>
                                    <input
                                      type="checkbox"
                                      id="lst5"
                                      value="5"
                                    />
                                    <label for="lst5"></label>
                                  </div>
                                </div>
                              </div>
                              <!-- col-lg-4 -->
                              <div class="col-lg-4 responsive-column">
                                <div class="rate-option-item">
                                  <label>Location</label>
                                  <div class="rate-stars-option" id="location_star_rating">
                                    <input type="checkbox" id="l1" value="1" />
                                    <label for="l1"></label>
                                    <input type="checkbox" id="l2" value="2" />
                                    <label for="l2"></label>
                                    <input type="checkbox" id="l3" value="3" />
                                    <label for="l3"></label>
                                    <input type="checkbox" id="l4" value="4" />
                                    <label for="l4"></label>
                                    <input type="checkbox" id="l5" value="5" />
                                    <label for="l5"></label>
                                  </div>
                                </div>
                              </div>
                              <!-- col-lg-4 -->
                              <div class="col-lg-4 responsive-column">
                                <div class="rate-option-item">
                                  <label>Value for Money</label>
                                  <div class="rate-stars-option" id="value_for_money_rating">
                                    <input type="checkbox" id="vm1" value="1" />
                                    <label for="vm1"></label>
                                    <input type="checkbox" id="vm2" value="2" />
                                    <label for="vm2"></label>
                                    <input type="checkbox" id="vm3" value="3" />
                                    <label for="vm3"></label>
                                    <input type="checkbox" id="vm4" value="4" />
                                    <label for="vm4"></label>
                                    <input type="checkbox" id="vm5" value="5" />
                                    <label for="vm5"></label>
                                  </div>
                                </div>
                              </div>
                              <!-- col-lg-4 -->
                              <div class="col-lg-4 responsive-column">
                                <div class="rate-option-item">
                                  <label>Cleanliness</label>
                                  <div class="rate-stars-option" id="clean_rating">
                                    <input
                                      type="checkbox"
                                      id="cln1"
                                      value="1"
                                    />
                                    <label for="cln1"></label>
                                    <input
                                      type="checkbox"
                                      id="cln2"
                                      value="2"
                                    />
                                    <label for="cln2"></label>
                                    <input
                                      type="checkbox"
                                      id="cln3"
                                      value="3"
                                    />
                                    <label for="cln3"></label>
                                    <input
                                      type="checkbox"
                                      id="cln4"
                                      value="4"
                                    />
                                    <label for="cln4"></label>
                                    <input
                                      type="checkbox"
                                      id="cln5"
                                      value="5"
                                    />
                                    <label for="cln5"></label>
                                  </div>
                                </div>
                              </div>
                              <!-- col-lg-4 -->
                              <div class="col-lg-4 responsive-column">
                                <div class="rate-option-item">
                                  <label>Facilities</label>
                                  <div class="rate-stars-option" id="facilities_rating">
                                    <input type="checkbox" id="f1" value="1" />
                                    <label for="f1"></label>
                                    <input type="checkbox" id="f2" value="2" />
                                    <label for="f2"></label>
                                    <input type="checkbox" id="f3" value="3" />
                                    <label for="f3"></label>
                                    <input type="checkbox" id="f4" value="4" />
                                    <label for="f4"></label>
                                    <input type="checkbox" id="f5" value="5" />
                                    <label for="f5"></label>
                                  </div>
                                </div>
                              </div>
                              <!-- col-lg-4 -->
                            </div>
                            <!-- end row -->
                          </div>
                          <!-- end rate-option -->
                          <div class="contact-form-action">
                            <form method="post" id="review_form">
                              <div class="row">
                                <div class="col-lg-6 responsive-column">
                                  <div class="input-box">
                                    <label class="label-text">Name</label>
                                    <div class="form-group">
                                      <span class="la la-user form-icon"></span>
                                      <input
                                        class="form-control"
                                        type="text"
                                        name="name"
                                        placeholder="Your name"
                                        required='true'
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                  <div class="input-box">
                                    <label class="label-text">Email</label>
                                    <div class="form-group">
                                      <span
                                        class="la la-envelope-o form-icon"
                                      ></span>
                                      <input
                                        class="form-control"
                                        type="email"
                                        name="email"
                                        placeholder="Email address"
                                        required='true'
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="input-box">
                                    <label class="label-text">Message</label>
                                    <div class="form-group">
                                      <span
                                        class="la la-pencil form-icon"
                                      ></span>
                                      <textarea
                                        class="message-control form-control"
                                        name="message"
                                        placeholder="Write message"
                                        required='true'
                                      ></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="btn-box">
                                    <button id='send_review' class="theme-btn">
                                      Leave a Review
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <!-- end contact-form-action -->
                        </div>
                        <!-- end form-content -->
                      </div>
                      <!-- end form-box -->
                    </div>
                    <!-- end comment-forum -->
                  </div>
                  <!-- end single-content-item -->
                </div>
                <!-- end review-box -->
              </div>
              <!-- end single-content-wrap -->
            </div>
            <!-- end col-lg-8 -->
            <div class="col-lg-4">
              <div class="sidebar single-content-sidebar mb-0">
                <div
                  class="sidebar-widget single-content-widget available-hide-mobile"
                >
                  <div class="sidebar-widget-item">
                    <div class="sidebar-book-title-wrap mb-3">
                      <h3>Popular</h3>
                      <p>
                        <span class="text-form">From</span
                        ><span
                          class="text-value ml-2 mr-1"
                          id="property_price"
                        ></span>
                        <!-- <span class="before-price">$412.00</span> -->
                      </p>
                    </div>
                  </div>
                  <!-- end sidebar-widget-item -->
                  <div class="sidebar-widget-item">
                    <div class="contact-form-action">
                      <form action="#" id="booking_checks_form">
                        <div class="input-box">
                          <label class="label-text">Check in - Check out</label>
                          <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input
                              class="date-range form-control"
                              type="text"
                              name="daterange"
                              readonly
                              id="daterange"
                            />
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- end sidebar-widget-item -->
                  <div class="sidebar-widget-item">
                    <div
                      class="qty-box mb-2 d-flex align-items-center justify-content-between"
                    >
                      <label class="font-size-16"
                        >Adults <span>Age 18+</span></label
                      >
                      <div class="qtyBtn d-flex align-items-center">
                        <div class="qtyDec"><i class="la la-minus"></i></div>
                        <input
                          type="text"
                          name="qtyInput"
                          value="0"
                          id="adultInput"
                        />
                        <div class="qtyInc"><i class="la la-plus"></i></div>
                      </div>
                    </div>
                    <!-- end qty-box -->
                    <div
                      class="qty-box mb-2 d-flex align-items-center justify-content-between"
                    >
                      <label class="font-size-16"
                        >Children <span>0-17 years old</span></label
                      >
                      <div class="qtyBtn d-flex align-items-center">
                        <div class="qtyDec"><i class="la la-minus"></i></div>
                        <input
                          type="text"
                          name="qtyInput"
                          value="0"
                          id="childInput"
                        />
                        <div class="qtyInc"><i class="la la-plus"></i></div>
                      </div>
                    </div>
                    <!-- end qty-box -->
                    <!-- end qty-box -->
                  </div>
                  <!-- end sidebar-widget-item -->
                  <div class="btn-box pt-2">
                    <button class="theme-btn text-center w-100 mb-2">
                      Search Now
                    </button>
                    <!-- <button
                      class="theme-btn text-center w-100 theme-btn-transparent"
                    >
                      <i class="la la-heart-o mr-2"></i>Add to Wishlist
                    </button> -->
                    <div
                      class="d-flex align-items-center justify-content-between pt-2"
                    >
                      <a
                        href="#"
                        class="btn theme-btn-hover-gray font-size-15"
                        data-toggle="modal"
                        data-target="#sharePopupForm"
                        ><i class="la la-share mr-1"></i>Share</a
                      >
                      <!-- <p>
                        <i class="la la-eye mr-1 font-size-15 color-text-2"></i
                        >3456
                      </p> -->
                    </div>
                  </div>
                </div>
                <!-- end sidebar-widget -->
                <div class="sidebar-widget single-content-widget">
                  <h3 class="title stroke-shape">Enquiry Form</h3>
                  <div class="enquiry-forum">
                    <div class="form-box">
                      <div class="form-content">
                        <div class="contact-form-action">
                          <form method="post">
                            <div class="input-box">
                              <label class="label-text">Your Name</label>
                              <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="text"
                                  placeholder="Your name"
                                  required='true'
                                />
                              </div>
                            </div>
                            <div class="input-box">
                              <label class="label-text">Your Email</label>
                              <div class="form-group">
                                <span class="la la-envelope-o form-icon"></span>
                                <input
                                  class="form-control"
                                  type="email"
                                  name="email"
                                  placeholder="Email address"
                                  required='true'
                                />
                              </div>
                            </div>
                            <div class="input-box">
                              <label class="label-text">Message</label>
                              <div class="form-group">
                                <span class="la la-pencil form-icon"></span>
                                <textarea
                                  class="message-control form-control"
                                  name="message"
                                  placeholder="Write message"
                                  required='true'
                                ></textarea>
                              </div>
                            </div>
                            <div class="input-box">
                              <div class="form-group">
                                <div class="custom-checkbox mb-0">
                                  <input type="checkbox" id="agreeChb" />
                                  <label for="agreeChb"
                                    >I agree with
                                    <a href="#">Terms of Service</a> and
                                    <a href="#">Privacy Statement</a></label
                                  >
                                </div>
                              </div>
                            </div>
                            <div class="btn-box">
                              <button type="button" class="theme-btn">
                                Submit Enquiry
                              </button>
                            </div>
                          </form>
                        </div>
                        <!-- end contact-form-action -->
                      </div>
                      <!-- end form-content -->
                    </div>
                    <!-- end form-box -->
                  </div>
                  <!-- end enquiry-forum -->
                </div>
                <!-- end sidebar-widget -->
                <div class="sidebar-widget single-content-widget">
                  <h3 class="title stroke-shape">Why Book With Us?</h3>
                  <div class="sidebar-list">
                    <ul class="list-items">
                      <li>
                        <i class="la la-dollar icon-element mr-2"></i>No-hassle
                        best price guarantee
                      </li>
                      <li>
                        <i class="la la-microphone icon-element mr-2"></i
                        >Customer care available 24/7
                      </li>
                      <li>
                        <i class="la la-thumbs-up icon-element mr-2"></i
                        >Throughly Screened hotels
                      </li>
                      <li>
                        <i class="la la-file-text icon-element mr-2"></i>Stress
                        free and reliable
                      </li>
                    </ul>
                  </div>
                  <!-- end sidebar-list -->
                </div>
                <!-- end sidebar-widget -->
                <div class="sidebar-widget single-content-widget">
                  <h3 class="title stroke-shape">Get a Question?</h3>
                  <p class="font-size-14 line-height-24">
                    Do not hesitate to give us a call. We are an expert team and
                    we are happy to talk to you.
                  </p>
                  <div class="sidebar-list pt-3">
                    <ul class="list-items">
                      <li>
                        <i class="la la-phone icon-element mr-2"></i
                        ><a href="tel:+2347000770007">+234-700-077-0007</a>
                      </li>
                      <li>
                        <i class="la la-envelope icon-element mr-2"></i
                        ><a href="mailto:support@9jahotel.com">support@9jahotel.com</a>
                      </li>
                    </ul>
                  </div>
                  <!-- end sidebar-list -->
                </div>
                <!-- end sidebar-widget -->
                <!-- <div class="sidebar-widget single-content-widget">
                  <h3 class="title stroke-shape">Organized by</h3>
                  <div class="author-content">
                    <div class="d-flex">
                      <div class="author-img">
                        <a href="#"
                          ><img src="images/team8.jpg" alt="testimonial image"
                        /></a>
                      </div>
                      <div class="author-bio">
                        <h4 class="author__title">
                          <a href="#">royaltravelagency</a>
                        </h4>
                        <span class="author__meta">Member Since 2017</span>
                        <span class="ratings d-flex align-items-center">
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star-o"></i>
                          <span class="ml-2">305 Reviews</span>
                        </span>
                        <div class="btn-box pt-3">
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent"
                            >Ask a Question</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- end sidebar-widget -->
              </div>
              <!-- end sidebar -->
            </div>
            <!-- end col-lg-4 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end single-content-box -->
    </section>
    <!-- end tour-detail-area -->
    <!-- ================================
    END TOUR DETAIL AREA
================================= -->

    <div class="section-block"></div>

    <!-- ================================
    START RELATE TOUR AREA
================================= -->
    <section class="related-tour-area section--padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title">You might also like</h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px" id="also_like_hotels">
            
         
          
          <!-- end col-lg-4 -->
          <!--<div class="col-lg-4 responsive-column">-->
          <!--  <div class="card-item">-->
          <!--    <div class="card-img">-->
          <!--      <a href="hotel-single.html" class="d-block">-->
          <!--        <img src="images/img2.jpg" alt="hotel-img" />-->
          <!--      </a>-->
          <!--      <div-->
          <!--        class="add-to-wishlist icon-element"-->
          <!--        data-toggle="tooltip"-->
          <!--        data-placement="top"-->
          <!--        title="Bookmark"-->
          <!--      >-->
          <!--        <i class="la la-heart-o"></i>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="card-body">-->
          <!--      <h3 class="card-title">-->
          <!--        <a href="hotel-single.html">Best Western Grant Park Hotel</a>-->
          <!--      </h3>-->
          <!--      <p class="card-meta">124 E Huron St, Chicago</p>-->
          <!--      <div class="card-rating">-->
          <!--        <span class="badge text-white">4.4/5</span>-->
          <!--        <span class="review__text">Average</span>-->
          <!--        <span class="rating__text">(30 Reviews)</span>-->
          <!--      </div>-->
          <!--      <div-->
          <!--        class="card-price d-flex align-items-center justify-content-between"-->
          <!--      >-->
          <!--        <p>-->
          <!--          <span class="price__from">From</span>-->
          <!--          <span class="price__num">$58.00</span>-->
          <!--          <span class="price__text">Per night</span>-->
          <!--        </p>-->
          <!--        <a href="hotel-single.html" class="btn-text"-->
          <!--          >See details<i class="la la-angle-right"></i-->
          <!--        ></a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
            <!-- end card-item -->
          <!--</div>-->
          
         
          
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end related-tour-area -->
    <!-- ================================
    END RELATE TOUR AREA
================================= -->

    <!-- ================================
    START CTA AREA
================================= -->
    <section
      class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="section-heading">
              <h2 class="sec__title font-size-30 text-white">
                Subscribe to see Secret Deals
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-7 -->
          <div class="col-lg-5">
            <div class="subscriber-box">
              <div class="contact-form-action">
                <form action="#">
                  <div class="input-box">
                    <label class="label-text text-white"
                      >Enter email address</label
                    >
                    <div class="form-group mb-0">
                      <span class="la la-envelope form-icon"></span>
                      <input
                        class="form-control"
                        type="email"
                        name="email"
                        placeholder="Email address"
                        required='true'
                      />
                      <button
                        class="theme-btn theme-btn-small submit-btn"
                        type="submit"
                      >
                        Subscribe
                      </button>
                      <span class="font-size-14 pt-1 text-white-50"
                        ><i class="la la-lock mr-1"></i>Don't worry your
                        information is safe with us.</span
                      >
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-5 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end cta-area -->
    <!-- ================================
    END CTA AREA
================================= -->

    <!-- ================================
       START FOOTER AREA
================================= -->
   @include('layouts.user.includes.footer')

    <!-- end modal-shared -->
    <div class="modal-popup">
      <div
        class="modal fade"
        id="replayPopupForm"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title title" id="exampleModalLongTitle3">
                Replay to review
              </h5>
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
                <form method="post">
                  <div class="input-box">
                    <div class="form-group mb-0">
                      <i class="la la-pencil form-icon"></i>
                      <textarea
                        class="message-control form-control"
                        name="message"
                        placeholder="Write message here..."
                        required='true'
                      ></textarea>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end contact-form-action -->
            </div>
            <div class="modal-footer border-top-0 pt-0">
              <button
                type="button"
                class="btn font-weight-bold font-size-15 color-text-2 mr-2"
                data-dismiss="modal"
              >
                Cancel
              </button>
              <button type="button" class="theme-btn theme-btn-small">
                Replay
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
      <div
        class="modal fade"
        id="sharePopupForm"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title title" id="exampleModalLongTitle4">
                Share this tour
              </h5>
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
              <div class="copy-to-clipboard-wrap">
                <div class="copy-to-clipboard">
                  <div class="contact-form-action d-flex align-items-center">
                    <span class="text-success-message">Copied!</span>
                    <input
                      type="text"
                      class="form-control copy-input"
                      id="copyInput"
                      value=""
                      required='true'
                    />
                    <div class="btn-box">
                      <button class="theme-btn theme-btn-light copy-text">
                        Copy
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end copy-to-clipboard -->
                <ul class="social-profile text-center">
                  <li>
                    <a href="#"><i class="lab la-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="lab la-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="lab la-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="lab la-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal-popup -->


@endsection