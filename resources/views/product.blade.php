@extends('layouts/master')
@section('content')
<body>
	<section>
		<div class="container">
			<div class="row">				
				<div class="col-sm-9 padding-right">
					<div class="product-details">
						<div class="col-sm-5">
							<div class="view-product">							
								<img src="{{asset('assets/images/products/8.jpeg')}}" alt="" />						
							</div>					
						</div>
						<div class="col-sm-7">
							<div class="product-information">
								<img src="{{asset('assets/images/product-details/new.jpg')}}" class="newarrival" alt="" />
								<h2>بلوزة أديداس حرارية</h2>
								<img src="{{asset('assets/images/product-details/rating.png')}}" alt="" />
								<span>
									<span> $59</span>
									<label>عدد القطع:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										أضف الى العربة
									</button>
								</span>
								<p><b>التوفر:</b> في المتجر</p>
								<p><b>الماركة:</b> أديداس</p>
								<p><b>الصنف:</b> اكسسوريز</p>
							</div>
						</div>
					</div>
					
					<div class="category-tab shop-details-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">تفاصيل أخرى</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">الآراء (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-12">
									<p style="margin-right: 25px;">وصف المنتج وصف المنتج  وصف المنتج  وصف المنتج  وصف المنتج وصف المنتج وصف المنتج </p>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>ناصر</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
									</ul>
									<p><b>أكتب رأيك</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="الاسم"/>
											<input type="email" placeholder="عنوان البريد الالكتروني"/>
										</span>
										<textarea name="" ></textarea>
										<b>التقييم: </b> <img src="{{asset('assets/images/product-details/rating.png')}}" alt="" />
										
										<button type="button" class="btn btn-default pull-right">
											ارسال
										</button>
									</form>
								</div>
							</div>						
						</div>
					</div>									
				</div>							
			</div>
		</div>
	</section>	
    @endsection