
<?php

$connect = mysqli_connect("localhost","root","","weblesson");
$sql = "SELECT * FROM tbl_video limit 2";
$result = mysqli_query($connect, $sql);
// $x = mysqli_fetch_array($result);
// var_dump($x);
$video_id ='';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title> s S Load More Data using Ajax Jquery with PHP MySql!</title>
  </head>
  <body>

	<div class="container container-fluid">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="text-align:center; color: black;">
			  	<h4 style="font-weight: bold; color: #FFC300;">Load More Data using Ajax Jquery with PHP MySql</h4>
			  </div>
			  <div class="panel-body">
			    <table class="table" id="load_data_table">
				  	<?php
				  		while ($row = mysqli_fetch_array($result))
				  		{
				  			// var_dump($row);
				  		?>
			  					<tr>
					  				<td style="background: #1C2431; color:white;"><?php echo $row["video_title"]; ?></td>
					  			</tr>
				  			<?php
				  			$video_id = $row["video_id"];
				  		}
				  	?>
				  	<tr id="remove_row">
				  		<td style="padding-left: 0px; padding-right: 0px; padding-top: 4px;">
				  			<button style="border-radius: 0 !important;" data-vid="<?php echo $video_id; ?>" class="btn btn-success form-control" id="btn_more" name="btn_more">More</button>
				  		</td>
				  	</tr>
					</table>
			  </div>
			</div>
	</div>

  </body>
</html>

<script type="text/javascript">

</script>