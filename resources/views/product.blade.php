<h1>Hello this is product page</h1>

<a href="{{ route('create') }}">add new product</a>

@foreach ($products as $product)
    <h1>{{ $product->name }}</h1>
    <h2>price:{{ $product->price }}</h2>
    <h3>description:{{ $product->description }}</h3>
@endforeach
