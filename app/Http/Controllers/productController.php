<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index(){
   $products= product::all();

//   dd($products);
        return view('product',[
            "products"=>$products
        ]);
    }

        public function create(){
            return view('create');
        }

       public function store(Request $request){
    $name=$request->input('name');
    $description=$request->input('description');
    $price=$request->input('price');
    $product=new Product;
    $product->name=$name;
    $product->description=$description;
    $product->price=$price;
    $product->save();
    return redirect()->route('products');
       }

}
