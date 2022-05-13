@extends('auth.layouts.main')

@section('title', 'Продукты')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            {{$serviceProduct->title}}
                        </h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Наименование</dt>
                            <dd class="col-sm-9"><h3>{{$serviceProduct->title}}</h3></dd>
                            <dt class="col-sm-3">Алиас</dt>
                            <dd class="col-sm-9">{{$serviceProduct->alias}}</dd>
                            <dt class="col-sm-3">Описание</dt>
                            <dd class="col-sm-9">{{$serviceProduct->desc}}</dd>
                            <dt class="col-sm-3">Услуга</dt>
                            <dd class="col-sm-9">{{$serviceProduct->service_title}}</dd>
                            <dt class="col-sm-3">Цена</dt>
                            <dd class="col-sm-9">{{$serviceProduct->price}}</dd>
                            <dt class="col-sm-3">Изображение</dt>
                            <dd class="col-sm-9">
                                @isset($serviceProduct->images)
                                    @foreach ($serviceProduct->getMultipleImages($serviceProduct->images) as $image)
                                        <img src="{{Storage::url($image)}}" style="max-height: 200px" alt="">
                                    @endforeach
                                @else
                                    Нет картинки
                                @endisset
                            </dd>
                        </dl>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
