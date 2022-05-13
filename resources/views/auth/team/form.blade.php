@extends('auth.layouts.main')

@isset($team)
    @section('title', 'Редактировать Услугу ' . $team->title)
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
                        @isset($team)
                            Редактировать профиль <span>"{{ $team->title }}"</span>
                        @else
                            Создать профиль
                        @endisset
                    </h3>
                </div>
                <form
                    @isset($team) action="{{ route('team.update', $team) }}"
                    @else action="{{ route('team.store') }}" @endisset
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @isset($team)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Введите имя"
                                value="@isset($team) {{ $team->name }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="alias">Алиас</label>
                            <input type="text" class="form-control" id="alias" name="alias"
                                placeholder="Введите алиас"
                                value="@isset($team) {{ $team->alias }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="profession">Профессия</label>
                            <input type="text" class="form-control" id="profession" name="profession"
                                placeholder="Введите профессию"
                                value="@isset($team) {{ $team->profession }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label for="experience">Опыт работы</label>
                            <input type="text" class="form-control" id="experience" name="experience"
                                placeholder="Введите опыт работы"
                                value="@isset($team) {{ $team->experience }} @endisset" />
                        </div>
                        <div class="form-group">
                            <label>Квалификация сотрудника</label>
                            <textarea class="form-control" rows="3" name="qualification" placeholder="Текст полного описания">
                                @isset($team)
                                    {{ trim($team->qualification) }}
                                @endisset
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Краткое описание сотрудника</label>
                            <textarea class="form-control" rows="3" name="short_desc" placeholder="Текст краткого описания">
                                @isset($team)
                                    {{ trim($team->short_desc) }}
                                @endisset
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Полное описание сотрудника</label>
                            <textarea class="form-control" rows="6" name="desc" placeholder="Текст полного описания">
                                @isset($team)
                                    {{ trim($team->desc) }}
                                @endisset
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Изображение</label>
                            <div class="input-group mb-3">
                                <img src="@isset($team){{Storage::url($team->img)}}@endisset" alt="">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img"
                                        value="@isset($team) {{ $team->img }}@endisset">
                                    <label class="custom-file-label" for="img">
                                        @isset($team)
                                            {{ $team->img }}
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
                            @isset($team)
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
