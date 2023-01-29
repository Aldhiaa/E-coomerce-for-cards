
@extends('layouts.master')

@section('content')

	<section id="form mt-10 mb-10">
		<div class="container">
			<div class="row">
               
                
				<div class="col-sm-6">
					<div class="signup-form">
						<h2>التسجيل كمستخدم جديد!</h2>
					

						<form action="{{ route('submit_register') }}" method="POST">

							@csrf
							<input type="text" name="name" value="{{ old('name') }}" placeholder="اسم المستخدم"/>
							@error('name')
								<span class="invalid-feedback" role="ale-rt">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<input type="email" name="email" value="{{ old('email') }}" placeholder="عنوان البريد الإلكتروني"/>
							@error('email')
							<span class="invalid-feedback" role="ale-rt">
								<strong>{{ $message }}</strong>
							</span>
						    @enderror
							<input type="number" name="phone_number" value="{{ old("phone_number") }}" placeholder="رقم هاتفك" />
							@error('phone_number')
								<span class="invalid-feedback" role="ale-rt">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<input type="text" name="city" value="{{ old('city') }}" placeholder="المدينة"/>
							@error('city')
								<span class="invalid-feedback" role="ale-rt">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<input type="password" name="password" placeholder="كلمة المرور"/>
							@error('password')
							<span class="invalid-feedback" role="ale-rt">
								<strong>{{ $message }}</strong>
							</span>
						    @enderror
							<input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور"/>
							<button type="submit" class="btn btn-default">تسجيل</button>
						</form>
					</div>
                </div>
              
			</div>
		</div>
		<br>
	</section>
    @endsection