@extends('base', ['page_title' => 'Вход'])

@section('content')

<h1>Вход</h1>

<form action="/auth" method="post">
    @csrf
    <div class="input">
        <label for="login">Логин</label>
        <input type="text" required name="login" >
    </div>

    <div class="input">
        <label for="password">Пароль</label>
        <input type="password" required name="password" >
    </div>
    
    @if(session()->has('error'))
        <h2 style="color: red">{{ session('error') }}</h2>
    @endif

    <button type="submit">Вход</button>
</form>

@stop