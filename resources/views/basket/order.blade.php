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
                <h1 class="inner mb-5">Оформление заказа</h1>
                <div class="container">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <form action="{{route('basket-confirm')}}" method="POST">
                                @csrf
                                    <div class="box">
                                        <input type="text" name="name" placeholder="Имя" class="w-100 mb-3" required>
                                        <input id="phone" name="phone" placeholder="Номер телефона" class="w-100 mb-3" required>
                                        <input type="email" name="email" placeholder="Email" class="w-100 mb-3" required>
                                        <button id="online_appointment" type="submit"
                                            class="btn_main btn_1 mx-auto">Отправить</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
