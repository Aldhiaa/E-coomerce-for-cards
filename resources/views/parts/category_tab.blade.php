<div class="row">
    <div class="category-tab">
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                @foreach ($categories as $cat )
                <li class=""><a href="#pubgy" data-toggle="tab">{{$cat}}</a></li>
                @endforeach                
            </ul>
        </div>
        @foreach ($cards as $card )      
        <div class="tab-content">
            <div class="tab-pane fade active in" id="{{ $card->category}}" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-cards">
                            <div class="productinfo text-center">
                                <img src="/card/{{ $card->image}}" alt="" />
                                <h2>${{ $card->price }}</h2>
                                <p>{{ $card ->name }} </p>
                                <a href="{{ route('showcard',$card->id) }}" class="btn btn-default">التفاصيل</a>
                                <a href="{{ route('stripe',$card->id) }}" class="btn btn-default">أشتري الان</a>  
                                <form action="{{ route('cart.add',$card->id) }}" method="POST">
								    @csrf
                                    <input type="hidden" name="id" value="{{ $card->id }}">
									<button type="submit" class="button">أضف الى السلة</button>
								</form>                     
                        </div>
                    </div>
                </div>
            </div>
         @endforeach  
         <div class="row">
							{{ $cards->links() }}
		 </div>      
        </div>
    </div>
</div>