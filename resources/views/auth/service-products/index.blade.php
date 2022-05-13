@extends('auth.layouts.main')

@section('title', 'ПодУслуги')

@section('content')
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-12 d-flex justify-center">
                <h1>ПодУслуги</h1>
                <div class="ml-auto mt-3">
                    <a href="{{route('service-products.create')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="margin-right: 5px"></i> Добавить подуслугу</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Изображение</th>
                                    <th>Название</th>
                                    <th>alias</th>
                                    <th>Родительская услуга</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($serviceProducts as $product)
                                    <tr style="height: 100px;">
                                        <td style="vertical-align: middle;">{{$product->id}}</td>
                                        <td style="vertical-align: middle;"><a href=""><img src="{{Storage::url(explode('|', $product->images)[0])}}" class="table-image" alt=""></a></td>
                                        <td style="vertical-align: middle; white-space: normal;">{{$product->title}}</td>
                                        <td style="vertical-align: middle;">{{$product->alias}}</td>
                                        <td style="vertical-align: middle;">
                                            @isset($product->service)
                                                <span class="alert alert-default-success" style="padding: 5px 15px; border: none; font-size: 13px;">
                                                    {{ $product->service->title }} <i class="fa-solid fa-diagram-project" style="font-size: 10px;"></i>
                                                </span><br>
                                            @endisset
                                        </td>
                                        <td class="d-flex align-content-center" style="vertical-align: middle;">
                                            <a href="{{route('service-products.show', $product)}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-arrow-up-right-from-square" style="margin-right: 5px"></i> Открыть</a>
                                            <a href="{{route('service-products.edit', $product)}}" class="btn btn-sm btn-outline-secondary ml-1"><i class="fa-solid fa-gears" style="margin-right: 5px"></i> Редактировать</a>
                                            <form action="{{route('service-products.destroy', $product)}}" class="ml-1" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash" style="margin-right: 5px"></i> Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div style="display: flex; justify-content: center">
                    {{ $serviceProducts->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </div>
@endsection
