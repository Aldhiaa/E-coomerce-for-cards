@extends('layouts.master')
@section('content')
	<section id="form mt-10 mb-10">
		<div class="container">
			<div class="row">       
				<div class="col-sm-6">
					<div class="signup-form">
						<h2>التسجيل كمزود جديد!</h2>
						<form action="{{ route('submit_joinprovide') }}" method="POST" enctype="multipart/form-data">
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
							<input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="اسم الشركة"/>
							@error('company_name')
								<span class="invalid-feedback" role="ale-rt">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<input type="text" name="company_url" value="{{ old('company_url') }}" placeholder="رابط الشركة"/>
							@error('company_url')
								<span class="invalid-feedback" role="ale-rt">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<label for="commercial_reggister">السجل التجاري</label>
							<input type="file" name="commercial_reggister"  placeholder="السجل التجاري"/>
							@error('commercial_reggister')
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
							<button type="submit" class="btn btn-default">إرسال</button>
						</form>
					</div>
                </div>            
			</div>
		</div>
		<br>
	</section>
    @endsection