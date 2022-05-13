@extends('auth.layouts.main')

@section('title', 'Категории')

@section('content')
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-12 d-flex justify-center">
                <h1>Категории</h1>
                <div class="ml-auto mt-3">
                    <a href="{{route('categories.create')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square" style="margin-right: 5px"></i> Добавить категорию</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>alias</th>
                                    <th>Родительская категория</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>{{$category->alias}}</td>
                                        <td>
                                            @if($category->parent)
                                                <span class="alert alert-default-primary" style="padding: 5px 15px; border: none; font-size: 13px;">
                                                    {{ $category->parent->title }} <i class="fa-solid fa-diagram-project" style="font-size: 10px;"></i>
                                                </span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{route('categories.edit', $category)}}" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-gears" style="margin-right: 5px"></i> Редактировать</a>
                                            <form action="{{route('categories.destroy', $category)}}" class="ml-1" method="POST">
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
                    {{ $categories->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
