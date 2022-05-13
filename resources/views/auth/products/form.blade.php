@extends('auth.layouts.main')

@isset($product)
    @section('title', 'Редактировать Товар ' . $product->title)
@else
@section('title', 'Создать товар')
@endisset

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        @isset($product)
                            Редактировать товар <span>"{{ $product->title }}"</span>
                        @else
                            Создать товар
                        @endisset
                    </h3>
                </div>
                <form
                    @isset($product) action="{{ route('products.update', $product) }}"
                    @else action="{{ route('products.store') }}" @endisset
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @isset($product)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Введите название"
                                value="@isset($product) {{ $product->title }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="alias">Алиас</label>
                            <input type="text" class="form-control" id="alias" name="alias"
                                placeholder="Введите алиас"
                                value="@isset($product) {{ $product->alias }} @endisset" />
                        </div>

                        <div class="form-group">
                            <div class="form-group" data-select2-id="29">
                                <label>Категория</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    name="category_id">
                                    <option selected="selected" data-select2-id="0" value="0">Без категории</option>
                                    @foreach ($categories as $cat)
                                        @isset($product)
                                            <option data-select2-id="{{ $product->category_id }}" value="{{ $product->category_id }}"
                                                @if ($cat->id == $product->category_id) selected @endif>
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
                            <div class="form-group" data-select2-id="29">
                                <label>Тип волос</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    name="hair_type_id">
                                    <option selected="selected" data-select2-id="0" value="0">Без типа</option>
                                    @foreach ($hairTypes as $type)
                                        @isset($product)
                                            <option data-select2-id="{{ $product->brand_id }}" value="{{ $product->brand_id }}"
                                                @if ($type->id == $product->brand_id) selected @endif>
                                                {{ $type->title }}
                                            </option>
                                        @else
                                            <option data-select2-id="{{ $type->id }}" value="{{ $type->id }}">
                                                {{ $type->title }}
                                            </option>
                                        @endisset
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group" data-select2-id="29">
                                <label>Бренд</label>
                                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    name="brand_id">
                                    <option selected="selected" data-select2-id="0" value="0">Без бренда</option>
                                    @foreach ($brands as $brand)
                                        <option data-select2-id="{{ $brand->id }}" value="{{ $brand->id }}">
                                            {{ $brand->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="volume">Объем</label>
                            <input type="text" class="form-control" id="volume" name="volume"
                                placeholder="Введите объем"
                                value="@isset($product) {{ $product->volume }} @endisset" />
                        </div>

                        <div class="form-group">
                            <label for="price">Цена</label>
                            <input type="text" class="form-control" id="price" name="price"
                                placeholder="Введите Цену"
                                value="@isset($product) {{ $product->price }} @endisset" />
                        </div>

                        <div class="form-group">
                            <label>Краткое описание товара</label>
                            <textarea class="form-control" rows="3" name="short_desc" placeholder="Текст краткого описания">
                                @isset($product)
                                    {{ trim($product->short_desc) }}
                                @endisset
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Полное описание товара</label>
                            <textarea class="form-control" rows="6" name="full_desc" placeholder="Текст полного описания">
                                @isset($product)
                                    {{ trim($product->full_desc) }}
                                @endisset
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Характеристики товара</label>
                            <textarea class="form-control" rows="3" name="characteristics" placeholder="Характеристики">
                                @isset($product)
                                    {{ trim($product->characteristics) }}
                                @endisset
                            </textarea>
                        </div>

                        <div class="form-group row">
                            <label for="is_new" class="col-sm-2 col-form-label">Новинка</label>
                            <div class="col-sm-6">
                                <input type="checkbox" name="is_new" id="is_new"
                                    @if(isset($product) && $product->is_new === 1)
                                        checked = "'checked'"
                                    @endif
                                />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="img">Изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img"
                                        value="@isset($product) {{ $product->img }}@endisset">
                                    <label class="custom-file-label" for="img">
                                        @isset($product)
                                            {{ $product->img }}
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
                            @isset($product)
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
