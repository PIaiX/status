<div class="cart-item">
    <a href="{{route('product', [$product->category->alias, $product->alias])}}">
        <img src="{{Storage::url($product->img)}}" alt="">
    </a>
    <div class="info">
        <div class="black mb-4">{{$product->title}}</div>
        <!-- <div class="lightest-gray fw_6 mb-2">300 ml</div> -->
        <div class="lightest-gray fw_6">450 г</div>
    </div>
    <div class="price text-end">
        <div class="lightest-gray tx-cross fw_3 f_13">{{$product->price}} ₽</div>
        <div class="black f_15 fw_5">{{$product->getPriceForCount()}} ₽</div>
    </div>
    <div class="btns">
        <div class="add-to-cart me-4">
            <div class="count-enter visbl">
                <form></form>
                <form action="{{route('basket-remove', $product)}}" method="POST">
                    @csrf
                    <button type="submit">-</button>
                </form>

                <div class="fw_5 f_08">
                    <span class="">{{$product->pivot->count}}</span><span> шт</span>
                </div>

                <form action="{{route('basket-add', $product)}}" method="POST">
                    @csrf
                    <button type="submit">+</button>
                </form>

            </div>
        </div>
        <button type="button" class="btn-fav2 me-3" onclick="toggleState(this)" data-state="off">
            <svg viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M29.6134 7.43252L29.6137 7.43285C30.266 8.08484 30.7834 8.85895 31.1365 9.71098C31.4895 10.563 31.6712 11.4762 31.6712 12.3985C31.6712 13.3208 31.4895 14.234 31.1365 15.086C30.7834 15.938 30.266 16.7122 29.6137 17.3641L29.6135 17.3643L28.0677 18.9101L17.429 29.5489L6.79024 18.9101L5.24441 17.3643C3.92739 16.0473 3.1875 14.261 3.1875 12.3985C3.1875 10.536 3.92739 8.7497 5.24441 7.43269C6.56142 6.11567 8.34768 5.37578 10.2102 5.37578C12.0728 5.37578 13.859 6.11567 15.176 7.43269L16.7219 8.97852L17.429 9.68563L18.1361 8.97852L19.6819 7.43269L19.6821 7.43252C20.3341 6.78023 21.1082 6.26278 21.9602 5.90974C22.8122 5.55671 23.7254 5.375 24.6477 5.375C25.57 5.375 26.4832 5.55671 27.3352 5.90974C28.1873 6.26278 28.9614 6.78023 29.6134 7.43252Z" />
            </svg>
        </button>
        <form action="{{route('basket-trash', $product)}}" method="POST">
            @csrf
            <button type="submit" class="btn-del">
                <svg viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.75008 27.7083C8.75008 29.3125 10.0626 30.625 11.6667 30.625H23.3334C24.9376 30.625 26.2501 29.3125 26.2501 27.7083V10.2083H8.75008V27.7083ZM11.6667 13.125H23.3334V27.7083H11.6667V13.125ZM22.6042 5.83333L21.1459 4.375H13.8542L12.3959 5.83333H7.29175V8.75H27.7084V5.83333H22.6042Z" />
                </svg>
            </button>
        </form>
        
    </div>
</div>
