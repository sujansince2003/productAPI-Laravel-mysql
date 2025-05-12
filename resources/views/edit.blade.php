<div>
    edit productss


    <form method="POST" action="{{ route('updateProduct',[$product->id]) }}">
        @method('PATCH')
        @csrf
       
           <label for="name">Product Name</label>
           <input type="text" id="name" name="name" value="{{ old('name',$product->name) }}">
      
           <label for="description">product description</label>
           <input type="text" id="description" name="description" value="{{ old('description',$product->description) }}">
       
           <label for="price">Price</label>
           <input type="number" id="price" name="price" value="{{ old('price',$product->price) }}">
          
       <button>update</button>
       
       
       </form>
</div>