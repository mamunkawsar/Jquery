





<?php
$connect = mysqli_connect("localhost","root","","weblesson");
$number = count($_POST["name"]);

if ($number>1) {
	for ($i=0; $i<$number; $i++) { 
		if (trim($_POST["name"][$i] != '')) {
			$sql = "INSERT INTO tbl_video (video_title) VALUES ('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted. Yeh!";
}
else {
	echo "Please Enter name";
}


?>