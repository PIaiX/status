@extends('layouts.main')

@section('content')
    <main class="inner-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                    <li class="breadcrumb-item"><a href="shopping-cart.html">Корзина</a></li>
                </ol>
            </nav>
        </div>
        <section id="sec-15" class="mb_4">
            <div class="container position-relative">
                <h1 class="inner mb-5">Корзина</h1>
                <form action="">
                    @isset($order)
                        <div class="row gx-5">
                            <div class="col-8">
                                @foreach ($order->products as $product)
                                    @include('includes.basket-product', $product)
                                @endforeach
                            </div>
                            <div class="col-4 position-relative">
                                <div class="cart-result">
                                    <h4>Ваш заказ</h4>
                                    <div class="d-flex">
                                        <div class="radio-div">
                                            <input type="radio" value="delivery" id="delivery">
                                            <label for="delivery">
                                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M41.6667 16.6666H35.4167V8.33331H6.25004C3.95837 8.33331 2.08337 10.2083 2.08337 12.5V35.4166H6.25004C6.25004 38.875 9.04171 41.6666 12.5 41.6666C15.9584 41.6666 18.75 38.875 18.75 35.4166H31.25C31.25 38.875 34.0417 41.6666 37.5 41.6666C40.9584 41.6666 43.75 38.875 43.75 35.4166H47.9167V25L41.6667 16.6666ZM40.625 19.7916L44.7084 25H35.4167V19.7916H40.625ZM12.5 37.5C11.3542 37.5 10.4167 36.5625 10.4167 35.4166C10.4167 34.2708 11.3542 33.3333 12.5 33.3333C13.6459 33.3333 14.5834 34.2708 14.5834 35.4166C14.5834 36.5625 13.6459 37.5 12.5 37.5ZM17.125 31.25C15.9792 29.9791 14.3542 29.1666 12.5 29.1666C10.6459 29.1666 9.02087 29.9791 7.87504 31.25H6.25004V12.5H31.25V31.25H17.125ZM37.5 37.5C36.3542 37.5 35.4167 36.5625 35.4167 35.4166C35.4167 34.2708 36.3542 33.3333 37.5 33.3333C38.6459 33.3333 39.5834 34.2708 39.5834 35.4166C39.5834 36.5625 38.6459 37.5 37.5 37.5Z"
                                                        fill="#FF7BBA" />
                                                </svg>
                                                <div>Доставка</div>
                                            </label>
                                        </div>
                                        <div style="min-width: 12rem;">
                                            <div>Общая стоимость:</div>
                                            <hr>
                                            <p>{{ $order->getFullPrice() }} ₽</p>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <a
                                            href="{{route('basket-order')}}"
                                            class="btn_main btn_2 px-3 px-sm-4 py-2"
                                        >
                                            <span class="f_08" data-product="">Оформить заказ</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                    <p class="text-center">Корзина пуста</p>
                    @endisset
                </form>
            </div>
        </section>
        <section>
            <div class="container">
                <h4 class="text-start">Рекомендации к заказу</h4>
                <div class="position-relative">
                    <div class="swiper-9">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product">
                                    <a href="product.html"><img src="img/product/1.jpg" alt=""
                                            class="photo mb-2 mb-sm-4"></a>
                                    <div class="text mb-2 mb-sm-4">Matrix Кондиционер для окрашенных волос,
                                        с антиоксидантами, для глазурирования цвета, Total Results Keep Me
                                        Vivid, 300 мл</div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="add-to-cart">
                                            <div class="count-enter">
                                                <button type="button" onclick="remove(this)">-</button>
                                                <div class="fw_5 f_08">
                                                    <span class="">1</span><span> шт</span>
                                                </div>
                                                <button type="button">+</button>
                                            </div>
                                            <button type="button" class="btn_main px-3 px-sm-4 py-2"
                                                onclick="addToCart(this)"><span class="f_08">В
                                                    корзину</span></button>
                                        </div>
                                        <div class="f_13 fw_5 black">632 ₽</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <a href="product.html"><img src="img/product/2.jpg" alt=""
                                            class="photo mb-2 mb-sm-4"></a>
                                    <div class="text mb-2 mb-sm-4">Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit. Vitae dolorem perspiciatis explicabo cumque
                                        quidem placeat laborum deserunt, provident laboriosam saepe?</div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="add-to-cart">
                                            <div class="count-enter">
                                                <button type="button" onclick="remove(this)">-</button>
                                                <div class="fw_5 f_08">
                                                    <span class="">1</span><span> шт</span>
                                                </div>
                                                <button type="button">+</button>
                                            </div>
                                            <button type="button" class="btn_main px-3 px-sm-4 py-2"
                                                onclick="addToCart(this)"><span class="f_08">В
                                                    корзину</span></button>
                                        </div>
                                        <div class="f_13 fw_5 black">632 ₽</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <a href="product.html"><img src="img/product/3.jpg" alt=""
                                            class="photo mb-2 mb-sm-4"></a>
                                    <div class="text mb-2 mb-sm-4">Lorem ipsum, dolor sit amet consectetur
                                        adipisicing elit. Beatae eum, repellat cum aperiam quibusdam
                                        harum! </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="add-to-cart">
                                            <div class="count-enter">
                                                <button type="button" onclick="remove(this)">-</button>
                                                <div class="fw_5 f_08">
                                                    <span class="">1</span><span> шт</span>
                                                </div>
                                                <button type="button">+</button>
                                            </div>
                                            <button type="button" class="btn_main px-3 px-sm-4 py-2"
                                                onclick="addToCart(this)"><span class="f_08">В
                                                    корзину</span></button>
                                        </div>
                                        <div class="f_13 fw_5 black">632 ₽</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product">
                                    <a href="product.html"><img src="img/product/4.jpg" alt=""
                                            class="photo mb-2 mb-sm-4"></a>
                                    <div class="text mb-2 mb-sm-4">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Aperiam commodi earum, impedit blanditiis
                                        voluptas doloremque esse omnis. </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="add-to-cart">
                                            <div class="count-enter">
                                                <button type="button" onclick="remove(this)">-</button>
                                                <div class="fw_5 f_08">
                                                    <span class="">1</span><span> шт</span>
                                                </div>
                                                <button type="button">+</button>
                                            </div>
                                            <button type="button" class="btn_main px-3 px-sm-4 py-2"
                                                onclick="addToCart(this)"><span class="f_08">В
                                                    корзину</span></button>
                                        </div>
                                        <div class="f_13 fw_5 black">632 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev">
                            <svg viewBox="0 0 24 62" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.1192 58.3865L2 30.6932L21.1192 3" />
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg viewBox="0 0 25 62" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.23486 58.3865L22.354 30.6932L3.23486 3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
