<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{


    public function create(Request $request)
    {

      $data =$request->all();



       $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assicurati che il campo 'image' sia il nome corretto del campo del tuo modulo
            // Assicurati che il campo 'image' sia il nome corretto del campo del tuo modulo

        ]);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);


        Product::create(['image' => $imageName,]);
        return redirect()->back()
            ->with('message', 'Post created successfully.');
    }



    public function products()

    {


        return View('admin.product');
    }


    public function showproducts()
    {
        $data = Product::paginate(8);

        return View('admin.showproduct', compact('data'));
    }


    public function deleteproduct($id)
    {

        //or
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Successfully deleted');
    }

    public function updateproduct($id)
    {


        $data = Product::find($id);

        return View('admin.updateproduct', compact('data'));
    }


    public function update(Request $request, $id)
    {



        $data = Product::find($id);
        $image = $request->file;
        if ($image) {
            $imagename = time() . '-' . $image->getClientOriginalExtension();
            $request->file->move('image', $imagename);
            $data->image->$imagename;
        }


        $data->title = $request->title;
        $data->title = $request->price;
        $data->title = $request->description;
        $data->title = $request->quantity;
        $data->save();
        return redirect()->back()->with('message', 'product updated successfully');
    }
}
