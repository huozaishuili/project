<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form id="form">
		<input type="text" name="name">
		<input type="text" name="age">
		<input type="text" name="email">
		<input type="button" id="button" value="123">
	</form>
	<script src='https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js'></script>
	<script>
		$('#button').click(function(){
			$data=$('#form').serialize();
			$.post('/api/insert',$data);
		});
		// $.get('/api/get-demo?id=123&name=abc');
		// $.get('/api/get-insert);
		// $.post('/api/post-form-urlencode',{first_param:'first',second_param:'second'});
		// var data= new FormData();
		// data.append('first_param','first');
		// data.append('second_param','second');
		// $.ajax({
		// 	url:'/api/post-form-data',
		// 	type:'POST',
		// 	data:data,
		// 	contentType:false,
		// 	processData:false
		// });
		// $.ajax({
		// 	url:'/api/post-json',
		// 	type:'POST',
		// 	dataType:'json',
		// 	contentType:'application/json;',
		// 	data:JSON.stringify({'first_param':'first','second_param':'second'})
		// });
	</script>
</body>
</html>