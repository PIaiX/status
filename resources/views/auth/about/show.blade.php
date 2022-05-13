@extends('auth.layouts.main')

@section('title', 'Продукты')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            {{$about->name}}
                        </h2>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Заголовок</dt>
                            <dd class="col-sm-9"><h3>{{$about->name}}</h3></dd>
                            <dt class="col-sm-3">Описание</dt>
                            <dd class="col-sm-9"><p>{{$about->desc}}</p></dd>
                            <dt class="col-sm-3">Алиас</dt>
                            <dd class="col-sm-9"><p>{{$about->alias}}</p></dd>

                            <dt class="col-sm-3">Изображение</dt>
                            <dd class="col-sm-9">
                                @isset($about->images)
                                    @foreach ($about->getMultipleImages($about->images) as $image)
                                        <img src="{{Storage::url($image)}}" style="max-height: 200px" alt="">
                                    @endforeach
                                @else
                                    Нет картинки
                                @endisset
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
