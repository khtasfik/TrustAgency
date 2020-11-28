<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('blog');
    }

    public function service_details()
    {
        return view('service-details');
    }

    public function blog_details()
    {
        return view('blog-details');
    }

    public function contact()
    {
        return view('contact');
    }

    public function userLoan()
    {
        return view('user.loan-apply');
    }
}
