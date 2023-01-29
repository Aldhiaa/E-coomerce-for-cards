@extends('layouts.master')
@section('content')	
	<section id="form mt-20">
		<div class="container">
			<div class="row">			
				<div class="col-sm-6 col-sm-offset-1">
					<div class="login-form">
						<h2>التسجيل باستخدام حسابك</h2>

						@include('partials.messages')
						<form action="{{ route('submit_login')}}" method="POST">
							@csrf


							<input type="email" name="email" placeholder="عنوان البريد الإلكتروني الخاص بك" />
							<input type="password" name="password" placeholder="كلمة المرور" />
							<button type="submit" class="btn btn-default">تسجيل الدخول</button>
							<br>
							<h4><a href="{{ url('register') }}">أو التسجيل كمستخدم جديد</a></h4>
						</form>
					</div>
				</div>
		
				
			</div>
		</div>
	</section>
	
	
	
@endsection
  