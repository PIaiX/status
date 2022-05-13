@extends('auth.layouts.main')

@section('title', 'О нас')

@section('content')
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-12 d-flex justify-center">
                <h1>О нас</h1>
                <div class="ml-auto mt-3">
                    <a href="{{route('about.create')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="margin-right: 5px"></i> Создать</a>
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
                                    <th>Фото</th>
                                    <th>Заголовок</th>
                                    <th>Подзаголовок</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($abouts as $about)
                                    <tr>
                                        <td>{{$about->id}}</td>
                                        <td><a href=""><img src="{{Storage::url($about->img)}}" class="table-image" alt=""></a></td>
                                        <td style="white-space: normal;">{{$about->title}}</td>
                                        <td style="white-space: normal;">{{substr($about->desc, 0, 200)}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('about.show', $about)}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-arrow-up-right-from-square" style="margin-right: 5px"></i> Открыть</a>
                                            <a href="{{route('about.edit', $about)}}" class="btn btn-sm btn-outline-secondary ml-1"><i class="fa-solid fa-gears" style="margin-right: 5px"></i> Редактировать</a>
                                            <form action="{{route('about.destroy', $about)}}" class="ml-1" method="POST">
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
