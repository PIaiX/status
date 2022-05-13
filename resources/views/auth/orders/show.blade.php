@extends('auth.layouts.main')

@section('title', 'Заказы')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="card-title">
                            ID заказа: {{$order->id}}
                        </h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <dl class="row">
                            <dd class="col-sm-9">Имя заказчика</dd>
                            <dt class="col-sm-3">{{$order->name}}</dt>
                            <dd class="col-sm-9">Email заказчика</dd>
                            <dt class="col-sm-3">{{$order->email}}</dt>
                            <dd class="col-sm-9">Телефон заказчика</dd>
                            <dt class="col-sm-3">{{$order->phone}}</dt>
                            <dd class="col-sm-9">Сумма заказа</dd>
                            <dt class="col-sm-3">{{$order->getFullPrice()}} рублей.</dt>
                        </dl>
                        <div class="row">
                                <div class="table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Изображение</th>
                                                <th>Название</th>
                                                <th>Количество</th>
                                                <th>Цена</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->products as $product)
                                                <tr>
                                                    <td><a href=""><img src="{{Storage::url($product->img)}}" class="table-image" alt=""></a></td>
                                                    <td style="white-space: normal;">{{$product->title}}</td>
                                                    <td>{{ $product->pivot->count }}</td>
                                                    <td>{{ $product->price }} рублей</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
