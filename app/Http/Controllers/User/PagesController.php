<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    //user index page
    public function index()
    {
        return view('pages.user.index');
    }
    // user dashboard page
    public function user_dashboard()
    {

        return view('pages.user.dashboard.index');
    }
    // user dashboard booking page
    public function user_dashboard_booking()
    {

        return view('pages.user.dashboard.booking');
    }

    // user dashboard profile page
    public function user_dashboard_profile()
    {
        return view('pages.user.dashboard.profile');
    }
    // user dashboard review page
    public function user_dashboard_review()
    {
        return view('pages.user.dashboard.review');
    }
    // user dashboard wishlist page
    public function user_dashboard_wishlist()
    {
        return view('pages.user.dashboard.wishlist');
    }

    // rooms list page
    public function rooms()
    {
        return view('pages.user.room.index');
    }
    // single room details page
    public function rooms_details()
    {
        return view('pages.user.room.details');
    }
    //  rooms search result  list page
    public function rooms_search_result_list()
    {
        return view('pages.user.room.search_result_list');
    }
    // hotel selection list page
    public function hotel()
    {
        return view('pages.user.hotel.index');
    }
    // user hotel booking page
    public function hotel_booking()
    {
        return view('pages.user.hotel.booking');
    }
    // user hotel search page
    public function hotel_search()
    {
        return view('pages.user.hotel.search');
    }
    public function hotel_single()
    {
        return view('pages.user.hotel.view');
    }


}
