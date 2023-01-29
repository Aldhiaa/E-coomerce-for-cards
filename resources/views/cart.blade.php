@extends('layouts.master')
@section('content')
	<section id="cart_carts">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">الرئيسية</a></li>
				  <li class="active">عربة التسوق</li>
				</ol>
			</div>
			@include('partials.messages')
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">المنتج</td>
							<td class="description"></td>
							<td class="price">السعر</td>
							<td class="quantity">الكمية</td>
							<td class="total">المجموع</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@php
							$cartTotal = 0;
						@endphp
						@forelse ($carts as $cart)
						@php
							$cartTotal += $cart->total();
						@endphp
						<tr>
							<td class="cart_card">
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $cart->card->name }}</a></h4>
							</td>
							<td class="cart_price">
								<p>${{$cart->card->price}} </p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$cart->quantity}}" autocomplete="off" size="2">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">${{ $cart->total() }}</p>
							</td>
							<td class="cart_delete">
								<form action="{{route('cart.remove', $cart->id)}}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit" class="cart_quantity_delete"><i class="fa fa-times"></i></a>
								</form>
							</td>
						</tr>
						@empty
						<div class="alert alert-danger">عربة التسوق فارغة!</div>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_carts-->

	<section id="do_action">
		<div class="container">

			<div class="row">
				
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>إجمالي عربة التسوق <span>${{$cartTotal}}</span></li>
							<li>الضريبة <span>${{$tax}}</span></li>
							<li>تكلفة الشحن <span>${{$shipping}}</span></li>
							<li>المجموع <span>${{$cartTotal + $tax + $shipping}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">حفظ التعديلات</a>
							<a class="btn btn-default check_out" href="">اتمام عملية الشراء</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	    @endsection

