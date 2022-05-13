@extends('auth.layouts.main')

@section('title', 'Продукты')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            {{$team->name}}
                        </h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Имя сотрудника</dt>
                            <dd class="col-sm-9"><h3>{{$team->name}}</h3></dd>
                            <dt class="col-sm-3">Профессия</dt>
                            <dd class="col-sm-9"><p>{{$team->profession}}</p></dd>
                            <dt class="col-sm-3">Опыт работы</dt>
                            <dd class="col-sm-9"><p>{{$team->experience}}</p></dd>
                            <dt class="col-sm-3">Квалификация</dt>
                            <dd class="col-sm-9"><p>{{$team->qualification}}</p></dd>
                            <dt class="col-sm-3">Краткое описание</dt>
                            <dd class="col-sm-9">{{$team->short_desc}}</dd>
                            <dt class="col-sm-3">Полное описание</dt>
                            <dd class="col-sm-9">{{$team->full_desc}}</dd>

                            <dt class="col-sm-3">Изображение</dt>
                            <dd class="col-sm-9">
                                @if($team->img != '')
                                    <img src="{{Storage::url($team->img)}}" style="max-height: 200px" alt="">
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
