@foreach ($products as $product)
    <div>
        @include('includes.product', $product)
    </div>
@endforeach
