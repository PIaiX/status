@extends('auth.layouts.main')

@section('title', 'Услуги')

@section('content')
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-12 d-flex justify-center">
                <h1>Услуги</h1>
                <div class="ml-auto mt-3">
                    <a href="{{route('services.create')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="margin-right: 5px"></i> Добавить услугу</a>
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
                                    <th>Подуслуги</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$service->id}}</td>
                                        <td style="vertical-align: middle;"><a href=""><img src="{{Storage::url($service->img)}}" class="table-image" alt=""></a></td>
                                        <td style="vertical-align: middle; white-space: normal;"><a href="{{route('services.show', $service->alias)}}">{{$service->title}}</a></td>
                                        <td style="vertical-align: middle;">{{$service->alias}}</td>
                                        <td style="vertical-align: middle;">
                                            @isset($service->products)
                                                @foreach ($service->products as $product)
                                                    <span class="alert alert-default-success" style="padding: 5px 15px; border: none; font-size: 13px;">
                                                        {{ $product->title }} <i class="fa-solid fa-diagram-project" style="font-size: 10px;"></i>
                                                    </span><br>
                                                @endforeach
                                            @else
                                                Нет услуг
                                            @endisset
                                        </td>
                                        <td class="d-flex" style="vertical-align: middle;">
                                            <a href="{{route('services.show', $service)}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-arrow-up-right-from-square" style="margin-right: 5px"></i> Открыть</a>
                                            <a href="{{route('services.edit', $service)}}" class="btn btn-sm btn-outline-secondary ml-1"><i class="fa-solid fa-gears" style="margin-right: 5px"></i> Редактировать</a>
                                            <form action="{{route('services.destroy', $service)}}" class="ml-1" method="POST">
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
                    {{ $services->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </div>
@endsection
