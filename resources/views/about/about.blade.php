@extends('base', ['page_title' => 'О нас'])

@section('content')

 <div class="carousel slide mx-auto w-50" data-bs-ride="carousel" data-bs-interval="2000" data-bs-pause="false">
  <div class="carousel-inner">

    @foreach($products as $product)
    <div class="carousel-item active">
        <div class="card">
            <img src="/images/logo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $product->name . ' ' . $product->price }}</p>
            </div>
        </div>  
    </div>
    @endforeach

  </div>
</div>
@stop
