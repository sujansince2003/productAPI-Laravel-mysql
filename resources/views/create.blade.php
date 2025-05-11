<div>

<h1>Add data to the database</h1>
<form method="POST" action="{{ route('store') }}">
 @csrf

    <label for="name">Product Name</label>
    <input type="text" id="name" name="name">

    <label for="description">product description</label>
    <input type="text" id="description" name="description">

    <label for="price">Price</label>
    <input type="number" id="price" name="price">
   
<button>Add</button>


</form>


</div>