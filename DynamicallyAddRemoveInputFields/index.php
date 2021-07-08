







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title> s S Dynamically Add / Remove input fields in PHP with Jquery Ajax!</title>
  </head>
  <body>

  <br>
  <br>
  <br>
  <br>
  <br>

	<div class="container container-fluid">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="text-align:center; color: black;">
			  	<h4 style="font-weight: bold; color: #FFC300;">Dynamically Add / Remove input fields in PHP with Jquery Ajax</h4>
			  </div>
			  <div class="panel-body">
			  		<form name="add_name" id="add_name">
				  		<table class="table table-bordered" style="border: 1px solid black; display: ;" id="dynamic_field">
				  			<tr>
				  				<td>
				  					<input type="text" class="form-control name_list" name="name[]" id="name" placeholder="Enter name">
				  				</td>
				  				<td>
				  					<button class="btn btn-primary" type="button" name="add" id="add">Add More</button>
				  				</td>
				  			</tr>
							</table>
							<input type="button" class="btn btn-success" name="submit" id="submit" value="Submit">
				  	</form>
			  </div>
			</div>
	</div>

  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		var i = 1;
		$('#add').click(function(){
			i++;
			$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control name_list" name="name[]" id="name" placeholder="Enter name"></td><td><button type="button" class="btn btn-danger btn_remove" id="'+i+'">X</button></td></tr>');
		})

		$(document).on('click', '.btn_remove', function(){
			var button_id = $(this).attr("id");
			$('#row'+button_id+'').remove();
		})

		$('#submit').click(function(){
			$.ajax({
				url:"name.php",
				method:"post",
				data:$('#add_name').serialize(),
				success:function(data){
					alert("Data inserted successfully!");
					$('#add_name')[0].reset();
				}
			})
		})


	})
</script>