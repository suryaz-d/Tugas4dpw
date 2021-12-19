<?php

namespace App\Http\Controllers;

class TokoController extends Controller
{
    function showIndex(){
        return view('index');
    }

    function showProduct(){
        return view('product');
    }

    function showAbout(){
        return view('about');
    }

    function showTestimonial(){
        return view('testimonial');
    }

    function showWhy(){
        return view('why');
    }

}
