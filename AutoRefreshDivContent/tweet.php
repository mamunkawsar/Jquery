









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
	  	<h4 style="font-weight: bold;">Auto Refresh Div Content using php Ajax Jquery and Mysql</h4>
	  </div>

	  <form name="add_tweet" method="post">
	  	<div class="panel-body">
	    <div class="container">
	    <div class="jumbotron">
		  <label>Post tweet</label>
		  <input type="text" class="form-control" id="comment" name="comment">
		  <br>
		  <button class="btn btn-primary" style="float: right;" type="button" id="tweet_button" name="tweet_button">Tweet</button>
		</div>

		<div id="load_tweet">
			<span id=""></span>
		</div>

	    </div>
	  </div>
	  </form>

	</div>

  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tweet_button').on('click', function(){
			var tweet_value = $('#comment').val();
			if($.trim(tweet_value) != ''){
				$.ajax({
					url:"fetch.php",
					method:'POST',
					data:{tweet_comment:tweet_value},
					dataType:'text',
					success:function(data){
						$('#comment').val("")
					}
				})
			}
		})

// s S
// console.log(tweet_value)
	})
</script>