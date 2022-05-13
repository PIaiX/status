@extends('auth.layouts.main')

@section('title', 'Акции')

@section('content')
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-12 d-flex justify-center">
                <h1>Акции</h1>
                <div class="ml-auto mt-3">
                    <a href="{{route('offers.create')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="margin-right: 5px"></i> Добавить акцию</a>
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
                                    <th>Заголовок</th>
                                    <th>Подзаголовок</th>
                                    <th>alias</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offers as $offer)
                                    <tr>
                                        <td>{{$offer->id}}</td>
                                        <td><a href=""><img src="{{Storage::url($offer->img)}}" class="table-image" alt=""></a></td>
                                        <td style="white-space: normal;">{{$offer->title}}</td>
                                        <td style="white-space: normal;">{{$offer->subtitle}}</td>
                                        <td>{{$offer->alias}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('offers.show', $offer)}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-arrow-up-right-from-square" style="margin-right: 5px"></i> Открыть</a>
                                            <a href="{{route('offers.edit', $offer)}}" class="btn btn-sm btn-outline-secondary ml-1"><i class="fa-solid fa-gears" style="margin-right: 5px"></i> Редактировать</a>
                                            <form action="{{route('offers.destroy', $offer)}}" class="ml-1" method="POST">
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
            </div>
        </div>
    </div>
@endsection
