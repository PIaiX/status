@extends('auth.layouts.main')ad admin

@isset($service)
    @section('title', 'Редактировать Услугу ' . $service->title)
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
                        @isset($service)
                            Редактировать услугу <span>"{{ $service->title }}"</span>
                        @else
                            Создать услугу
                        @endisset
                    </h3>
                </div>
                <form
                    @isset($service) action="{{ route('services.update', $service) }}"
                    @else action="{{ route('services.store') }}" @endisset
                    method="POST" enctype="multipart/form-data"
                    >
                    @isset($service)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Введите название"
                                value="@isset($service) {{ $service->title }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="alias">Алиас</label>
                            <input type="text" class="form-control" id="alias" name="alias"
                                placeholder="Введите алиас"
                                value="@isset($service) {{ $service->alias }} @endisset" />
                        </div>

                        {{-- <div class="form-group">
                            <label>Краткое описание товара</label>
                            <textarea class="form-control" rows="3" name="short_desc" placeholder="Текст краткого описания">
                                @isset($product)
                                    {{ $product->short_desc }}
                                @endisset
                            </textarea>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label>Полное описание товара</label>
                            <textarea class="form-control" rows="6" name="full_desc" placeholder="Текст полного описания">
                                @isset($service)
                                    {{ $service->full_desc }}
                                @endisset
                            </textarea>
                        </div> --}}

                        <div class="form-group">
                            <label for="img">Изображение</label>
                            <div class="input-group mb-3">
                                <img class="form-table-image" src="@isset($service) {{ Storage::url($service->img) }} @endisset"
                                    alt="">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img"
                                        value="@isset($service) {{ $service->img }} @endisset">
                                    <label class="custom-file-label" for="img">
                                        @isset($service)
                                            {{ $service->img }}
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
                            @isset($service)
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
