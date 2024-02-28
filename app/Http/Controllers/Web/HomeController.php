<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('web.pages.home');
    }
    function about()
    {
        return view('web.pages.about');
    }
    function single_product()
    {
        return view('web.pages.single_product');
    }
    function blog()
    {
        return view('web.pages.blog');
    }
    function all_product()
    {
        return view('web.pages.all_product');
    }
    function contact()
    {
        return view('web.pages.contact');
    }
}
