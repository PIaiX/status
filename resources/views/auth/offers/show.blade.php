@extends('auth.layouts.main')

@section('title', 'Продукты')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            {{$offer->title}}
                        </h2>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Заголовок</dt>
                            <dd class="col-sm-9"><h3>{{$offer->title}}</h3></dd>
                            <dt class="col-sm-3">Подзаголовок</dt>
                            <dd class="col-sm-9">{{$offer->subtitle}}</dd>
                            <dt class="col-sm-3">Алиас</dt>
                            <dd class="col-sm-9">{{$offer->alias}}</dd>
                            <dt class="col-sm-3">Эмблема</dt>
                            <dd class="col-sm-9">{{$offer->circle}}</dd>

                            <dt class="col-sm-3">Изображение</dt>
                            <dd class="col-sm-9">
                                @if($offer->img != '')
                                    <img src="{{Storage::url($offer->img)}}" style="max-height: 200px" alt="">
                                @else
                                    Нет картинки
                                @endif
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
