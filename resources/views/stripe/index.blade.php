@extends('layouts.master')

@section('content')         
 <div class="col-md-12 mt-2 mb-2">
    <pre id="res_token"></pre>
 </div>
</div>
<div class="row">
 <div class="col-md-4">
    <button class="btn btn-primary btn-block" onclick="stripePay(10)">Pay $10</button>
 </div>

</div>
</div>
<script src = "https://checkout.stripe.com/checkout.js" > </script> 
<script type = "text/javascript">
$(document).ready(function() {
$.ajaxSetup({
 headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
});
});

function stripePay(amount) {
var handler = StripeCheckout.configure({
key: 'pk_test_5f6jfFP2ZV5U9TXQYG0vtqFJ00eFVWNoRX', // your publisher key id
locale: 'auto',
token: function(token) {
 // You can access the token ID with `token.id`.
 // Get the token ID to your server-side code for use.
 console.log('Token Created!!');
 console.log(token)
 $('#res_token').html(JSON.stringify(token));
 $.ajax({
     url: '{{ url("payment-process") }}',
     method: 'post',
     data: {
         tokenId: token.id,
         amount: amount
     },
     success: (response) => {
         console.log(response)
     },
     error: (error) => {
         console.log(error);
         alert('Oops! Something went wrong')
     }
 })
}
});
handler.open({
name: 'Demo Site',
description: '2 widgets',
amount: amount * 100
});
} 
</script>
@endsection