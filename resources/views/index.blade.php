@extends('layouts.master')
@section('content')
@include('parts.slider')
	<section>
		<div class="container">
			<div class="row">
                 @include('parts.left_sidebar')			
				<div class="col-sm-9 padding-right">
					<div class="features_items">  
						<h2 class="title text-center">المنتجات المميزة</h2>
							@foreach ($cards as $card)
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
											<div class="productinfo text-center">
											    <img src="/card/{{ $card->image}}" alt="" />												
												<h2>${{$card->price}} </h2>
												<p>{{$card->name}}</p>
												<a href="{{ route('showcard',$card->id) }}" class="btn btn-default">التفاصيل</a>
                                                <a href="{{ route('stripe',$card->id) }}" class="btn btn-default">أشتري الان</a>                                              
												<form action="{{ route('cart.add') }}" method="POST">
													@csrf
													<input type="hidden" name="id" value="{{ $card->id }}">
													<button type="submit" class="button"><i class="fa fa-shopping-cart"></i>أضف الى السلة</button></i>
												</form>
											</div>
									</div>							
								</div>				
							</div>	
							@endforeach								
					</div>					
				</div>	
			</div>
			@include('parts.category_tab')
			<br>
		</div>
		@include('parts.recommend')
	</section>
@endsection