@extends('auth.layouts.main')

@section('title', 'Продукты')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            {{$product->title}}
                        </h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Наименование</dt>
                            <dd class="col-sm-9"><h3>{{$product->title}}</h3></dd>
                            <dt class="col-sm-3">Краткое описание</dt>
                            <dd class="col-sm-9">{{$product->short_desc}}</dd>
                            <dt class="col-sm-3">Полное описание</dt>
                            <dd class="col-sm-9">{{$product->full_desc}}</dd>
                            <dt class="col-sm-3">Категория</dt>
                            <dd class="col-sm-9">
                                @isset($product->category->title)
                                    <span class="alert alert-default-primary" style="padding: 5px 15px; border: none;">
                                        {{ $product->category->title }} <i class="fa-solid fa-diagram-project" style="font-size: 10px;"></i>
                                    </span>
                                @else
                                    Категория не указана
                                @endisset
                            </dd>
                            <dt class="col-sm-3">Бренд</dt>
                            <dd class="col-sm-9">
                                @isset($product->brand_id->title)
                                    <span class="alert alert-default-success" style="padding: 5px 15px; border: none;">
                                        {{ $product->brand->title }} <i class="fa-solid fa-diagram-project" style="font-size: 10px;"></i>
                                    </span>
                                @else
                                    Бренд не указан
                                @endisset
                            </dd>
                            <dt class="col-sm-3">Тип волос</dt>
                            <dd class="col-sm-9">
                                @isset($product->hairType->title)
                                    <span class="alert alert-default-success" style="padding: 5px 15px; border: none;">
                                        {{ $product->hairType->title }} <i class="fa-solid fa-diagram-project" style="font-size: 10px;"></i>
                                    </span>
                                @else
                                    Тип не указан
                                @endisset</dd>
                            <dt class="col-sm-3">Изображение</dt>
                            <dd class="col-sm-9">
                                @if($product->img != '')
                                    <img src="{{Storage::url($product->img)}}" style="max-height: 200px" alt="">
                                @else
                                    Нет картинки
                                @endif
                            </dd>
                        </dl>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
