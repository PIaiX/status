@extends('auth.layouts.main')

@section('title', 'Продукты')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            {{$contact->name}}
                        </h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Номер телефона</dt>
                            <dd class="col-sm-9"><p>{{$contact->phone}}</p></dd>
                            <dt class="col-sm-3">Вопросы и предложения</dt>
                            <dd class="col-sm-9"><p>{{$contact->email}}</p></dd>
                            <dt class="col-sm-3">Адрес</dt>
                            <dd class="col-sm-9"><p>{{$contact->address}}</p></dd>
                            <dt class="col-sm-3">Время работы</dt>
                            <dd class="col-sm-9"><p>{{$contact->work_time}}</p></dd>
                        </dl>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
