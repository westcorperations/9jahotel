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
                                        <a href="#"><i class="la la-phone mr-1"></i>+234-700-077-0007</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="la la-envelope mr-1"></i>support@9jahotel.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-right d-flex align-items-center justify-content-end">

                                <div class="header-right-action">
                                    <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1"
                                        data-toggle="modal" data-target="#signupPopupForm">Sign Up</a>
                                    <a href="#" class="theme-btn theme-btn-small" data-toggle="modal"
                                        data-target="#loginPopupForm">Login</a>
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
                            <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt="logo" /></a>
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
                                            <a href="https://9jahotel.com/group_booking.html">Group Bookings </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end main-menu-content -->
                            <div class="nav-btn">
                                <a href="https://9jahotel.com/public/partner" class="theme-btn">Hotel Login</a>
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
          START HERO-WRAPPER AREA
      ================================= -->
    <section class="hero-wrapper">
        <div class="hero-box hero-bg">
            <span class="line-bg line-bg1"></span>
            <span class="line-bg line-bg2"></span>
            <span class="line-bg line-bg3"></span>
            <span class="line-bg line-bg4"></span>
            <span class="line-bg line-bg5"></span>
            <span class="line-bg line-bg6"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto responsive--column-l">
                        <div class="hero-content pb-5">
                            <div class="section-heading">
                                <h2 class="sec__title cd-headline zoom">
                                    Amazing
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Hotel Deals</b>
                                        <!-- <b>Adventures</b> -->
                                        <!-- <b>Flights</b> -->
                                        <b>Experience</b>
                                        <!-- <b>Tour</b> -->
                                        <b>Hotels</b>
                                        <b>Package Deals</b>
                                        <b>Fun</b>
                                        <b>People</b>
                                    </span>
                                    Waiting for You
                                </h2>
                            </div>
                        </div>
                        <!-- end hero-content -->
                        <div class="section-tab text-center pl-4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="hotel-tab" data-toggle="tab"
                                        href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">
                                        <i class="la la-hotel mr-1"></i>Hotels
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="flight-tab" data-toggle="tab"
                                        href="#flight" role="tab" aria-controls="flight" aria-selected="false">
                                        <i class="la la-plane mr-1"></i>Flights
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="package-tab" data-toggle="tab"
                                        href="#package" role="tab" aria-controls="package" aria-selected="false">
                                        <i class="la la-shopping-bag mr-1"></i>Flights + Hotels
                                    </a>
                                </li>
                                <!--
                        <li class="nav-item">
                          <a
                            class="nav-link d-flex align-items-center"
                            id="flight-tab"
                            data-toggle="tab"
                            href="#flight"
                            role="tab"
                            aria-controls="flight"
                            aria-selected="false"
                          >
                            <i class="la la-plane mr-1"></i>Flights
                          </a>
                        </li>
                    <li class="nav-item">
                                      <a class="nav-link d-flex align-items-center" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="false">
                                          <i class="la la-shopping-bag mr-1"></i>Vacation Packages
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link d-flex align-items-center" id="car-tab" data-toggle="tab" href="#car" role="tab" aria-controls="car" aria-selected="true">
                                          <i class="la la-car mr-1"></i>Cars
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link d-flex align-items-center" id="cruise-tab" data-toggle="tab" href="#cruise" role="tab" aria-controls="cruise" aria-selected="false">
                                          <i class="la la-ship mr-1"></i>Cruises
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link d-flex align-items-center" id="tour-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="tour" aria-selected="false">
                                          <i class="la la-globe mr-1"></i>Tours
                                      </a>
                                  </li>
                    -->
                            </ul>
                        </div>
                        <!-- end section-tab -->
                        <div class="tab-content search-fields-container" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel"
                                aria-labelledby="hotel-tab">
                                <div class="contact-form-action">
                                    <form action="#" class="row align-items-center">
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Destination / Hotel name</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control typeahead" data-provide="typeahead"
                                                        type="text" placeholder="Enter city or property"
                                                        id="searchTerm" />
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            // Initializes input( name of states)
                                            // with a typeahead
                                            const $input = $(".typeahead");

                                            async function allStates() {
                                                const res = await $.ajax({
                                                    url: "https://web.9jahotel.com/api/get_all_locations",
                                                    success: (res) => res
                                                })

                                                $input.typeahead({
                                                    source: res,
                                                    autoSelect: true,
                                                });
                                            }

                                            allStates()

                                            $input.change(function() {
                                                var current = $input.typeahead("getActive");
                                                matches = [];

                                                if (current) {

                                                    // Some item from your input matches
                                                    // with entered data
                                                    if (current.name == $input.val()) {
                                                        matches.push(current.name);
                                                    }
                                                }
                                            });
                                        </script>
                                        <!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Check in</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single" id="daterange-single-checkin" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                        <div class="col-lg-3 pr-0">
                                            <div class="input-box">
                                                <label class="label-text">Check out</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="text"
                                                        name="daterange-single" id="daterange-single-checkout" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <div class="input-box">
                                                <label class="label-text">Guests</label>
                                                <div class="form-group">
                                                    <div class="dropdown dropdown-contain gty-container">
                                                        <a class="dropdown-toggle dropdown-btn" href="#"
                                                            role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <!-- <span
                                        class="room"
                                        data-text="Room"
                                        data-text-multi="Rooms"
                                        >0 Rooms</span
                                      > -->
                                                            <span class="adult" data-text="Adult"
                                                                data-text-multi="Adults">0 Adult</span>
                                                            -
                                                            <span class="children" data-text="Child"
                                                                data-text-multi="Children">0 Children</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-wrap">
                                                            <!-- <div class="dropdown-item">
                                        <div
                                          class="qty-box d-flex align-items-center justify-content-between"
                                        >
                                          <label>Rooms</label>
                                          <div
                                            class="qtyBtn d-flex align-items-center"
                                          >
                                            <div class="qtyDec">
                                              <i class="la la-minus"></i>
                                            </div>
                                            <input
                                              type="text"
                                              name="room_number"
                                              value="0"
                                              class="qty-input"
                                            />
                                            <div class="qtyInc">
                                              <i class="la la-plus"></i>
                                            </div>
                                          </div>
                                        </div>
                                      </div> -->
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Adults</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec">
                                                                            <i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="adult_number"
                                                                            value="0" />
                                                                        <div class="qtyInc">
                                                                            <i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div
                                                                    class="qty-box d-flex align-items-center justify-content-between">
                                                                    <label>Children</label>
                                                                    <div class="qtyBtn d-flex align-items-center">
                                                                        <div class="qtyDec">
                                                                            <i class="la la-minus"></i>
                                                                        </div>
                                                                        <input type="text" name="child_number"
                                                                            value="0" />
                                                                        <div class="qtyInc">
                                                                            <i class="la la-plus"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end dropdown -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-lg-3 -->
                                    </form>
                                </div>
                                <div class="btn-box">
                                    <button id="searchSubmit" class="theme-btn">
                                        Search Now
                                    </button>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <div class="section-tab section-tab-2 pb-3">
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="one-way-tab" data-toggle="tab"
                                                href="#one-way" role="tab" aria-controls="one-way"
                                                aria-selected="true">
                                                One way
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip"
                                                role="tab" aria-controls="round-trip" aria-selected="false">
                                                Round-trip
                                            </a>
                                        </li>
                                        <li class="nav-item" style="display: none;">
                                            <a class="nav-link" id="multi-city-tab" data-toggle="tab" href="#multi-city"
                                                role="tab" aria-controls="multi-city" aria-selected="false">
                                                Multi-city
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent3">
                                    <div class="tab-pane fade show active" id="one-way" role="tabpanel"
                                        aria-labelledby="one-way-tab">
                                        <div class="input_error_message danger"></div>
                                        <div class="contact-form-action">
                                            <form action="#" class="row align-items-center" id="one_way_form">
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying from</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="City or airport" required
                                                                id="one_way_flying_from" list="one_way_from_airport_list">
                                                            <datalist id="one_way_from_airport_list"
                                                                class="airport_city_lists">

                                                            </datalist>

                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying to</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="City or airport" required
                                                                id="one_way_flying_to" list="one_way_to_airport_list">
                                                            <datalist id="one_way_to_airport_list"
                                                                class="airport_city_lists">

                                                            </datalist>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Departing</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="date-range form-control" type="date"
                                                                id="one_way_departing">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Passengers</label>
                                                        <div class="form-group">
                                                            <div class="dropdown dropdown-contain gty-container">
                                                                <a class="dropdown-toggle dropdown-btn" href="#"
                                                                    role="button" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <span class="adult" data-text="Adult"
                                                                        data-text-multi="Adults">0 Adult</span>
                                                                    -
                                                                    <span class="children" data-text="Child"
                                                                        data-text-multi="Children">0 Children</span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Adults</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="adult_number"
                                                                                    value="0"
                                                                                    id="one_way_adult_number">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Children</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="child_number"
                                                                                    value="0"
                                                                                    id="one_way_children_number">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Infants</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text"
                                                                                    name="infants_number" value="0"
                                                                                    class="qty-input"
                                                                                    id="one_way_infants_number">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Coach</label>
                                                        <div class="form-group select-contain w-auto">
                                                            <select class="select-contain-select" id="one_way_coach">
                                                                <option value="1" selected>Economy</option>
                                                                <option value="2">Business</option>
                                                                <option value="3">First class</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->

                                                <!-- start preferred airline wrap -->
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Preferred airline</label>
                                                        <div class="form-group">
                                                            <div class="select-contain w-100">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Preferred airline" required
                                                                    id="one_way_airline" list="one_way_airline_list">
                                                                <datalist id="one_way_airline_list" class="arline_lists">

                                                                </datalist>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  end preferred airline wrap -->

                                                <div class="col-lg-3">
                                                    <button type="submit"
                                                        class="search_btn theme-btn w-100 text-center margin-top-20px">Search
                                                        Now</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- end tab-pane -->
                                    <div class="tab-pane fade" id="round-trip" role="tabpanel"
                                        aria-labelledby="round-trip-tab">
                                        <div class="input_error_message danger"></div>
                                        <div class="contact-form-action">
                                            <form action="#" class="row align-items-center" id="round_trip_form">
                                                <div class="col-lg-6 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying from</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="City or airport" required
                                                                id="round_trip_flying_from"
                                                                list="round_trip_from_airport_list">
                                                            <datalist id="round_trip_from_airport_list"
                                                                class="airport_city_lists">

                                                            </datalist>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying to</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="City or airport" required
                                                                id="round_trip_flying_to"
                                                                list="round_trip_to_airport_list">
                                                            <datalist id="round_trip_to_airport_list"
                                                                class="airport_city_lists">

                                                            </datalist>

                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Departing - Returning</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="date-range form-control" type="text"
                                                                name="daterange" id="round_trip_departing">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Passengers</label>
                                                        <div class="form-group">
                                                            <div class="dropdown dropdown-contain gty-container">
                                                                <a class="dropdown-toggle dropdown-btn" href="#"
                                                                    role="button" data-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <span class="adult" data-text="Adult"
                                                                        data-text-multi="Adults">0 Adult</span>
                                                                    -
                                                                    <span class="children" data-text="Child"
                                                                        data-text-multi="Children">0 Children</span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Adults</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="adult_number"
                                                                                    value="0"
                                                                                    id="round_trip_adult_number">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Children</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text" name="child_number"
                                                                                    value="0"
                                                                                    id="round_trip_children_number">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div
                                                                            class="qty-box d-flex align-items-center justify-content-between">
                                                                            <label>Infants</label>
                                                                            <div class="qtyBtn d-flex align-items-center">
                                                                                <div class="qtyDec"><i
                                                                                        class="la la-minus"></i></div>
                                                                                <input type="text"
                                                                                    name="infants_number" value="0"
                                                                                    class="qty-input"
                                                                                    id="round_trip_infants_number">
                                                                                <div class="qtyInc"><i
                                                                                        class="la la-plus"></i></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- end dropdown -->
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-3 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Coach</label>
                                                        <div class="form-group">
                                                            <div class="select-contain w-auto">
                                                                <select class="select-contain-select">
                                                                    <option value="1" selected>Economy</option>
                                                                    <option value="2">Business</option>
                                                                    <option value="3">First class</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->

                                                <!-- start preferred airline wrap -->
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Preferred airline</label>
                                                        <div class="form-group">
                                                            <div class="select-contain w-100">
                                                                <input class="form-control" type="text"
                                                                    placeholder="Preferred airline" required
                                                                    id="round_trip_airline"
                                                                    list="round_trip_airline_list">
                                                                <datalist id="round_trip_airline_list"
                                                                    class="arline_lists">

                                                                </datalist>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--  end preferred airline wrap -->

                                                <div class="col-lg-3">
                                                    <button type="submit"
                                                        class="search_btn theme-btn w-100 text-center margin-top-20px">Search
                                                        Now</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div><!-- end tab-pane -->
                                    <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel"
                                        aria-labelledby="multi-city-tab" style="display: none;">
                                        <div class="input_error_message danger"></div>
                                        <div class="contact-form-action multi-flight-field d-flex align-items-center">
                                            <form action="#" class="row flex-grow-1 align-items-center"
                                                id="multi_city_form">
                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying from</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="City or airport" required
                                                                list="multi_city_list">
                                                            <datalist id="multi_city_list" class="airport_city_lists">

                                                            </datalist>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4 pr-0">
                                                    <div class="input-box">
                                                        <label class="label-text">Flying to</label>
                                                        <div class="form-group">
                                                            <span class="la la-map-marker form-icon"></span>
                                                            <input class="form-control" type="text"
                                                                placeholder="City or airport" required>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                                <div class="col-lg-4">
                                                    <div class="input-box">
                                                        <label class="label-text">Departing</label>
                                                        <div class="form-group">
                                                            <span class="la la-calendar form-icon"></span>
                                                            <input class="date-range form-control" type="text"
                                                                name="daterange" readonly>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-3 -->
                                            </form>
                                            <div class="multi-flight-delete-wrap pt-3 pl-3">
                                                <button class="multi-flight-remove" type="button"><i
                                                        class="la la-remove"></i></button>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 pr-0">
                                                <div class="form-group">
                                                    <button class="theme-btn add-flight-btn margin-top-40px w-100"
                                                        type="button"><i class="la la-plus mr-1"></i>Add another
                                                        flight</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Passengers</label>
                                                    <div class="form-group">
                                                        <div class="dropdown dropdown-contain gty-container">
                                                            <a class="dropdown-toggle dropdown-btn" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <span class="adult" data-text="Adult"
                                                                    data-text-multi="Adults">0 Adult</span>
                                                                -
                                                                <span class="children" data-text="Child"
                                                                    data-text-multi="Children">0 Children</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-wrap">
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Adults</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i
                                                                                    class="la la-minus"></i></div>
                                                                            <input type="text" name="adult_number"
                                                                                value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Children</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i
                                                                                    class="la la-minus"></i></div>
                                                                            <input type="text" name="child_number"
                                                                                value="0">
                                                                            <div class="qtyInc"><i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <div
                                                                        class="qty-box d-flex align-items-center justify-content-between">
                                                                        <label>Infants</label>
                                                                        <div class="qtyBtn d-flex align-items-center">
                                                                            <div class="qtyDec"><i
                                                                                    class="la la-minus"></i></div>
                                                                            <input type="text" name="infants_number"
                                                                                value="0" class="qty-input">
                                                                            <div class="qtyInc"><i class="la la-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end dropdown -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3 pr-0">
                                                <div class="input-box">
                                                    <label class="label-text">Coach</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="1" selected>Economy</option>
                                                                <option value="2">Business</option>
                                                                <option value="3">First class</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->

                                            <!-- start preferred airline wrap -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Preferred airline</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-100">
                                                            <select class="select-contain-select airways_list"
                                                                id="multi_city_airline" required>
                                                                <option selected="selected" value=""> No preference
                                                                </option>
                                                                <!-- Populate with JavaScript (api/flights.js) -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  end preferred airline wrap -->

                                            <div class="col-lg-3">
                                                <button type="submit"
                                                    class="search_btn theme-btn w-100 text-center margin-top-20px">Search
                                                    Now</button>
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane -->
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="package" role="tabpanel"
                                aria-labelledby="package-tab">
                                <h1 class="py-3 text-center" style="color: #216d41">
                                    Coming Soon
                                </h1>
                            </div>

                        </div>
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path>
            </svg>
        </div>
    </section>
    <!-- end hero-wrapper -->
    <!-- ================================
          END HERO-WRAPPER AREA
      ================================= -->

    <!-- ================================
          START INFO AREA
      ================================= -->
    <section class="info-area info-bg padding-top-50px padding-bottom-50px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class="la la-bullhorn"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Best Hotels In Nigeria</h4>
                            <p class="info__desc">
                                We have got the best hotels in Nigeria, all made available for
                                booking to you.
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box margin-top-50px">
                        <div class="info-icon">
                            <i class="la la-globe"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">
                                A world of choice – anytime, anywhere
                            </h4>
                            <p class="info__desc">
                                Book now, pay now or book now, pay later. You can choose the
                                payment option that suits you.
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icon-box">
                        <div class="info-icon">
                            <i class="la la-thumbs-up"></i>
                        </div>
                        <!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Peace of mind, wherever you wander</h4>
                            <p class="info__desc">
                                No booking fees, no cancellation fees, no hidden charges. We
                                promise you the best price.
                            </p>
                        </div>
                        <!-- end info-content -->
                    </div>
                    <!-- end icon-box -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end info-area -->
    <!-- ================================
          END INFO AREA
      ================================= -->

    <div class="section-block"></div>

    <!-- ================================
          START HOTEL AREA
      ================================= -->
    <section class="hotel-area section-bg section-padding overflow-hidden padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title line-height-55">
                            Most Popular Hotel <br />
                            Destinations
                        </h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-50px">
                <div class="col-lg-12">
                    <div class="hotel-card-wrap">
                        <div class="hotel-card-carousel carousel-action" id="mostVisitedSection"></div>
                        <!-- end hotel-card-carousel -->
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- end hotel-area -->
    <!-- ================================
          END HOTEL AREA
      ================================= -->

    <!-- ================================
          START DESTINATION AREA
      ================================= -->
    <!-- <section class="destination-area section--padding">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-8">
                  <div class="section-heading">
                    <h2 class="sec__title">Top Visited Places</h2>
                    <p class="sec__desc pt-3">Top Hotels on Our List</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="btn-box btn--box text-right">
                    <a href="tour-grid.html" class="theme-btn">Discover More</a>
                  </div>
                </div>
              </div>
              <div class="row padding-top-50px">
                <div class="col-lg-4">
                  <div class="card-item destination-card">
                    <div class="card-img">
                      <img src="images/destination-img2.jpg" alt="destination-img" />
                      <span class="badge">new york</span>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">
                        <a href="tour-details.html">Main Street Park</a>
                      </h3>
                      <div class="card-rating d-flex align-items-center">
                        <span class="ratings d-flex align-items-center mr-1">
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star-o"></i>
                          <i class="la la-star-o"></i>
                        </span>
                        <span class="rating__text">(70694 Reviews)</span>
                      </div>
                      <div
                        class="card-price d-flex align-items-center justify-content-between"
                      >
                        <p class="tour__text">50 Tours</p>
                        <p>
                          <span class="price__from">Price</span>
                          <span class="price__num">$58.00</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card-item destination-card">
                    <div class="card-img">
                      <img src="images/destination-img3.jpg" alt="destination-img" />
                      <span class="badge">chicago</span>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">
                        <a href="tour-details.html">Chicago Cultural Center</a>
                      </h3>
                      <div class="card-rating d-flex align-items-center">
                        <span class="ratings d-flex align-items-center mr-1">
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star-o"></i>
                        </span>
                        <span class="rating__text">(70694 Reviews)</span>
                      </div>
                      <div
                        class="card-price d-flex align-items-center justify-content-between"
                      >
                        <p class="tour__text">50 Tours</p>
                        <p>
                          <span class="price__from">Price</span>
                          <span class="price__num">$68.00</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card-item destination-card">
                    <div class="card-img">
                      <img src="images/destination-img4.jpg" alt="destination-img" />
                      <span class="badge">Hong Kong</span>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">
                        <a href="tour-details.html">Lugard Road Lookout</a>
                      </h3>
                      <div class="card-rating d-flex align-items-center">
                        <span class="ratings d-flex align-items-center mr-1">
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star-o"></i>
                          <i class="la la-star-o"></i>
                        </span>
                        <span class="rating__text">(70694 Reviews)</span>
                      </div>
                      <div
                        class="card-price d-flex align-items-center justify-content-between"
                      >
                        <p class="tour__text">150 Tours</p>
                        <p>
                          <span class="price__from">Price</span>
                          <span class="price__num">$79.00</span>
                          <span class="price__num before-price">$89.00</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card-item destination-card">
                    <div class="card-img">
                      <img src="images/destination-img5.jpg" alt="destination-img" />
                      <span class="badge">Las Vegas</span>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">
                        <a href="tour-details.html">Planet Hollywood Resort</a>
                      </h3>
                      <div class="card-rating d-flex align-items-center">
                        <span class="ratings d-flex align-items-center mr-1">
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star-o"></i>
                        </span>
                        <span class="rating__text">(70694 Reviews)</span>
                      </div>
                      <div
                        class="card-price d-flex align-items-center justify-content-between"
                      >
                        <p class="tour__text">50 Tours</p>
                        <p>
                          <span class="price__from">Price</span>
                          <span class="price__num">$88.00</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card-item destination-card">
                    <div class="card-img">
                      <img src="images/destination-img.jpg" alt="destination-img" />
                      <span class="badge">Shanghai</span>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">
                        <a href="tour-details.html">Oriental Pearl TV Tower</a>
                      </h3>
                      <div class="card-rating d-flex align-items-center">
                        <span class="ratings d-flex align-items-center mr-1">
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                          <i class="la la-star"></i>
                        </span>
                        <span class="rating__text">(70694 Reviews)</span>
                      </div>
                      <div
                        class="card-price d-flex align-items-center justify-content-between"
                      >
                        <p class="tour__text">50 Tours</p>
                        <p>
                          <span class="price__from">Price</span>
                          <span class="price__num">$58.00</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
    <!-- end destination-area -->
    <!-- ================================
          END DESTINATION AREA
      ================================= -->

    <!-- ================================
             START TESTIMONIAL AREA
      ================================= -->
    <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h2 class="sec__title line-height-50">
                            What our customers are saying us?
                        </h2>
                        <!-- <p class="sec__desc padding-top-30px">
                      Morbi convallis bibendum urna ut viverra. Maecenas quis
                      consequat libero
                    </p> -->
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="testimonial-carousel carousel-action">
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Best services. Fast and secure booking, one of the best
                                    platforms I've ever used.
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team8.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Toyosi James</h4>
                                    <span class="author__meta">Lagos, Nigeria</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    Fast processing. Didn't have to stress at all. Recommending
                                    this platform to everyone I know
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team9.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Dele Alejo</h4>
                                    <span class="author__meta">Port Harcout, Nigeria</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    No extra charges. Discounts. I love this platform. I'll be
                                    using it for all my hotel bookings
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team10.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Mubarak Jacobs</h4>
                                    <span class="author__meta">Lagos, Nigeria</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                        <div class="testimonial-card">
                            <div class="testi-desc-box">
                                <p class="testi__desc">
                                    I love this platform. I'll be using it for all my hotel
                                    bookings
                                </p>
                            </div>
                            <div class="author-content d-flex align-items-center">
                                <div class="author-img">
                                    <img src="images/team8.jpg" alt="testimonial image" />
                                </div>
                                <div class="author-bio">
                                    <h4 class="author__title">Dayo Asuna</h4>
                                    <span class="author__meta">Ibadan, Nigeria</span>
                                    <span class="ratings d-flex align-items-center">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end testimonial-card -->
                    </div>
                    <!-- end testimonial-carousel -->
                </div>
                <!-- end col-lg-8 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end testimonial-area -->
    <!-- ================================
             START TESTIMONIAL AREA
      ================================= -->

    <!-- ================================
          START CTA AREA
      ================================= -->
    <section class="cta-area padding-top-100px padding-bottom-180px text-center">
        <div class="video-bg">
            <video autoplay loop>
                <source src="video/video-bg.mp4" type="video/mp4" />
                Experiencing Issues playing this video.
            </video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="sec__title text-white line-height-55">
                            Pay &amp; Pick your room <br />
                            Instantly
                        </h2>
                    </div>
                    <!-- end section-heading -->
                    <div class="btn-box padding-top-35px">
                        <!-- <a href="become-local-expert.html" class="theme-btn border-0"
                      >Join with us</a
                    > -->
                    </div>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path>
        </svg>
    </section>
    <!-- end cta-area -->
    <!-- ================================
          END CTA AREA
      ================================= -->

    <!-- ================================
             START BLOG AREA
      ================================= -->
    <!-- <section class="blog-area padding-top-30px padding-bottom-90px">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-heading text-center">
                    <h2 class="sec__title line-height-55">
                      Latest News & Articles <br />
                      You Might Like
                    </h2>
                  </div>
                </div>
              </div>
              <div class="row padding-top-50px">
                <div class="col-lg-4 responsive-column">
                  <div class="card-item blog-card">
                    <div class="card-img">
                      <img src="images/blog-img.jpg" alt="blog-img" />
                      <div class="post-format icon-element">
                        <i class="la la-photo"></i>
                      </div>
                      <div class="card-body">
                        <div class="post-categories">
                          <a href="#" class="badge">Travel</a>
                          <a href="#" class="badge">lifestyle</a>
                        </div>
                        <h3 class="card-title line-height-26">
                          <a href="blog-single.html"
                            >When Traveling Avoid Expensive Hotels & Resorts</a
                          >
                        </h3>
                        <p class="card-meta">
                          <span class="post__date"> 1 January, 2020</span>
                          <span class="post-dot"></span>
                          <span class="post__time">5 Mins read</span>
                        </p>
                      </div>
                    </div>
                    <div
                      class="card-footer d-flex align-items-center justify-content-between"
                    >
                      <div class="author-content d-flex align-items-center">
                        <div class="author-img">
                          <img src="images/small-team1.jpg" alt="testimonial image" />
                        </div>
                        <div class="author-bio">
                          <a href="#" class="author__title">Leroy Bell</a>
                        </div>
                      </div>
                      <div class="post-share">
                        <ul>
                          <li>
                            <i class="la la-share icon-element"></i>
                            <ul class="post-share-dropdown d-flex align-items-center">
                              <li>
                                <a href="#"><i class="lab la-facebook-f"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="lab la-twitter"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="lab la-instagram"></i></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 responsive-column">
                  <div class="card-item blog-card">
                    <div class="card-img">
                      <img src="images/blog-img2.jpg" alt="blog-img" />
                      <div class="post-format icon-element">
                        <i class="la la-play"></i>
                      </div>
                      <div class="card-body">
                        <div class="post-categories">
                          <a href="#" class="badge">Video</a>
                        </div>
                        <h3 class="card-title line-height-26">
                          <a href="blog-single.html"
                            >My Best Travel Tips: The Ultimate Travel Guide</a
                          >
                        </h3>
                        <p class="card-meta">
                          <span class="post__date"> 1 February, 2020</span>
                          <span class="post-dot"></span>
                          <span class="post__time">4 Mins read</span>
                        </p>
                      </div>
                    </div>
                    <div
                      class="card-footer d-flex align-items-center justify-content-between"
                    >
                      <div class="author-content d-flex align-items-center">
                        <div class="author-img">
                          <img src="images/small-team2.jpg" alt="testimonial image" />
                        </div>
                        <div class="author-bio">
                          <a href="#" class="author__title">Phillip Hunt</a>
                        </div>
                      </div>
                      <div class="post-share">
                        <ul>
                          <li>
                            <i class="la la-share icon-element"></i>
                            <ul class="post-share-dropdown d-flex align-items-center">
                              <li>
                                <a href="#"><i class="lab la-facebook-f"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="lab la-twitter"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="lab la-instagram"></i></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 responsive-column">
                  <div class="card-item blog-card">
                    <div class="card-img">
                      <img src="images/blog-img3.jpg" alt="blog-img" />
                      <div class="post-format icon-element">
                        <i class="la la-music"></i>
                      </div>
                      <div class="card-body">
                        <div class="post-categories">
                          <a href="#" class="badge">audio</a>
                        </div>
                        <h3 class="card-title line-height-26">
                          <a href="blog-single.html"
                            >By all Means, Travel to Popular Sites & Don’t Rule Out
                            Other Locations</a
                          >
                        </h3>
                        <p class="card-meta">
                          <span class="post__date"> 1 March, 2020</span>
                          <span class="post-dot"></span>
                          <span class="post__time">3 Mins read</span>
                        </p>
                      </div>
                    </div>
                    <div
                      class="card-footer d-flex align-items-center justify-content-between"
                    >
                      <div class="author-content d-flex align-items-center">
                        <div class="author-img">
                          <img src="images/small-team3.jpg" alt="testimonial image" />
                        </div>
                        <div class="author-bio">
                          <a href="#" class="author__title">Luke Jacobs</a>
                        </div>
                      </div>
                      <div class="post-share">
                        <ul>
                          <li>
                            <i class="la la-share icon-element"></i>
                            <ul class="post-share-dropdown d-flex align-items-center">
                              <li>
                                <a href="#"><i class="lab la-facebook-f"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="lab la-twitter"></i></a>
                              </li>
                              <li>
                                <a href="#"><i class="lab la-instagram"></i></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="btn-box text-center pt-4">
                    <a href="blog-grid.html" class="theme-btn">Read More Post</a>
                  </div>
                </div>
              </div>
            </div>
          </section> -->
    <!-- end blog-area -->
    <!-- ================================
             START BLOG AREA
      ================================= -->

    <!-- ================================
          START MOBILE AREA
      ================================= -->
    <section class="mobile-app padding-top-100px padding-bottom-50px section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-55">
                                9jahotel Android and IOS App is Available!
                            </h2>
                        </div>
                        <!-- end section-heading -->
                        <ul class="info-list padding-top-30px">
                            <li class="d-flex align-items-center mb-3">
                                <span class="la la-check icon-element flex-shrink-0 ml-0"></span>
                                Access and change your itinerary & holidays on-the-go
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <span class="la la-check icon-element flex-shrink-0 ml-0"></span>
                                Free cancellation on select hotels
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <span class="la la-check icon-element flex-shrink-0 ml-0"></span>
                                Get real-time trip and travel updates
                            </li>
                        </ul>
                        <div class="btn-box padding-top-30px">
                            <a href="#" class="d-inline-block mr-3">
                                <img src="images/app-store.png" alt="" />
                            </a>
                            <a href="#" class="d-inline-block">
                                <img src="images/google-play.png" alt="" />
                            </a>
                        </div>
                        <!-- end btn-box -->
                    </div>
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="mobile-img">
                        <img src="images/mobile-app.png" alt="mobile-img" />
                    </div>
                </div>
                <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end mobile-app -->
    <!-- ================================
          END MOBILE AREA
      ================================= -->

    <!-- ================================
             START CLIENTLOGO AREA
      ================================= -->
    <section class="clientlogo-area padding-top-80px padding-bottom-80px text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-logo">
                        <div class="client-logo-item">
                            <img src="images/client-logo.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo2.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo3.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo4.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo5.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                        <div class="client-logo-item">
                            <img src="images/client-logo6.png" alt="brand image" />
                        </div>
                        <!-- end client-logo-item -->
                    </div>
                    <!-- end client-logo -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end clientlogo-area -->
    <!-- ================================
             START CLIENTLOGO AREA
      ================================= -->

    <!-- ================================
             START FOOTER AREA
      ================================= -->
    @include('layouts.user.includes.footer')
@endsection


