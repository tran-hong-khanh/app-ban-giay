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
        $name = $product->name;
        $img = $product->image_link;
        $price = $product->price;
        $product_id = $product->id;
        $status = 0;
        $items = [$price, $product_id, $name, $img, $status];
        return view('homepage.chitietsanpham', ['product' => $product, 'related_products' => $related_products], compact('items'));
    }
    public function giohang(Request $request)
    {
        $items = \Cart::getContent();
        $items = $items ? $items->toArray() : [];
        return view('homepage.giohang', compact('items'));
    }

    public function updateCart(Request $request)
    {
        $data = $request->all();
        $items = \Cart::getContent();
        $count = 0;
        // dd($data['Lines']);
        // dd($data['quantity']);
        // dd($items);
        if (isset($data['quantity'])) {
            foreach($items as $index => $item) {
                \Cart::remove($item['id']);
                \Cart::add($item['id'], $item['name'], $item['price'], $data['quantity'][$count], [
                        'status' => $item['attributes']['status'],
                        'img' => $item['attributes']['img']
                    ]);
                $count = $count + 1 ;
            }
            \Session::flash('success', 'Cập nhật giỏ hàng thành công');
            //return redirect()->route('giohang');
        }
        if (isset($data['items'])) {
            \Cart::add($data['items'][1], $data['items'][2], $data['items'][0], $data['Lines'], [
                        'status' => $data['items'][4],
                        'img' => $data['items'][3]
                    ]);
            \Session::flash('success', 'Cập nhật giỏ hàng thành công');
            return redirect()->route('giohang');
        } else {
            // return redirect()->route('giohang')->withErrors(['error' => 'Chưa có sản phẩm nào']);
            return redirect()->route('giohang');
        }
    }
     public function removeItemInCart($id)
    {
        \Cart::remove($id);
        \Session::flash('success', 'Cập nhật giỏ hàng thành công');
        return redirect()->route('giohang');
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
