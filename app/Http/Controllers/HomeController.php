<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        // return view('home');
        return redirect()->route('products');
    }
    public function gioithieu()
    {
        return view('homepage.gioithieu');
    }
    public function lienhe()
    {
        return view('homepage.lienhe');
    }
    public function tintuc()
    {
        return view('homepage.tintuc');
    }
    public function chitiettintuc()
    {
        return view('homepage.chitiettintuc');
    }
    public function chitietsanpham($id,$name)
    {
        $product = DB::table('product')->where('id', $id)->first();
        $catalog = $product->catalog_id;
        $related_products = DB::table('product')->where('catalog_id', $catalog)->get();
        $price = $product->price;
        $product_id = $product->id;
        $status = 0;
        $items = [$price, $product_id, $status];
        return view('homepage.chitietsanpham', ['product' => $product, 'related_products' => $related_products], compact('items'));
    }
    public function giohang()
    {
        return view('homepage.giohang');
    }

    public function updateCart(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $transaction = [
            
        ];
        $order = [

        ];
        return view('homepage.giohang');
    }

    public function products()
    {
        #$users = DB::select('select * from users where active = ?', [1]);
        #$products = DB::select('select * from product');
        $products = DB::table('product')->paginate(12);
        #$products = Product::all();

        return view('homepage.sanpham', ['products' => $products]);
    }
    public function admin()
    {
        // return view('home');
        return view('home');
    }
    public function account()
    {
        return view('auth.login');
    }
    public function render_register(Request $request)
    {
        return view('auth.register');
    }
    public function login(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($arr)){
            return redirect()->route('products');
        }
        else {
            return view('auth.login');
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            return redirect()->route('account')
                ->withErrors($validator);
        }
        else {
            User::create([    
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
        ]);
            return redirect()->route('products');
        }
    }

    // public function adminLogin()
    // {
    //     return view('admin.login');
    // }
    // // public function adminRegister(Request $request)
    // // {
    // //     return view('admin.register');
    // // }
    // public function adminPostLogin(Request $request)
    // {
    //     $arr = [
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ];
    //     if (Auth::guard('admin')->attempt($arr)) {
    //         return redirect()->route('admin');
    //     }
    //     else {
    //         return view('admin.login');
    //     }
    // }

    // public function adminPostRegister(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         // 'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'password' => ['required', 'string', 'min:8'],
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect()->route('account')
    //             ->withErrors($validator);
    //     }
    //     else {
    //         Admin::create([    
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password),
    //     ]);
    //         return redirect()->route('products');
    //     }
    // }
}
