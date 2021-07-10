<?php 

	$connect = mysqli_connect("localhost","root","","weblesson");
	$output = '';
	$sql = "SELECT * FROM tbl_customer WHERE name like '%".$_POST["search_text"]."%'";
	$result = mysqli_query($connect, $sql);
	// var_dump($result);
	if (mysqli_num_rows($result) > 0) {
		$output .='<h4 align="center">Search Result</h4>';
		$output .='<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal code</th>
							<th>Country</th>
						</tr>
					</table>
				</div>';

	echo $output;
	}
	else {
		echo '<h4 align="center">No data found!</h4>';
	}


 ?>