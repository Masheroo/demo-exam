@extends('base', ['page_title' => 'О нас'])

@section('content')

  @if(session()->has('message'))
    <h2 style="color: green">{{ session('message') }}</h2>
  @endif
 <div id="slider">
  <div class="slider-line">
    @foreach($products as $product)
      <div class="slide">
          <img src="/images/logo.jpg" class="card-img-top" alt="...">
          <div class="body">
              <p class="text">{{ $product->name . ' ' . $product->price }}</p>
          </div>
      </div>  
    @endforeach

  </div>
</div>
@stop
