





<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<h1>Weblesson tutorial.</h1>

<div class="container">
	<h3 align="center">Login</h3>





	<form id="login_form">
		<label>User name</label>
		<input type="text" name="username" id="username" class="form-control">
		<br>
		<label>Password</label>
		<input type="password" name="password" id="password" class="form-control">
		<br>
		<button class="button form-control" type="button" id="show_password" name="show_password">show password</button>
	</form>
</div>


</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#show_password').on('click',function(){
			var password_field = $('#password');
			var password_field_type = password_field.attr('type');

			if (password_field_type == 'password') {
				password_field.attr('type','text');
				$(this).html('Hide..');
			}
			else{
				password_field.attr('type','password');
				$(this).text('show');
			}
		});
	});
</script>






