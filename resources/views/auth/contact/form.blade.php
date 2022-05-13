@extends('auth.layouts.main')

@isset($team)
    @section('title', 'Редактировать контакты')
@else
@section('title', 'Создать контакты')
@endisset

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">
                        @isset($contact)
                            Редактировать контакты
                        @else
                            Создать контакты
                        @endisset
                    </h3>
                </div>
                <form
                    @isset($contact) action="{{ route('contact.update', $contact) }}"
                    @else action="{{ route('contact.store') }}" @endisset
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @isset($contact)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="phone">Номер телефона</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Введите номер телефона"
                                value="@isset($contact) {{ $contact->phone }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="email">Вопросы и предложения (email)</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Введите email"
                                value="@isset($contact) {{ $contact->email }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="address">Адрес</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Введите адрес"
                                value="@isset($contact) {{ $contact->address }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="work_time">Время работы</label>
                            <input type="text" class="form-control" id="work_time" name="work_time"
                                placeholder="Введите время работы"
                                value="@isset($contact) {{ $contact->work_time }} @endisset" />
                        </div>

                        <div class="form-group">
                            <label for="map">Код карты</label>
                            <textarea type="text" rows="6" class="form-control" id="map" name="map"
                                placeholder="Вставьте сюда скрипт вашей карты">
                                @isset($contact) {{ $contact->map }} @endisset
                            </textarea>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square" style="margin-right: 5px"></i>
                            @isset($contact)
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
