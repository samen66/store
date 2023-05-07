<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home');
    }
    public function products(){
        return view('products');
    }
    public function basket(){
        return view('basket');
    }
    public function checkout(){
        return view('checkout');
    }
    public function product(){
        return view('product');
    }
    public function categories(){
        return view('categories');
    }
    public function login(){
        return view('auth.login');
    }
}
