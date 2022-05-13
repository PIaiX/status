@extends('layouts.main')

@section('title', $service->title)

@section('content')
    <main class="inner-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                    <li class="breadcrumb-item"><a href="{{route('services')}}">Услуги</a></li>
                    <li class="breadcrumb-item"><a href="">{{ $service->title }}</a></li>
                </ol>
            </nav>
        </div>

        <section id="sec-8">
            <div class="container">
                <h1 class="inner">{{ $service->title }}</h1>

                @foreach ($service->products as $product)
                    <h4>{{ $product->title }}</h4>
                    <p class="font-2 mb-4">{{ $product->desc }}</p>
                    <div class="f_12 font-2 fw_6 mb-3 mb-sm-4 mb-lg-5">Наши работы:</div>
                    <div class="position-relative mb-4">
                        @if(!empty($product->images))
                        <div class="swiper-5">
                            <div class="swiper-wrapper">
                                @foreach ($product->getMultipleImages($product->images) as $image)
                                    <div class="swiper-slide">
                                        <img src="{{Storage::url($image)}}" alt="" class="img-example">
                                    </div>
                                @endforeach
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
                        @endisset
                    </div>
                    <div class="font-2 mb-5"><span class="dark-gray f_12 fw_6">Цены:</span> <span
                            class="light-gray">*Конечная цена зависит от количества используемого материала, сложности
                            окрашивания и исходного цвета волос.</span></div>
                    <div class="table-responsive text-center mb-5">
                        <table class="table fw_3">
                            <tbody>
                                <tr class="fw_5">
                                    <td>Услуга</td>
                                    <td>Стоимость</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>{{$product->service_title}}</td>
                                    <td>{{$product->price_from}}-{{$product->price_to}}</td>
                                    <td>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#callback"
                                            class="btn_main btn_sm btn_2 mx-auto">
                                            <span class="f_08 light-gray">Записаться</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{route('team')}}" class="btn_main btn_sm btn_1 mx-auto">
                        <span class="f_09">Мастера</span>
                    </a>
                    <hr size="2" class="my-5">
                @endforeach

                <div class="font-2 fw_7 f_12 text-center mb-4">Мастера по стрижке</div>
                <div class="swiper-6 position-relative">
                    <div class="swiper-wrapper">
                        @foreach ($teams as $team)
                        <div class="swiper-slide">
                            <div class="master">
                                <img src="{{Storage::url($team->img)}}">
                                <div class="p-2 p-md-4">
                                    <div class="font-2 f_12 fw_6 mb-md-2"><a href="">{{$team->name}}</a></div>
                                    <div class="font-2 f_09 mb-2 mb-md-3">{{$team->profession}}</div>
                                    {{-- <div class="rating justify-content-center mb-2 mb-md-3">
                                        <svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                        </svg>
                                        <svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                        </svg>
                                        <svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                        </svg>
                                        <svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                        </svg>
                                        <svg class="grade" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                        </svg>
                                    </div> --}}
                                    <a href="{{route('team-show', $team)}}" class="btn_main btn_sm btn_2 mx-auto mb-2 mb-md-3">
                                        <span class="f_08 light-gray">о мастере</span>
                                    </a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#callback"
                                        class="btn_main btn_sm btn_1 mx-auto">
                                        <span class="f_08">Записаться</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </main>
@endsection
