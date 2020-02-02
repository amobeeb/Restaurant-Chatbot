<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="fruit store">
	<meta name="keywords" content="fruit store">
	<title>Restaurant Ordering Chatbot System</title>
	<meta charset="utf-8" content="fruits">
	<link rel="stylesheet" type="text/css" href="{{url('asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('asset/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('asset/css/font-awesome.css')}}">
	<script type="text/javascript" src="{{url('asset/jquery/jquery-1.12.4.min.js')}}"></script>
	<script type="text/javascript" src="{{url('asset/js/bootstrap.min.js')}}"></script>
	<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
	<script>
		var botmanWidget = {
			// frameEndpoint: '/iFrameUrl'
			aboutText: "Hello",
			mainColor: '#408591',
			introMessage: "Hi, I'm Tokis Restaurant Chatbot ready to take your order",    
			title: 'Tokis Restaurant Bot',
			
		};
		</script>
		 <script>
		 function clickme(){
			botmanChatWidget.open()
		 }
		 </script>
</head>
<body onload="clickme()">
	 {{-- <button onclick="">Click Me</button> --}}
</body>
</html>

