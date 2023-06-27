    @extends('layouts.user.main')
    @section('contents')

  <div class="section-bg">
  

    <!-- ================================
       START USER CANVAS MENU
================================= -->
    <div class="user-canvas-container">
      <div class="side-menu-close">
        <i class="la la-times"></i>
      </div>
      <!-- end menu-toggler -->
      <div class="user-canvas-nav">
        <div class="section-tab section-tab-2 text-center pt-4 pb-3 pl-4">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="notification-tab"
                data-toggle="tab"
                href="#notification"
                role="tab"
                aria-controls="notification"
                aria-selected="false"
              >
                Notifications
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="account-tab"
                data-toggle="tab"
                href="#account"
                role="tab"
                aria-controls="account"
                aria-selected="true"
              >
                Account
              </a>
            </li>
          </ul>
        </div>
        <!-- end section-tab -->
      </div>
      <div class="user-canvas-nav-content">
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="notification"
            role="tabpanel"
            aria-labelledby="notification-tab"
          >
            <div class="user-sidebar-item">
              <div class="notification-item">
                <div class="list-group drop-reveal-list">
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element flex-shrink-0 mr-3 ml-0">
                        <i class="la la-bell"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your request has been sent</h3>
                        <p class="msg-text">2 min ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0">
                        <i class="la la-check"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">
                          Your account has been created
                        </h3>
                        <p class="msg-text">1 day ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0">
                        <i class="la la-user"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your account updated</h3>
                        <p class="msg-text">2 hrs ago</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0">
                        <i class="la la-lock"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your password changed</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-5 flex-shrink-0 mr-3 ml-0">
                        <i class="la la-envelope"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your email sent</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="msg-body d-flex align-items-center">
                      <div class="icon-element bg-6 flex-shrink-0 mr-3 ml-0">
                        <i class="la la-envelope"></i>
                      </div>
                      <div class="msg-content w-100">
                        <h3 class="title pb-1">Your email changed</h3>
                        <p class="msg-text">Yesterday</p>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                </div>
              </div>
              <!-- end notification-item -->
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="account"
            role="tabpanel"
            aria-labelledby="account-tab"
          >
            <div class="user-action-wrap user-sidebar-panel">
              <div class="notification-item">
                <a href="user-dashboard-profile.html" class="dropdown-item">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm flex-shrink-0 mr-2">
                      <img src="images/team8.jpg" alt="team-img" />
                    </div>
                    <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                  </div>
                </a>
                <div class="list-group drop-reveal-list user-drop-reveal-list">
                  <a
                    href="user-dashboard-profile.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-user mr-2"></i>My Profile
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-booking.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-shopping-cart mr-2"></i>My Booking
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-reviews.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-heart mr-2"></i>My Reviews
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <a
                    href="user-dashboard-settings.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-gear mr-2"></i>Settings
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                  <div class="section-block"></div>
                  <a
                    href="index.html"
                    class="list-group-item list-group-item-action"
                  >
                    <div class="msg-body">
                      <div class="msg-content">
                        <h3 class="title">
                          <i class="la la-power-off mr-2"></i>Logout
                        </h3>
                      </div>
                    </div>
                    <!-- end msg-body -->
                  </a>
                </div>
              </div>
              <!-- end notification-item -->
            </div>
          </div>
        </div>
      </div>
    </div>
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
      {{-- dashboard nav --}}
      @include('layouts.user.includes.dashboard.navbar')
      <!-- end dashboard-nav -->
      
      {{-- dashboard content-wrap --}}
      <div class="dashboard-content-wrap">
        <div class="dashboard-bread">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="breadcrumb-content">
                  <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">
                      Hi, Ali Welcome Back!
                    </h2>
                  </div>
                </div>
                <!-- end breadcrumb-content -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6">
                <div class="breadcrumb-list text-right">
                  <ul class="list-items">
                    <li><a href="index.html" class="text-white">Home</a></li>
                    <li>Pages</li>
                    <li>User Dashboard</li>
                  </ul>
                </div>
                <!-- end breadcrumb-list -->
              </div>
              <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
            <div class="row mt-4">
              <div class="col-lg-3 responsive-column-m">
                <div class="icon-box icon-layout-2 dashboard-icon-box">
                  <div class="d-flex">
                    <div class="info-icon icon-element flex-shrink-0">
                      <i class="la la-shopping-cart"></i>
                    </div>
                    <!-- end info-icon-->
                    <div class="info-content">
                      <p class="info__desc">Total Booking</p>
                      <h4 class="info__title">44</h4>
                    </div>
                    <!-- end info-content -->
                  </div>
                </div>
              </div>
              <!-- end col-lg-3 -->
              <div class="col-lg-3 responsive-column-m">
                <div class="icon-box icon-layout-2 dashboard-icon-box">
                  <div class="d-flex">
                    <div class="info-icon icon-element bg-2 flex-shrink-0">
                      <i class="la la-bookmark"></i>
                    </div>
                    <!-- end info-icon-->
                    <div class="info-content">
                      <p class="info__desc">Wishlist</p>
                      <h4 class="info__title">15</h4>
                    </div>
                    <!-- end info-content -->
                  </div>
                </div>
              </div>
              <!-- end col-lg-3 -->
              <div class="col-lg-3 responsive-column-m">
                <div class="icon-box icon-layout-2 dashboard-icon-box">
                  <div class="d-flex">
                    <div class="info-icon icon-element bg-3 flex-shrink-0">
                      <i class="la la-plane"></i>
                    </div>
                    <!-- end info-icon-->
                    <div class="info-content">
                      <p class="info__desc">Total Travel</p>
                      <h4 class="info__title">25</h4>
                    </div>
                    <!-- end info-content -->
                  </div>
                </div>
              </div>
              <!-- end col-lg-3 -->
              <div class="col-lg-3 responsive-column-m">
                <div class="icon-box icon-layout-2 dashboard-icon-box">
                  <div class="d-flex">
                    <div class="info-icon icon-element bg-4 flex-shrink-0">
                      <i class="la la-star"></i>
                    </div>
                    <!-- end info-icon-->
                    <div class="info-content">
                      <p class="info__desc">Reviews</p>
                      <h4 class="info__title">20</h4>
                    </div>
                    <!-- end info-content -->
                  </div>
                </div>
              </div>
              <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
          </div>
        </div>
        <!-- end dashboard-bread -->
        <div class="dashboard-main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 responsive-column--m">
                <div class="form-box">
                  <div class="form-title-wrap">
                    <h3 class="title">Statics Results</h3>
                  </div>
                  <div class="form-content">
                    <canvas id="bar-chart"></canvas>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6 responsive-column--m">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <h3 class="title">Notifications</h3>
                      <button
                        type="button"
                        class="icon-element mark-as-read-btn ml-auto mr-0"
                        data-toggle="tooltip"
                        data-placement="left"
                        title="Mark all as read"
                      >
                        <i class="la la-check-square"></i>
                      </button>
                    </div>
                  </div>
                  <div class="form-content p-0">
                    <div class="list-group drop-reveal-list">
                      <a
                        href="#"
                        class="list-group-item list-group-item-action border-top-0"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div class="icon-element flex-shrink-0 mr-3 ml-0">
                            <i class="la la-bell"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">Group Trip - Available</h3>
                            <p class="msg-text">2 min ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0"
                            data-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-1 flex-shrink-0 mr-3 ml-0"
                          >
                            <i class="la la-bell"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">50% Discount Offer</h3>
                            <p class="msg-text">2 min ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0"
                            data-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"
                          >
                            <i class="la la-check"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">
                              Your account has been created
                            </h3>
                            <p class="msg-text">1 day ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0"
                            data-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"
                          >
                            <i class="la la-user"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">Your account updated</h3>
                            <p class="msg-text">2 hrs ago</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0"
                            data-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                      <a
                        href="#"
                        class="list-group-item list-group-item-action"
                      >
                        <div class="msg-body d-flex align-items-center">
                          <div
                            class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"
                          >
                            <i class="la la-lock"></i>
                          </div>
                          <div class="msg-content w-100">
                            <h3 class="title pb-1">Your password changed</h3>
                            <p class="msg-text">Yesterday</p>
                          </div>
                          <span
                            class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0"
                            data-toggle="tooltip"
                            data-placement="left"
                            title="Mark as read"
                          >
                            <i class="la la-check-square"></i>
                          </span>
                        </div>
                        <!-- end msg-body -->
                      </a>
                    </div>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6 responsive-column--m">
                <div class="form-box dashboard-card">
                  <div class="form-title-wrap">
                    <h3 class="title">Tasks</h3>
                  </div>
                  <div class="form-content">
                    <div
                      class="alert alert-success alert-dismissible fade show"
                      role="alert"
                    >
                      <i class="la la-check mr-2"></i>Your booking
                      <a href="#" class="alert-link">Shimla to Goa</a> has been
                      done!
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div
                      class="alert alert-success alert-dismissible fade show"
                      role="alert"
                    >
                      <i class="la la-check mr-2"></i>Sent Email to
                      <strong>dev@gmail.com</strong>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div
                      class="alert alert-success alert-dismissible fade show"
                      role="alert"
                    >
                      <i class="la la-check mr-2"></i>Received Email from
                      <strong>tripstar@yahoo.com</strong>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div
                      class="alert alert-success alert-dismissible fade show"
                      role="alert"
                    >
                      <i class="la la-check mr-2"></i>your payment is pending
                      for <a href="#" class="alert-link">Manali</a> Trip tour!
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div
                      class="alert alert-success alert-dismissible fade show"
                      role="alert"
                    >
                      <i class="la la-check mr-2"></i>Someone reply on your
                      comment on
                      <a href="#" class="alert-link">London Trip</a> Tour!
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div
                      class="alert alert-success alert-dismissible fade show"
                      role="alert"
                    >
                      <i class="la la-check mr-2"></i>You have canceled
                      <a href="#" class="alert-link">Dubai to london Trip</a>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div
                      class="alert alert-success alert-dismissible fade show"
                      role="alert"
                    >
                      <i class="la la-check mr-2"></i>You have give a review on
                      <span class="badge badge-warning text-white">4.5</span>
                      <a href="#" class="alert-link">EnVision Hotel Boston</a>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
              <div class="col-lg-6 responsive-column--m">
                <div class="form-box dashboard-card order-card border-0">
                  <div class="form-title-wrap">
                    <h3 class="title">Orders</h3>
                  </div>
                  <div class="form-content p-0">
                    <div class="list-group drop-reveal-list">
                      <div
                        class="list-group-item list-group-item-action border-top-0"
                      >
                        <div
                          class="msg-body d-flex align-items-center justify-content-between"
                        >
                          <div class="msg-content">
                            <h3 class="title pb-2">
                              3 - Night Bahamas - Miami Round-Trip
                            </h3>
                            <ul class="list-items d-flex align-items-center">
                              <li class="font-size-14 mr-2">
                                <span
                                  class="badge badge-success py-1 px-2 font-size-13 font-weight-medium"
                                  >Paid</span
                                >
                              </li>
                              <li class="font-size-14 mr-2">Order: #232</li>
                              <li class="font-size-14">Date: 11/05/2019</li>
                            </ul>
                          </div>
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                          >
                            View Invoice
                          </a>
                        </div>
                        <!-- end msg-body -->
                      </div>
                      <div class="list-group-item list-group-item-action">
                        <div
                          class="msg-body d-flex align-items-center justify-content-between"
                        >
                          <div class="msg-content">
                            <h3 class="title pb-2">California To Newyork</h3>
                            <ul class="list-items d-flex align-items-center">
                              <li class="font-size-14 mr-2">
                                <span
                                  class="badge badge-danger py-1 px-2 font-size-13 font-weight-medium"
                                  >UnPaid</span
                                >
                              </li>
                              <li class="font-size-14 mr-2">Order: #232</li>
                              <li class="font-size-14">Date: 11/05/2019</li>
                            </ul>
                          </div>
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                          >
                            Finish Payment
                          </a>
                        </div>
                        <!-- end msg-body -->
                      </div>
                      <div class="list-group-item list-group-item-action">
                        <div
                          class="msg-body d-flex align-items-center justify-content-between"
                        >
                          <div class="msg-content">
                            <h3 class="title pb-2">
                              Two Hour Walking Tour of Manhattan
                            </h3>
                            <ul class="list-items d-flex align-items-center">
                              <li class="font-size-14 mr-2">
                                <span
                                  class="badge badge-success py-1 px-2 font-size-13 font-weight-medium"
                                  >Paid</span
                                >
                              </li>
                              <li class="font-size-14 mr-2">Order: #232</li>
                              <li class="font-size-14">Date: 11/05/2019</li>
                            </ul>
                          </div>
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                          >
                            View Invoice
                          </a>
                        </div>
                        <!-- end msg-body -->
                      </div>
                      <div class="list-group-item list-group-item-action">
                        <div
                          class="msg-body d-flex align-items-center justify-content-between"
                        >
                          <div class="msg-content">
                            <h3 class="title pb-2">Dubai to Spain</h3>
                            <ul class="list-items d-flex align-items-center">
                              <li class="font-size-14 mr-2">
                                <span
                                  class="badge badge-success py-1 px-2 font-size-13 font-weight-medium"
                                  >Paid</span
                                >
                              </li>
                              <li class="font-size-14 mr-2">Order: #232</li>
                              <li class="font-size-14">Date: 11/05/2019</li>
                            </ul>
                          </div>
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                          >
                            View Invoice
                          </a>
                        </div>
                        <!-- end msg-body -->
                      </div>
                      <div class="list-group-item list-group-item-action">
                        <div
                          class="msg-body d-flex align-items-center justify-content-between"
                        >
                          <div class="msg-content">
                            <h3 class="title pb-2">Parian Holiday Villas</h3>
                            <ul class="list-items d-flex align-items-center">
                              <li class="font-size-14 mr-2">
                                <span
                                  class="badge badge-success py-1 px-2 font-size-13 font-weight-medium"
                                  >Paid</span
                                >
                              </li>
                              <li class="font-size-14 mr-2">Order: #232</li>
                              <li class="font-size-14">Date: 11/05/2019</li>
                            </ul>
                          </div>
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                          >
                            View Invoice
                          </a>
                        </div>
                        <!-- end msg-body -->
                      </div>
                      <div class="list-group-item list-group-item-action">
                        <div
                          class="msg-body d-flex align-items-center justify-content-between"
                        >
                          <div class="msg-content">
                            <h3 class="title pb-2">Lake Palace Hotel</h3>
                            <ul class="list-items d-flex align-items-center">
                              <li class="font-size-14 mr-2">
                                <span
                                  class="badge badge-success py-1 px-2 font-size-13 font-weight-medium"
                                  >Paid</span
                                >
                              </li>
                              <li class="font-size-14 mr-2">Order: #232</li>
                              <li class="font-size-14">Date: 11/05/2019</li>
                            </ul>
                          </div>
                          <a
                            href="#"
                            class="theme-btn theme-btn-small theme-btn-transparent font-size-13"
                          >
                            View Invoice
                          </a>
                        </div>
                        <!-- end msg-body -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end form-box -->
              </div>
              <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
            <div class="border-top mt-4"></div>
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                  <p class="copy__desc">
                    &copy; Copyright 2022. All rights reserved
                    <span class="la la-heart"></span> Powered by
                    <a href="#">9jahotels</a>
                  </p>
                </div>
                <!-- end copy-right -->
              </div>
              <!-- end col-lg-7 -->
              <div class="col-lg-5">
                <div class="copy-right-content text-right padding-top-30px">
                  <ul class="social-profile">
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
                <!-- end copy-right-content -->
              </div>
              <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container-fluid -->
        </div>
        <!-- end dashboard-main-content -->
      </div>
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
