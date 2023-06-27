@extends('layouts.user.includes.dashboard.main')
@section('dasboard_nav_contents')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="breadcrumb-content">
              <div class="section-heading">
                <h2 class="sec__title font-size-30 text-white">
                  My Booking
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
                <li>Dashboard</li>
                <li>My Booking</li>
              </ul>
            </div>
            <!-- end breadcrumb-list -->
          </div>
          <!-- end col-lg-6 -->
        </div>
        <!-- end row -->
      </div>
    </div>
    <!-- end dashboard-bread -->
    <div class="dashboard-main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-box">
              <div class="form-title-wrap">
                <div
                  class="d-flex align-items-center justify-content-between"
                >
                  <div>
                    <h3 class="title">Booking Results</h3>
                    <!-- <p class="font-size-14">Showing 1 to 7 of 17 entries</p> -->
                  </div>
                  <span
                    >Total Bookings
                    <strong class="color-text" id="bookCount"
                      >0 Bookings</strong
                    ></span
                  >
                </div>
              </div>
              <div class="form-content">
                <div class="table-form table-responsive" style="overflow: visible;">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Title</th>
                        <th scope="col">Location</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Check In Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col"> Action</th>
                        <th scope="col"> More</th>
                      </tr>
                    </thead>
                    <tbody id="bookingTable">
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- end form-box -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <!-- <div class="row">
          <div class="col-lg-12">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a
                    class="page-link page-link-nav"
                    href="#"
                    aria-label="Previous"
                  >
                    <span aria-hidden="true"
                      ><i class="la la-angle-left"></i
                    ></span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link page-link-nav" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link page-link-nav" href="#"
                    >2 <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="page-item">
                  <a class="page-link page-link-nav" href="#">3</a>
                </li>
                <li class="page-item">
                  <a
                    class="page-link page-link-nav"
                    href="#"
                    aria-label="Next"
                  >
                    <span aria-hidden="true"
                      ><i class="la la-angle-right"></i
                    ></span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
        <!-- end row -->
        <div class="border-top mt-5"></div>
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
<div class="modal fade" id="review_form_modal" tabindex="-1" aria-labelledby="review_form_modal_title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title" id="review_form_modal_title">Make Review</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
                        autocomplete="name"
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
                        autocomplete="email"
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
                    <button id='send_review' type="submit" class="theme-btn">
                      Leave a Review
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
