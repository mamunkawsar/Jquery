<?php

function loadCountry(){
	$countryName = '';
	$connect = mysqli_connect("localhost","root","","weblesson");
	$sql = "SELECT * FROM tbl_country ORDER BY country_name ASC";
	$result = mysqli_query($connect, $sql);
	while ($row = mysqli_fetch_array($result)) {
		$countryName .= '<option value="'.$row["country_id"].'">'.$row["country_name"].'</option>';
	}
	echo ($countryName);
}
loadCountry();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title> s S Dynamic Dependent Select Box using Jquery and Ajax in PHP!</title>
  </head>
  <body>

	<div class="container container-fluid">
			<div class="panel panel-primary">
			  <div class="panel-heading" style="text-align:center; color: black;">
			  	<h4 style="font-weight: bold; color: #FFC300;">Dynamic Dependent Select Box using Jquery and Ajax in PHP</h4>
			  </div>
			  <div class="panel-body">
						<select name="select_country" id="select_country">
						  <option>Select country</option>
						  <?php loadCountry(); ?>
						</select>
						<br>
						<br>
						<select name="select_state" id="select_state">
						  <option>Select state</option>
						  
						</select>
			  </div>
			</div>
	</div>

  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
$("#select_country").change(function(){
	var selected_country = $(this).val();
			$.ajax({
				url:"load.php",
				method:"post",
				data:{selected_country:selected_country},
				success:function(data){
					$('#select_state').html(data);
					console.log(data);
				}
			})
})
})

</script>