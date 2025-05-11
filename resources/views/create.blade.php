<div>

<h1>Add data to the database</h1>


{{-- showing validation errors --}}
@if($errors -> any())
<ul>
    @foreach ($errors->all() as  $error)
        <li>{{ $error }}</li>
        
    @endforeach
</ul>

@endif



<form method="POST" action="{{ route('store') }}">
 @csrf

    <label for="name">Product Name</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
{{-- value="{{ old('name') }} to keep the old value when the validation failed --}}
    <label for="description">product description</label>
    <input type="text" id="description" name="description">

    <label for="price">Price</label>
    <input type="number" id="price" name="price">
   
<button>Add</button>


</form>


</div>