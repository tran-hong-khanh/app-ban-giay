<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    // public function products()
    // {
    //     #$users = DB::select('select * from users where active = ?', [1]);
    //     #$products = DB::select('select * from product');
    //     $products = DB::table('product')->paginate(12);
    //     #$products = Product::all();

    //     return view('homepage.sanpham', ['products' => $products]);
    // }
    // public function account()
    // {
    //     // if (session()->has('miing_token')) {
    //     //     return redirect()->route('products');
    //     // }
    //     // return view('homepage.login');
    // }
    // public function login(Request $request)
    // {
       
    // }

    // public function register(Request $request)
    // {
    
    // }

}
