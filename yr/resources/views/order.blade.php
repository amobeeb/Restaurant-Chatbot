<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
    
</head>
<body onload="payWithPaystack()">
<button type="button" class="form-control btn btn-success" onclick="payWithPaystack()"> Make Payment </button> 
<script src="https://js.paystack.co/v1/inline.js"></script>
        <div id="paystackEmbedContainer"></div>
        
         
 <script>

  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_8b881c6ddfc04ec06dd2beb71280cda17349ccfa',
      email: "{{$email}}",
      amount: "{{$amount}}"+"00",
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Customer",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          // alert('You have done well');
         location.href = '/order/status/'+response.reference+'/{{$mobile}}/{{$amount}}';
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
</body>
</html>



     

