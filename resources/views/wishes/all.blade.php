@extends('layouts.app')

@section('title', 'Все поздравления')

@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            Ваше поздравление успешно сохранено и отправлено на модерацию!
        </div>
    @endif
    @each('wishes.card', $wishes, 'wish', 'wishes.no_one')
@endsection