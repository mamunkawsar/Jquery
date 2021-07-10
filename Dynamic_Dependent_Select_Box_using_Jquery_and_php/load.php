<?php 

	$connect = mysqli_connect("localhost","root","","weblesson");
	$selected_country = $_POST['selected_country'];
	$sql = "SELECT * FROM tbl_state WHERE country_id = $selected_country";
	$result = mysqli_query($connect, $sql);
	$output = '<option value="">Select state</option>';
	while ($row = mysqli_fetch_array($result)) {
		$output .='<option value="'.$row["state_id"].'">'.$row["state_name"].'</option>';
	}
	echo $output;

?>