<div>

    <h1>
        {{ $product->name }}
    </h1>
    <h1>
        {{ $product->description }}
    </h1>
    <h1>
        {{ $product->price }}
    </h1>

    <a href="{{ route('editProduct',[$product->id]) }}">Edit</a>

<form action="{{ route('deleteProduct',[$product->id]) }}" method="POST">
    @method('DELETE')
    @csrf       
    <button>delete</button>
</form>


   
</div>