<div class="product">
    <a href="{{route('product', [$product->category, $product->alias])}}"><img
            src="{{Storage::url($product->img)}}"
            alt="" class="photo mb-2 mb-sm-4"></a>
    <div class="text mb-2 mb-sm-4">{{$product->title}}, {{$product->volume}} мл</div>
    <div class="d-flex justify-content-between align-items-center">
        <div class="add-to-cart">
            <form action="{{route('basket-add', $product)}}" method="POST">
                @csrf
                <button type="submit" class="btn_main px-3 px-sm-4 py-2"><span class="f_08">В корзину</span></button>
            </form>
            {{-- <div class="count-enter">
                <button type="button" onclick="decrementProduct(this)">-</button>
                <div class="fw_5 f_08">
                    <span class="">1</span><span> шт</span>
                </div>
                <button type="button" onclick="incrementProduct()">+</button>
            </div>
            <button type="button" class="btn_main px-3 px-sm-4 py-2" onclick="addToCart(this)"><span class="f_08">В корзину</span></button> --}}
        </div>
        {{-- <button type="button" data-bs-toggle="modal"
            data-bs-target="#callback"
            class="btn_main btn_2 px-3 px-sm-4 py-2"><span
                class="f_08" data-product="{{$product->id}}">Заказать</span></button> --}}
        <div class="f_13 fw_5 black">{{$product->price}} ₽</div>
    </div>
    <!-- <img src="img/icons/mark-favorite.png" alt="Избранное" class="mark-fav"> -->
    <div class="right-marks">
        @if($product->is_new == 1)
            <img src="{{asset('img/icons/mark-new.png')}}" alt="Скидка" class="mark-sale">
        @endif
        {{-- <img src="img/icons/mark-sale.png" alt="Скидка" class="mark-sale"> --}}
    </div>
</div>
