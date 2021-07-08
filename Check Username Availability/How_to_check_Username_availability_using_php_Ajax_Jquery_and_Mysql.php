




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title>Hello!</title>
  </head>
  <body>

  <br>
  <br>
  <br>
  <br>
  <br>

	<div class="panel panel-primary">
	  <div class="panel-heading" style="text-align:center; color: black;">
	  	<h4 style="font-weight: bold;">How to check Username availability using php Ajax Jquery and Mysql</h4>
	  </div>

	  <div class="panel-body">
	    <div class="container">
	    <div class="jumbotron">
		  <label>User name</label>
		  <input type="text" class="form-control" id="username" name="username">
		  <span id="availability"></span>
		</div>
	    </div>
	  </div>
	</div>

  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#username').keyup(function(){
			var username = $(this).val();
		$.ajax({
			url:"check.php",
			method:"POST",
			data:{user_name:username},
			dataType:"text",
			success:function(html){
				$('#availability').html(html);	
			}
		});
		});
	});
</script>