<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   
    public function home(){
        return view('frontend.home');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function blogSingle(){
        return view('frontend.blogSingle');
    }
    public function shopGrid(){
        return view('frontend.shopGrid');
    }
    public function cart(){
        return view('frontend.cart');
    }
    public function checkout(){
        return view('frontend.checkout');
    }
}
