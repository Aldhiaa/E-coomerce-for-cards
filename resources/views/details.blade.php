@extends('layouts/master')
@section('content')


    <div class="product-image-wrapper">
        <div class="single-cards">
            <div class="productinfo text-center">
                <img src="/card/{{ $card->image}}" style="width:300px;" alt="" />
                <h2>${{ $card->price }}</h2>
                <h3>{{ $card->name }} </h3>
                <p>{{ $card->description}} </p>
                <a href="{{ route('stripe',$card->id) }}" class="btn btn-default">أشتري الان</a>                       
			</div>
        </div>
    </div>

           
 @endsection