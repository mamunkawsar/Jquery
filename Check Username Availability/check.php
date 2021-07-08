




<?php
$connect = mysqli_connect("localhost","root","","weblesson");
if (isset($_POST['user_name'])) {
	$sql = "select * from users where username = '".($_POST['user_name'])."'";
	$result = mysqli_query($connect, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo '<span class="text-success">User name exist.</span>';
	}
	else{
		echo '<span class="text-danger">User name do not exist.</span>';
	}
}

?>