
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title> s S Ajax Live Data Search using Jquery PHP MySql!</title>
  </head>
  <body>
  	<br>
  	<br>
	<div class="container">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="text-align:center; color: black;">
			  	<h4 style="font-weight: bold; color: #FFC300;">Ajax Live Data Search using Jquery PHP MySql</h4>
			  </div>
			  <div class="panel-body">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon">Search</span>
								<input type="text" class="form-control" name="search_text" id="search_text" placeholder="Enter customer name">
							</div>
						</div>
			  </div>
			  <br>
			  <div id="result">
			  	
			  </div>
			</div>
	</div>

  </body>
</html>

<script type="text/javascript">

$(document).ready(function(){
	$('#search_text').keyup(function(){
		var search_text = $(this).val()

		if (search_text !='') {
			$('#result').html('')
			$.ajax({
				url:"search.php",
				method:"post",
				data:{search_text:search_text},
				dataType:"text",
				success:function(data){
						$('#result').html(data);
						console.log();
				}
			})
		}
		else{
			$('#result').html('')
		}
	})
})

</script>