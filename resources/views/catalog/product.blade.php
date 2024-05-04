@extends('base', ['page_title' => $product->name])

@section('content')

<div class="product-wrapper">

    <img src="/images/logo.jpg" alt="123">


    <!-- .product-row*4>p*2 -->
    <div class="product-row">
        <h1>Название товара</h1>
        <h1>{{ $product->name }}</h1>
    </div>
    <div class="product-row">
        <p>Цена</p>
        <p>{{ $product->price }}</p>
    </div>
    <div class="product-row">
        <p>Страна производитель</p>
        <p>{{ $product->country_creator }}</p>
    </div>
    <div class="product-row">
        <p>Дата выпуска</p>
        <p>{{ $product->release_date }}</p>
    </div>
    <div class="product-row">
        <p>Модель</p>
        <p>{{ $product->model }}</p>
    </div>
    
    <button class="btn btn-primary">Купить</button>
</div>

@stop
