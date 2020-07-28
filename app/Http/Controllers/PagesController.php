<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }
    public function getAbout(){
        return view('about');
    }
    public function getContact(){
        return view('contact');
    }
    public function getShop(){
        return view('shop');
    }
    public function getCart(){
        return view('cart');
    }
    public function getSingle(){
        return view('single');
    }
}
