@extends('layouts.app')

@section('title', 'Добавить пожелание')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Оставить поздравление</div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('wish.create') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="first_name">Ваше имя</label>
                                        <input id="first_name" name="first_name" type="text"
                                               aria-describedby="first_nameHelpBlock" required="required"
                                               class="form-control here">
                                        <span id="first_nameHelpBlock"
                                              class="form-text text-muted">Как Вас зовут?</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="last_name">Ваша фамилия</label>
                                        <input id="last_name" name="last_name" type="text" class="form-control here"
                                               aria-describedby="last_nameHelpBlock">
                                        <span id="last_nameHelpBlock" class="form-text text-muted">Можете не вводить. Это поле не обязательно.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Ваш e-mail</label>
                                <input id="email" name="email" type="text" class="form-control here" required="required"
                                       aria-describedby="emailHelpBlock">
                                <span id="emailHelpBlock" class="form-text text-muted">Обязательно. Сюда придет уведомление о публикации</span>
                            </div>
                            <div class="form-group">
                                <label for="wish_for">Кого поздравляем?</label>
                                <input id="wish_for" name="wish_for" type="text" class="form-control here"
                                       aria-describedby="wish_forHelpBlock">
                                <span id="wish_forHelpBlock" class="form-text text-muted">Оставьте пустым, если для всех.</span>
                            </div>
                            <div class="form-group">
                                <label for="wish">Текст поздравления</label>
                                <textarea id="wish" name="wish" cols="40" rows="5" class="form-control"
                                          aria-describedby="wishHelpBlock"></textarea>
                                <span id="wishHelpBlock" class="form-text text-muted">Пишите от всего сердца. Поддерживается язык разметки <a
                                            href="https://github.com/OlgaVlasova/markdown-doc/blob/master/README.md" target="_blank">Markdown</a>. Новая строка = двум нажатиям <kbd>Enter</kbd></span>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary">Оставить поздравление
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection