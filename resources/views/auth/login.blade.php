@extends('auth.layouts.auth')

@section('title', 'Авторизация')

@section('content')
    <div class="content-wrapper" style="margin-left: 0;">

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-6 offset-3 mt-5">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Войти</h3>
                            </div>
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Введите email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Пароль</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Введите пароль" name="password">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Войти</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
