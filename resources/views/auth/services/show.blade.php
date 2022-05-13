@extends('auth.layouts.main')

@section('title', 'Продукты')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            {{$service->title}}
                        </h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Наименование</dt>
                            <dd class="col-sm-9"><h3>{{$service->title}}</h3></dd>
                            <dt class="col-sm-3">Алиас</dt>
                            <dd class="col-sm-9">{{$service->alias}}</dd>

                            <dt class="col-sm-3">Изображение</dt>
                            <dd class="col-sm-9">
                                @if($service->img != '')
                                    <img class="form-table-image" src="{{Storage::url($service->img)}}" alt="">
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
