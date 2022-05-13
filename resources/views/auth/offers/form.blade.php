@extends('auth.layouts.main')

@isset($offer)
    @section('title', 'Редактировать Акцию ' . $offer->alias)
@else
@section('title', 'Создать акцию')
@endisset

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        @isset($offer)
                            Редактировать акцию <span>"{{ $offer->title }}"</span>
                        @else
                            Создать акцию
                        @endisset
                    </h3>
                </div>
                <form
                    @isset($offer) action="{{ route('offers.update', $offer) }}"
                    @else action="{{ route('offers.store') }}" @endisset
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @isset($offer)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Введите название"
                                value="@isset($offer) {{ $offer->title }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Подзаголовок</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                placeholder="Введите алиас"
                                value="@isset($offer) {{ $offer->subtitle }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="alias">Алиас</label>
                            <input type="text" class="form-control" id="alias" name="alias"
                                placeholder="Введите алиас"
                                value="@isset($offer) {{ $offer->alias }} @endisset" />
                        </div>

                        <div class="form-group">
                            <div class="form-group" id="0">
                                <label>Эмблема скидки</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" name="circle">
                                    @foreach (['type-1', 'type-2', 'type-3', 'none'] as $type)
                                        @isset($offer)
                                            <option id="{{ $type }}" value="{{ $type }}" @if($offer->circle == $type) selected @endif >
                                                {{ $type }}
                                            </option>
                                        @else
                                            <option id="{{ $type }}" value="{{ $type }}">
                                                {{ $type }}
                                            </option>
                                        @endisset
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="img">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img"
                                        value="@isset($offer) {{ $offer->img }}@endisset">
                                    <label class="custom-file-label" for="img">
                                        @isset($offer)
                                            {{ $offer->img }}
                                        @endisset
                                    </label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square" style="margin-right: 5px"></i>
                            @isset($offer)
                                Обновить
                            @else
                                Создать
                            @endisset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
