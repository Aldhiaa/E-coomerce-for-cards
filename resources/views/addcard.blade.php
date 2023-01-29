@extends('layouts.master')
@section('content')
<div id="contact-page" class="container">
	<div class="bg">
		<div class="row" style="margin-bottom: 50px;">    		
			<div class="col-sm-12">    			   			
				<h2 class="title text-center">إضافة بطاقة جديد</h2>    			    				    							
			</div>			 		
		</div>    	
		<div class="row">  	
			<div class="col-sm-8">
				<div class="contact-form">
					<div class="status alert alert-success" style="display: none"></div>
					<form action="{{ route('storecard') }}" class="contact-form row"  method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group col-md-6">
							<input type="text" name="name" class="form-control" required="required" placeholder="اسم البطاقة">
						</div>
						<div class="form-group col-md-6">
							<input type="number" name="price" class="form-control" required="required" placeholder="السعر">
						</div>
						<div class="form-group col-md-6">
							<select name="category" class="form-control">
								<option> ايتيونز سعودي </option>
								<option>جوجل بلاي سعودي</option>
								<option>شدات ببجي </option>
								<option>بلايستيشن سعودي</option>
								<option>موبايلي</option>
								<option>STC</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<input type="file" name="image" class="form-control" required="required" placeholder="اختر صورة المنتج">
						</div>
						<div class="form-group col-md-12">
							<textarea name="description" id="message" required="required" class="form-control" rows="8" placeholder="وصف المنتج أو نبذة عنه"></textarea>
						</div>                        
						<div class="form-group col-md-12">
							<input type="submit" name="submit" class="btn btn-primary pull-right" value="اضافة">
						</div>
					</form>
				</div>
			</div>
		</div>  
	</div>	
</div><!--/#contact-page-->
	</section>
    @endsection