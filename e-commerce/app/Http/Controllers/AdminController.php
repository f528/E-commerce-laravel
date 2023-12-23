<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{
    public function products()

    {


        return View('admin.product');
    }

    public function uploadproduct(Request $request)
    {


       $data = $request->all();

       Product::create($data);
        $image = $request->image;

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('image', $imageName);

        return redirect()->back()->with('message','Successfully uploaded');

    }
    public function showproducts(){
         $data = Product::paginate(8);
        return View('admin.showproduct',compact('data'));
    }






}
