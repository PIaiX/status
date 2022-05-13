@extends('auth.layouts.main')

@isset($category)
    @section('title', 'Редактировать категорию ' . $category->title)
@else
@section('title', 'Создать категорию')
@endisset

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        @isset($category)
                            Редактировать категорию <span >"{{ $category->title }}"</span>
                        @else
                            Создать категорию
                        @endisset
                    </h3>
                </div>
                <form
                    @isset($category)
                        action="{{ route('categories.update', $category) }}"
                    @else
                        action="{{ route('categories.store') }}"
                    @endisset
                    method="POST"
                >
                    @isset($category)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input
                                type="text"
                                class="form-control"
                                id="title"
                                name="title"
                                placeholder="Введите название"
                                value="@isset($category) {{ $category->title }} @endisset"
                            />
                        </div>
                        <div class="form-group">
                            <label for="alias">Алиас</label>
                            <input
                                type="text"
                                class="form-control"
                                id="alias"
                                name="alias"
                                placeholder="Введите алиас"
                                value="@isset($category) {{ $category->alias }} @endisset"
                            />
                            <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a email address</span>
                        </div>
                        <div class="form-group">
                            <div class="form-group" data-select2-id="29">
                                <label>Подкатегория</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    name="parent_id">
                                    <option selected="selected" data-select2-id="0" value="0">Без родительской категории
                                    </option>
                                    @foreach ($categories as $cat)
                                        @isset($category)
                                            <option data-select2-id="{{ $cat->id }}" value="{{ $cat->id }}"
                                                @if ($cat->id == $category->parent_id) selected @endif>
                                                {{ $cat->title }}
                                            </option>
                                        @else
                                            <option data-select2-id="{{ $cat->id }}" value="{{ $cat->id }}">
                                                {{ $cat->title }}
                                            </option>
                                        @endisset
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"
                                style="margin-right: 5px"></i> Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
