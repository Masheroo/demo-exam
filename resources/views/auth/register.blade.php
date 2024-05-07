@extends('base', ['page_title' => 'Регистрация'])

@section('content')

<h1>Регистрация</h1>

<form action="/register" method="post">
    @csrf
    <div class="input">
        <label for="name">Имя</label>
        <input required type="text" name="name" >
    </div>
    <div class="input">
        <label for="surname">Фамилия</label>
        <input type="text" required name="surname" >
    </div>
    <div class="input">
        <label for="pantonimyc">Отчество</label>
        <input type="text" required name="pantonimyc" >
    </div>
    <div class="input">
        <label for="login">Логин</label>
        <input type="text" required name="login" >
    </div>
    <div class="input">
        <label for="email">Почта</label>
        <input type="text" required name="email" >
    </div>
    <div class="input">
        <label for="password">Пароль</label>
        <input type="password" required name="password" >
    </div>
    <div class="input">
        <label for="password-repeat">Повторите пароль</label>
        <input type="password" required name="password-repeat" >
    </div>
    <div class="input">
        <label for="rules">Я согласен</label>
        <input type="checkbox" required name="rules" >
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <button type="submit">Регистрация</button>
</form>

@stop
