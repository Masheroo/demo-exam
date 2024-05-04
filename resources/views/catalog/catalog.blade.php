@extends('base', ['page_title' => 'Каталог'])

@section('content')

<select name="" id="">
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>
<div class="catalog-wrapper">
    @foreach($products as $product)
    <div class="catalog-card card mb-5 mr-5">
        <img src="/images/logo.jpg" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">Название: {{ $product->name }}</h5>
            <p class="card-text">Цена: {{ $product->price }}</p>
            <a href="/catalog/{{ $product->id }}" class="btn btn-primary">Перейти</a>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
    </div>
    @endforeach
</div>

@stop
