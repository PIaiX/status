@extends('auth.layouts.main')

@section('title', 'Заказы')

@section('content')
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-sm-6">
                <h1>Заказы</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Имя</th>
                                    <th>Телефон</th>
                                    <th>Email</th>
                                    <th>Дата оформления</th>
                                    <th>Сумма</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->phone}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td><span class="tag tag-success">{{$order->getFullPrice()}} рублей.</span></td>
                                        <td class="d-flex">
                                            <a href="{{route('orders.show', $order)}}" class="btn btn-sm btn-outline-secondary">
                                                <i class="fa-solid fa-arrow-up-right-from-square" style="margin-right: 5px"></i> Открыть
                                            </a>
                                            <form action="{{route('orders-delete', $order)}}" method="POST" style="margin-left: 5px;">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="fa-solid fa-trash" style="margin-right: 5px"></i> Удалить
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

                <div style="display: flex; justify-content: center">
                    {{ $orders->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
