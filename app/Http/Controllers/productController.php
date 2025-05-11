<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index(){

        // geting all products
   $products= product::all();

//   dd($products);
// passing prodcuts data to the product blade view
        return view('product',[
            "products"=>$products
        ]);
    }

       
    // this is to show create.blade.php when user clicks the create new btn
    public function create(){
            return view('create');
        }


//this function is to store data to database
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
