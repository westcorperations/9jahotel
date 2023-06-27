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
    <section class="breadcrumb-area bread-bg-7">
      <div class="breadcrumb-wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="breadcrumb-content">
                <div class="section-heading">
                  <h2 class="sec__title text-white">Hotel List</h2>
                </div>
              </div>
              <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-6 -->
            <div class="col-lg-6">
              <div class="breadcrumb-list text-right">
                <ul class="list-items">
                  <li><a href="index.html">Home</a></li>
                  <li>Hotel</li>
                  <li>Hotel List</li>
                </ul>
              </div>
              <!-- end breadcrumb-list -->
            </div>
            <!-- end col-lg-6 -->
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
            <div class="filter-wrap margin-bottom-30px">
              <div
                class="filter-top d-flex align-items-center justify-content-between pb-4"
              >
                <div>
                  <h3 class="title font-size-24" id="hotels_foundCount"></h3>
                  <p class="font-size-14">
                    <span class="mr-1 pt-1">Book with confidence:</span>No hotel
                    booking fees
                  </p>
                </div>
                <div class="layout-view d-flex align-items-center">
                  <a
                    href="hotel-search-result.html"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Grid View"
                    ><i class="la la-th-large"></i
                  ></a>
                  <a
                    href="hotel-list.html"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="List View"
                    class="active"
                    ><i class="la la-th-list"></i
                  ></a>
                </div>
              </div>
              <!-- end filter-top -->
              <div
                class="filter-bar d-flex align-items-center justify-content-between"
              >
                <div
                  class="filter-bar-filter d-flex flex-wrap align-items-center"
                >
                  <!-- <div class="filter-option">
                    <h3 class="title font-size-16">Filter by:</h3>
                  </div> -->
                  <!-- <div class="filter-option">
                    <div class="dropdown dropdown-contain">
                      <a
                        class="dropdown-toggle dropdown-btn dropdown--btn"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                      >
                        Filter Price
                      </a>
                      <div class="dropdown-menu dropdown-menu-wrap">
                        <div class="dropdown-item">
                          <div class="slider-range-wrap">
                            <div
                              class="price-slider-amount padding-bottom-20px"
                            >
                              <label for="amount" class="filter__label"
                                >Price:</label
                              >
                              <input type="text" id="amount" class="amounts" />
                            </div>
                            <div id="slider-range"></div>
                          </div>
                          <div class="btn-box pt-4">
                            <button
                              class="theme-btn theme-btn-small theme-btn-transparent"
                              type="button"
                            >
                              Apply
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="filter-option">
                    <div class="dropdown dropdown-contain">
                      <a
                        class="dropdown-toggle dropdown-btn dropdown--btn"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                      >
                        Review Score
                      </a>
                      <div class="dropdown-menu dropdown-menu-wrap">
                        <div class="dropdown-item">
                          <div class="checkbox-wrap">
                            <div class="custom-checkbox">
                              <input type="checkbox" id="r1" />
                              <label for="r1">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <span class="color-text-3 font-size-13 ml-1"
                                    >(55.590)</span
                                  >
                                </span>
                              </label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="r2" />
                              <label for="r2">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star-o"></i>
                                  <span class="color-text-3 font-size-13 ml-1"
                                    >(40.590)</span
                                  >
                                </span>
                              </label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="r3" />
                              <label for="r3">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <span class="color-text-3 font-size-13 ml-1"
                                    >(23.590)</span
                                  >
                                </span>
                              </label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="r4" />
                              <label for="r4">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <span class="color-text-3 font-size-13 ml-1"
                                    >(12.590)</span
                                  >
                                </span>
                              </label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="r5" />
                              <label for="r5">
                                <span class="ratings d-flex align-items-center">
                                  <i class="la la-star"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <i class="la la-star-o"></i>
                                  <span class="color-text-3 font-size-13 ml-1"
                                    >(590)</span
                                  >
                                </span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="filter-option">
                    <div class="dropdown dropdown-contain">
                      <a
                        class="dropdown-toggle dropdown-btn dropdown--btn"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                      >
                        Facilities
                      </a>
                      <div class="dropdown-menu dropdown-menu-wrap">
                        <div class="dropdown-item">
                          <div class="checkbox-wrap">
                            <div class="custom-checkbox">
                              <input type="checkbox" id="catChb1" />
                              <label for="catChb1">Pet Allowed</label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="catChb2" />
                              <label for="catChb2">Groups Allowed</label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="catChb3" />
                              <label for="catChb3">Tour Guides</label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="catChb4" />
                              <label for="catChb4">Access for disabled</label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="catChb5" />
                              <label for="catChb5">Room Service</label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="catChb6" />
                              <label for="catChb6">Parking</label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="catChb7" />
                              <label for="catChb7">Restaurant</label>
                            </div>
                            <div class="custom-checkbox">
                              <input type="checkbox" id="catChb8" />
                              <label for="catChb8">Pet friendly</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- end filter-bar-filter -->
                <div class="select-contain" style="display:none;">
                  <select class="select-contain-select">
                    <option value="1">Short by default</option>
                    <option value="2">Popular Hotel</option>
                    <option value="3">Price: low to high</option>
                    <option value="4">Price: high to low</option>
                    <option value="5">A to Z</option>
                  </select>
                </div>
                <!-- end select-contain -->
              </div>
              <!-- end filter-bar -->
            </div>
            <!-- end filter-wrap -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-4">
            <div class="sidebar mt-0">
              <div class="sidebar-widget">
                <h3 class="title stroke-shape">Search Hotels</h3>
                <div class="sidebar-widget-item">
                  <div class="contact-form-action">
                    <form action="#">
                      <div class="input-box">
                        <label class="label-text"
                          >Destination / hotel name</label
                        >
                        <div class="form-group">
                          <span class="la la-map-marker form-icon"></span>
                          <input
                            class="form-control"
                            type="text"
                            name="text"
                            id="searchTerm"
                            placeholder="Destination, hotel name"
                          />
                        </div>
                      </div>
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
                    <label class="font-size-16">Rooms</label>
                    <div class="roomBtn d-flex align-items-center">
                      <div class="roomDec"><i class="la la-minus"></i></div>
                      <input type="text" name="roomInput" value="0" />
                      <div class="roomInc"><i class="la la-plus"></i></div>
                    </div>
                  </div>
                  <!-- end qty-box -->
                  <div
                    class="qty-box mb-2 d-flex align-items-center justify-content-between"
                  >
                    <label class="font-size-16">Adults <span>18+</span></label>
                    <div class="qtyBtn d-flex align-items-center">
                      <div class="qtyDec"><i class="la la-minus"></i></div>
                      <input
                        type="text"
                        name="qtyInput"
                        id="adultInput"
                        value="0"
                      />
                      <div class="qtyInc"><i class="la la-plus"></i></div>
                    </div>
                  </div>
                  <!-- end qty-box -->
                  <div
                    class="qty-box mb-2 d-flex align-items-center justify-content-between"
                  >
                    <label class="font-size-16"
                      >Children <span>2-17 years old</span></label
                    >
                    <div class="qtyBtn d-flex align-items-center">
                      <div class="qtyDec"><i class="la la-minus"></i></div>
                      <input
                        type="text"
                        name="qtyInput"
                        id="childInput"
                        value="0"
                      />
                      <div class="qtyInc"><i class="la la-plus"></i></div>
                    </div>
                  </div>
                  <!-- end qty-box -->
                </div>
                <!-- end sidebar-widget-item -->
                <div class="btn-box pt-2">
                  <button id="searchSubmit" class="theme-btn">
                    Search Now
                  </button>
                </div>
              </div>
              <!-- end sidebar-widget -->
              <div class="sidebar-widget" style="display: none;">
                <h3 class="title stroke-shape">Filter by Price</h3>
                <div class="sidebar-price-range">
                  <div class="main-search-input-item">
                    <div class="price-slider-amount padding-bottom-20px">
                      <label for="amount2" class="filter__label">Price:</label>
                      <input type="text" id="amount2" class="amounts" />
                    </div>
                    <!-- end price-slider-amount -->
                    <div id="slider-range2"></div>
                    <!-- end slider-range -->
                  </div>
                  <!-- end main-search-input-item -->`
                  <div class="btn-box pt-4">
                    <button
                      class="theme-btn theme-btn-small theme-btn-transparent"
                      type="button"
                    >
                      Apply
                    </button>
                  </div>
                </div>
              </div>
              <!-- end sidebar-widget -->
              <!-- <div class="sidebar-widget">
                <h3 class="title stroke-shape">Review Score</h3>
                <div class="sidebar-category">
                  <div class="custom-checkbox">
                    <input type="checkbox" id="r6" />
                    <label for="r6">Excellent</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="r7" />
                    <label for="r7">Very Good</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="r8" />
                    <label for="r8">Average</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="r9" />
                    <label for="r9">Poor</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="r10" />
                    <label for="r10">Terrible</label>
                  </div>
                </div>
              </div> -->
              <!-- end sidebar-widget -->
              <div class="sidebar-widget" style="display: none;">
                <h3 class="title stroke-shape">Filter by Rating</h3>
                <div class="sidebar-review">
                  <div class="custom-checkbox">
                    <input type="checkbox" id="s1" />
                    <label for="s1">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <span class="color-text-3 font-size-13 ml-1"
                          >(55.590)</span
                        >
                      </span>
                    </label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="s2" />
                    <label for="s2">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <span class="color-text-3 font-size-13 ml-1"
                          >(40.590)</span
                        >
                      </span>
                    </label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="s3" />
                    <label for="s3">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <span class="color-text-3 font-size-13 ml-1"
                          >(23.590)</span
                        >
                      </span>
                    </label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="s4" />
                    <label for="s4">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <span class="color-text-3 font-size-13 ml-1"
                          >(12.590)</span
                        >
                      </span>
                    </label>
                  </div>
                  <div class="custom-checkbox mb-0">
                    <input type="checkbox" id="s5" />
                    <label for="s5">
                      <span class="ratings d-flex align-items-center">
                        <i class="la la-star"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <i class="la la-star-o"></i>
                        <span class="color-text-3 font-size-13 ml-1"
                          >(590)</span
                        >
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <!-- end sidebar-widget -->
              <!-- <div class="sidebar-widget">
                <h3 class="title stroke-shape">Facilities</h3>
                <div class="sidebar-category">
                  <div class="custom-checkbox">
                    <input type="checkbox" id="f1" />
                    <label for="f1">Air Conditioning</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="chb12" />
                    <label for="chb12">Airport Transport</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="f2" />
                    <label for="f2">Fitness Center</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="f3" />
                    <label for="f3">Flat Tv</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="f4" />
                    <label for="f4">Heater</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="f5" />
                    <label for="f5">Internet – Wifi</label>
                  </div>
                  <div class="collapse" id="facilitiesMenu">
                    <div class="custom-checkbox">
                      <input type="checkbox" id="f6" />
                      <label for="f6">Parking</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="f7" />
                      <label for="f7">Pool</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="f8" />
                      <label for="f8">Restaurant</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="f9" />
                      <label for="f9">Smoking Room</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="f10" />
                      <label for="f10">Spa &amp; Sauna</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="f11" />
                      <label for="f11">Washer &amp; Dryer</label>
                    </div>
                  </div>
                  <a
                    class="btn-text"
                    data-toggle="collapse"
                    href="#facilitiesMenu"
                    role="button"
                    aria-expanded="false"
                    aria-controls="facilitiesMenu"
                  >
                    <span class="show-more"
                      >Show More <i class="la la-angle-down"></i
                    ></span>
                    <span class="show-less"
                      >Show Less <i class="la la-angle-up"></i
                    ></span>
                  </a>
                </div>
              </div> -->
              <!-- end sidebar-widget -->
              <!-- <div class="sidebar-widget">
                <h3 class="title stroke-shape">Hotel Theme</h3>
                <div class="sidebar-category">
                  <div class="custom-checkbox">
                    <input type="checkbox" id="ht1" />
                    <label for="ht1">Best value</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="ht2" />
                    <label for="ht2">Boutique</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="ht3" />
                    <label for="ht3">Budget</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="ht4" />
                    <label for="ht4">Business</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="ht5" />
                    <label for="ht5">Charming</label>
                  </div>
                  <div class="custom-checkbox">
                    <input type="checkbox" id="ht6" />
                    <label for="ht6">Classic</label>
                  </div>
                  <div class="collapse" id="hotelThemeMenu">
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht7" />
                      <label for="ht7">Green</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht8" />
                      <label for="ht8">Luxury</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht9" />
                      <label for="ht9">Mid-range</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht10" />
                      <label for="ht10">Party</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht11" />
                      <label for="ht11">Quaint</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht12" />
                      <label for="ht12">Quite</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht14" />
                      <label for="ht14">Romantic</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht15" />
                      <label for="ht15">Standard</label>
                    </div>
                    <div class="custom-checkbox">
                      <input type="checkbox" id="ht16" />
                      <label for="ht16">Trendy</label>
                    </div>
                  </div>
                  <a
                    class="btn-text"
                    data-toggle="collapse"
                    href="#hotelThemeMenu"
                    role="button"
                    aria-expanded="false"
                    aria-controls="hotelThemeMenu"
                  >
                    <span class="show-more"
                      >Show More <i class="la la-angle-down"></i
                    ></span>
                    <span class="show-less"
                      >Show Less <i class="la la-angle-up"></i
                    ></span>
                  </a>
                </div>
              </div> -->
              <!-- end sidebar-widget -->
            </div>
            <!-- end sidebar -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-8" id="hotelList"></div>
          <!-- end col-lg-8 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <!-- <div class="btn-box mt-3 text-center">
              <button type="button" class="theme-btn">
                <i class="la la-refresh mr-1"></i>Load More
              </button>
              <p class="font-size-13 pt-2">Showing 1 - 6 of 2224 Hotels</p>
            </div> -->
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

    <div class="section-block"></div>

    <!-- ================================
    START INFO AREA
================================= -->
    <section class="info-area info-bg padding-top-90px padding-bottom-70px">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 responsive-column">
            <a href="#" class="icon-box icon-layout-2 d-flex">
              <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                <i class="la la-phone"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title">Need Help? Contact us</h4>
                <p class="info__desc">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>
              </div>
              <!-- end info-content --> </a
            ><!-- end icon-box -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <a href="#" class="icon-box icon-layout-2 d-flex">
              <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                <i class="la la-money"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title">Payments</h4>
                <p class="info__desc">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>
              </div>
              <!-- end info-content --> </a
            ><!-- end icon-box -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <a href="#" class="icon-box icon-layout-2 d-flex">
              <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                <i class="la la-times"></i>
              </div>
              <!-- end info-icon-->
              <div class="info-content">
                <h4 class="info__title">Cancel Policy</h4>
                <p class="info__desc">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>
              </div>
              <!-- end info-content --> </a
            ><!-- end icon-box -->
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

    
  </div>

@endsection