<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
       
        if ($usertype == '1') {
            return view('admin.admin');
        } else {
            return view('user.home');
        }
    }

    public function index()
    {
        if (Auth::id()) {

            return redirect('redirect');
        } else {
            $data = Product::latest()->paginate(6);


            $user= auth()->user();

            $count = Cart::where('phone', $user->phone)->count();

            return view('user.home',compact('data','count'));
        }
    }

    public function search(Request $request){

        $search = $request->search;
        if($search == ''){
            $data = Product::paginate(6);
            return view('user.home',compact('data'));
        }
        $data = Product::where('title','Like','%'.$search.'%')->get();
        return view('user.home',compact('data'));
    }



    public function addcart(Request $request,$id){

        if (Auth::id()){

            $user = Auth::user();
            $data = Product::find($id);
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->adderss;
            $cart->product_title = $data->title;
            $cart->price = $data->price;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back()->with('message','product added successfully');
        }
        else{
            return redirect('login');
        }
    }
    public function showcart(){
        $user = auth()->user();
        $cart = Cart::where('phone',$user->phone)->get;
        $count = Cart::where('phone', $user->phone)->count();
       return view('user.showcart',compact('count','cart'));
    }
}
