<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index(){

        // geting all products
//    $products= product::all();   if we want to get all data at once
$products= product::paginate(3);  


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


        public function viewProduct(string $id){
            // dd($id);
            $product= Product::select("*")->where('id','=',$id)->first();
        //   dd($product);
                 if($product==null){
                    // return redirect()->route('products');
                    abort(404);
                 }


            // return view('viewProduct',[
            //     "product"=>$product 
            // ]);
            // both do the same
            return view('viewProduct',compact('product'));
        }




         public function editProduct(string $id){
            $product= Product::select("*")->where('id','=',$id)->first();
            return view('edit',compact('product'));
         }








//this function is to store data to database
        public function store(Request $request){
   

        //    validation
            $request->validate([
                "name"=>"required | max:100",
                "description"=> "nullable | min:3",
                "price"=>"required | numeric | max:1000 | min:10"
            ]);
   
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


       public function updateProduct(Request $request,string $id){
        $request->validate([
            "name"=>"required | max:100",
            "description"=> "nullable | min:3",
            "price"=>"required | numeric | max:1000 | min:10"
        ]);       
        $name=$request->input('name');   
        $description=$request->input('description');                
        $price=$request->input('price');
        $product=Product::find($id);
        $product->name=$name;
        $product->description=$description;
        $product->price=$price;
        $product->save();
        return redirect()->route('products');   
     

       }


       public function deleteProduct(string $id){

        $product=Product::find($id);
        $product->delete();
        return redirect()->route('products');   
       }

}
