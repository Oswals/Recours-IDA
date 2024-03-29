<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index() {

        return view('frontend.index');
    }

    public function about() {

        return view('frontend.pages.about');
    }

    public function contact() {

        return view('frontend.pages.contact');
    }

    public function services() {
        return view('frontend.pages.services');
    }


    public function blog() {
        return view('frontend.pages.blog');
    }

    public function blog_details() {
        return view('frontend.pages.blog_details');
    }
}
