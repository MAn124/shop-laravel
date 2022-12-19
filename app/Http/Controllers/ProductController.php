<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
class ProductController extends Controller
{
    function index() {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    function details($id) {

        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search (Request $req) {
        
        $data = Product::where('name', 'like', '%'.$req->input('search').'%')->get();
        return view('search', ['product' => $data]);
    }
    function addCart(Request $req) {
        if($req->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
        } else {
            return redirect('/login');
        }
    }
    function cartItem() {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
