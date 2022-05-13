@extends('auth.layouts.main')

@isset($serviceProduct)
    @section('title', 'Редактировать Услугу ' . $serviceProduct->title)
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
                        @isset($serviceProduct)
                            Редактировать подуслугу <span>"{{ $serviceProduct->title }}"</span>
                        @else
                            Создать подуслугу
                        @endisset
                    </h3>
                </div>
                <form
                    @isset($serviceProduct) action="{{ route('service-products.update', $serviceProduct) }}"
                    @else action="{{ route('service-products.store') }}" @endisset
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @isset($serviceProduct)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Введите название"
                                value="@isset($serviceProduct) {{ $serviceProduct->title }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="alias">Алиас</label>
                            <input type="text" class="form-control" id="alias" name="alias"
                                placeholder="Введите алиас"
                                value="@isset($serviceProduct) {{ $serviceProduct->alias }} @endisset" />
                        </div>

                        <div class="form-group">
                            <div class="form-group" data-select2-id="29">
                                <label>Категория услуг</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    name="service_id">
                                    <option selected="selected" data-select2-id="0" value="0">Без категории</option>
                                    @foreach ($services as $cat)
                                        @isset($serviceProduct)
                                            <option data-select2-id="{{ $serviceProduct->service_id }}" value="{{ $serviceProduct->service_id }}"
                                                @if ($cat->id == $serviceProduct->service_id) selected @endif>
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

                        <div class="form-group">
                            <label>Описание подуслуги</label>
                            <textarea class="form-control" rows="3" name="desc" placeholder="Описание подуслуги">
                                @isset($serviceProduct)
                                {{$serviceProduct->desc}}
                                @endisset
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="price_from">Цена от:</label>
                            <input type="text" class="form-control" id="price_from" name="price_from"
                                placeholder="Введите начальную цену"
                                value="@isset($serviceProduct){{$serviceProduct->price_from}}@endisset" />
                        </div>

                        <div class="form-group">
                            <label for="price_to">Цена до:</label>
                            <input type="text" class="form-control" id="price_to" name="price_to"
                                placeholder="Введите конечную цену"
                                value="@isset($serviceProduct){{$serviceProduct->price_to}}@endisset" />
                        </div>

                        <div class="form-group">
                            <label for="service_title">Характеристики</label>
                            <input type="text" class="form-control" id="service_title" name="service_title"
                                placeholder="пример: любая длина волос"
                                value="@isset($serviceProduct) {{ $serviceProduct->service_title }} @endisset" />
                        </div>

                        <div class="form-group">
                            <label for="images">Изображение</label>
                            <div class="input-group mb-3">
                                @isset($serviceProduct)
                                    @foreach ($serviceProduct->getMultipleImages($serviceProduct->images) as $image)
                                        <img src="{{Storage::url($image)}}" style="max-height: 200px" alt="">
                                    @endforeach
                                @endisset
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="images[]" class="custom-file-input" id="images" multiple
                                        value="@isset($serviceProduct) {{ $serviceProduct->img }}@endisset">
                                    <label class="custom-file-label" for="images">
                                        @isset($serviceProduct)
                                            {{ $serviceProduct->images }}
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
                            @isset($serviceProduct)
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
