@extends('auth.layouts.main')

@section('title', 'Контакты')

@section('content')
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-12 d-flex justify-center">
                <h1>Контакты</h1>
                <div class="ml-auto mt-3">
                    <a href="{{route('contact.create')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="margin-right: 5px"></i> Добавить персону</a>
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
                                    <th>Телефон</th>
                                    <th>Email</th>
                                    <th>Адрес</th>
                                    <th>Время работы</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($contacts)
                                @foreach ($contacts as $item) 
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td style="white-space: normal;">{{$item->phone}}</td>
                                        <td style="white-space: normal;">{{$item->email}}</td>
                                        <td style="white-space: normal;">{{$item->address}}</td>
                                        <td style="white-space: normal;">{{$item->work_time}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('contact.show', $item)}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-arrow-up-right-from-square" style="margin-right: 5px"></i> Открыть</a>
                                            <a href="{{route('contact.edit', $item)}}" class="btn btn-sm btn-outline-secondary ml-1"><i class="fa-solid fa-gears" style="margin-right: 5px"></i> Редактировать</a>
                                            <form action="{{route('contact.destroy', $item)}}" class="ml-1" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash" style="margin-right: 5px"></i> Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
