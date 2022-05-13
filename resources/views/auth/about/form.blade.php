@extends('auth.layouts.main')

@isset($about)
    @section('title', 'Редактировать Услугу ' . $about->title)
@else
@section('title', 'Создать услугу')
@endisset

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        @isset($about)
                            Редактировать профиль <span>"{{ $about->title }}"</span>
                        @else
                            Создать профиль
                        @endisset
                    </h3>
                </div>
                <form
                    @isset($about) action="{{ route('about.update', $about) }}"
                    @else action="{{ route('about.store') }}" @endisset
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @isset($about)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Заголовок</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Введите имя"
                                value="@isset($about) {{ $about->title }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="alias">Алиас</label>
                            <input type="text" class="form-control" id="alias" name="alias"
                                placeholder="Введите алиас"
                                value="@isset($about) {{ $about->alias }} @endisset" />
                        </div>

                        <div class="form-group">
                            <label>Описание</label>
                            <textarea class="form-control" rows="3" name="desc" placeholder="Текст полного описания">
                                @isset($about)
                                    {{ trim($about->desc) }}
                                @endisset
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="images">Изображение</label>
                            <div class="input-group mb-3">
                                @isset($about)
                                    @foreach ($about->getMultipleImages($about->images) as $image)
                                        <img src="{{Storage::url($image)}}" style="max-height: 200px" alt="">
                                    @endforeach
                                @endisset
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="images[]" class="custom-file-input" id="images"
                                        value="@isset($about) {{ $about->images }}@endisset" multiple>
                                    <label class="custom-file-label" for="images">
                                        @isset($about)
                                            {{ $about->images }}
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
                            @isset($about)
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
